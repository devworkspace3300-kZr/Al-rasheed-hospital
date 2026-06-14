<?php

include("database.php");
include("mailer.php");
include("form.php");

class Session
{
   var $username;    
   var $userid;      
   var $userlevel;  
   var $time;        
   var $logged_in;  
   var $userinfo = array(); 
   var $url;       
   var $referrer;
   var $refno;
   
//     function __construct() {
//     if (isset($_COOKIE['user_timezone'])) {
//         date_default_timezone_set($_COOKIE['user_timezone']);
//     } else {
//         date_default_timezone_set('UTC'); // fallback
//     }

//     $this->time = time();
//     $this->startSession();
// }
   
  function __construct() {
    // Always use UK timezone
    date_default_timezone_set('Europe/London'); // Handles GMT/BST automatically

    $this->time = time();
    $this->startSession();
}



  
   function startSession(){
      global $database; 
      session_start(); 


    
      $this->logged_in = $this->checkLogin();

   
      if(!$this->logged_in){
         $this->username = $_SESSION['username'] = GUEST_NAME;
         $this->userlevel = GUEST_LEVEL;
         $database->addActiveGuest($_SERVER['REMOTE_ADDR'], $this->time);
      }else{
         $database->addActiveUser($this->username, $this->time);
      }
      
   
      $database->removeInactiveUsers();
      $database->removeInactiveGuests();
      
   
      if(isset($_SESSION['url'])){
         $this->referrer = $_SESSION['url'];
      }else{
         $this->referrer = "/";
      }

    
      $this->url = $_SESSION['url'] = $_SERVER['PHP_SELF'];
   }

  
 function checkLogin() {
    global $database;

    $current_time = time();

    if (isset($_COOKIE['cookname']) && isset($_COOKIE['cookid'])) {
        $_SESSION['username'] = $_COOKIE['cookname'];
        $_SESSION['userid']   = $_COOKIE['cookid'];
        $_SESSION['login_time'] = $_SESSION['login_time'] ?? $current_time;
    }

    if (isset($_SESSION['username']) &&
        isset($_SESSION['userid']) &&
        $_SESSION['username'] != GUEST_NAME){
        if (!isset($_SESSION['login_time']) || ($current_time - $_SESSION['login_time']) > COOKIE_EXPIRE) {
            $this->logout(); 
            return false;
        }

        if ($database->confirmUserID($_SESSION['username'], $_SESSION['userid']) != 0) {
            $this->logout();
            return false;
        }

        $this->userinfo  = $database->getUserInfo($_SESSION['username']);
        $this->username  = $this->userinfo['username'];
        $this->userid    = $this->userinfo['userid'];
        $this->role_id = $this->userinfo['role_id'];
        $this->refno = $this->userinfo['reference_no'];

        return true;
    }

    $this->logout();
    return false;
}


 
   function login($id,$subremember, $subpass){
      global $database, $form; 
	  
	  // $jumo2 = md5($_SESSION['CSRF_Code'].'8j5j&*&K5jrffgF9wAJDIH'.'JKHds998954(*)(*dfkjll');
		 
	  // $field = "CSRF_Code";  
   //    if($CSRF_Code != $jumo2){
   //    $form->setError($field, "<br>Network error. please try again.".$CSRF_Code."<br>".$jumo2);
   //    }
	  
	   $field = "id"; 
      if(!$id || strlen($id = trim($id)) == 0){
         $form->setError($field, "* Id not entered");
      }
      

      $field = "pass"; 
      if(!$subpass){
         $form->setError($field, "* Password not entered");
      }
      
     
      if($form->num_errors > 0){
         return false;
      }

   
      $id = stripslashes($id);
      $result = $database->confirmUserPass($id, $subpass);

      $resultforsession = $database->loginsession($id);
      $subuser = $resultforsession['username'];
      $refno = $resultforsession['reference_no'];


    
      if($result == 1){
         $field = "id";
         $form->setError($field, "* Login id not found");
      }
      else if($result == 2){
         $field = "pass";
         $form->setError($field, "* Invalid password");
      }
      
   
      if($form->num_errors > 0){
         return false;
      }


    
      $this->userinfo  = $resultforsession;
      $this->username  = $_SESSION['username'] = $resultforsession['username'] ?: $resultforsession['name'];
      $this->userid    = $_SESSION['userid']   = $this->generateRandID();
      $this->role_id   = $_SESSION['role_id']  = $resultforsession['role_id'];
      $this->refno     = $_SESSION['refno']    = $resultforsession['reference_no'];
         

   


    
      $database->updateUserField($this->username, "userid", $this->userid);
      $database->addActiveUser($this->username, $this->time);
      $database->removeActiveGuest($_SERVER['REMOTE_ADDR']);

    
      if ($subremember) {
          // ✅ Set cookie and session
          setcookie("cookname", $this->username, time() + COOKIE_EXPIRE, COOKIE_PATH);
          setcookie("cookid",   $this->userid,   time() + COOKIE_EXPIRE, COOKIE_PATH);
      }

      // ✅ Always set session
      $_SESSION['username'] = $this->username;
      $_SESSION['userid']   = $this->userid;
      $_SESSION['login_time'] = time(); // 🕒 Track login time for auto-expiry


    
      return true;
   }


 
   function logout(){
      global $database; 
      if(isset($_COOKIE['cookname']) && isset($_COOKIE['cookid'])){
         setcookie("cookname", "", time()-COOKIE_EXPIRE, COOKIE_PATH);
         setcookie("cookid",   "", time()-COOKIE_EXPIRE, COOKIE_PATH);
      }

   
      unset($_SESSION['username']);
      unset($_SESSION['userid']);

    
      $this->logged_in = false;
      
    
      $database->removeActiveUser($this->username);
      $database->addActiveGuest($_SERVER['REMOTE_ADDR'], $this->time);
      
    
      $this->username  = GUEST_NAME;
      $this->userlevel = GUEST_LEVEL;
   }

 ////////// Start Custom Functions
   //$_POST['fullName'],$_POST['email'], $_POST['phone'], $_POST['address'], $_POST['postcode'],$_POST['position'], $_POST['qualification'],$_POST['dateQualified'], $_POST['institution'], $_POST['dbs-number'], $_POST['dbs-date'], $_POST['update-service'], $_POST['eligible'], $_POST['visa-status'], $_POST['visa-expiry'], $_POST['health-check'], $_POST['cv']
   function register($fullname, $email, $phone, $pass, $conpass) {
    global $database, $form, $mailer;

    // ------------------------
    // 1. Validate fullname
    // ------------------------
    $field = "fullname"; 
    if (!$fullname || strlen(trim($fullname)) == 0) {
        $form->setError($field, "* name is required");
    } else {
        $fullname = trim(stripslashes($fullname));
        if (strlen($fullname) < 5) {
            $form->setError($field, "* name below 5 characters");
        } else if (strlen($fullname) > 30) {
            $form->setError($field, "* name above 30 characters");
        }
        else if (!preg_match("/^[a-zA-Z\s.'-]+$/", $fullname)) {
          $form->setError($field, "* Name contains invalid characters");
      }
 // else if (!preg_match("/^([0-9a-z_])+$/i", $fullname)) {
 //            $form->setError($field, "* Username not alphanumeric");
 //        } 
        else if ($database->usernameTaken($fullname)) {
            $form->setError($field, "* Username already in use");
        } else if ($database->usernameBanned($fullname)) {
            $form->setError($field, "* name banned");
        }
    }

    // ------------------------
    // 2. Validate email
    // ------------------------
    $field = "email";  
    if (!$email || strlen(trim($email)) == 0) {
        $form->setError($field, "* Email is required");
    }else if ($database->emailTaken($email)) {
            $form->setError($field, "* Email already in use");
        } else {
        $regex = "/^[_+a-z0-9-]+(\.[_+a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]{1,})*\.([a-z]{2,}){1}$/i";
        if (!preg_match($regex, $email)) {
            $form->setError($field, "* Email invalid");
        }
    }

    // ------------------------
    // 3. Validate phone
    // ------------------------
    $field = "phone";
    if (!$phone || strlen(trim($phone)) == 0) {
        $form->setError($field, "* phone is required");
    }

    // ------------------------
    // 4. Validate password and confirm password
    // ------------------------
    $fieldPass = "pass";
    $fieldCon = "conpass";

    if ($pass === '') {
        $form->setError($fieldPass, "* password is required");
    } else if (strlen($pass) < 6) {
        $form->setError($fieldPass, "* password must be at least 6 characters");
    }

    if ($conpass === '') {
        $form->setError($fieldCon, "* confirm password is required");
    } else if ($pass !== $conpass) {
        $form->setError($fieldCon, "* passwords do not match");
    }

    // ------------------------
    // 5. Stop if errors exist
    // ------------------------
    if ($form->num_errors > 0) {
        return 1;
    }

    // ------------------------
    // 6. Register user (pass to database layer)
    // ------------------------
    if ($database->addNewUser($fullname, $email, $phone, $conpass)) {
        return 0; // success
    } else {
        return 2; // database insert failed
    }
}


  
  
  
  
  
  
  
  ////////////////////////// END Custom Functions
  
   function isAdmin(){
      return ($this->userlevel == ADMIN_LEVEL ||
              $this->username  == ADMIN_NAME);
   }
   
    function isMaster(){
      return ($this->userlevel == MASTER_LEVEL);
   }
   
    function isAgent(){
      return ($this->userlevel == AGENT_LEVEL);
	}
   
    function isMember(){
      return ($this->userlevel == AGENT_MEMBER_LEVEL);
   }
   

 
   function generateRandID(){
      return md5($this->generateRandStr(16));
   }
   
  
   function generateRandStr($length){
      $randstr = "";
      for($i=0; $i<$length; $i++){
         $randnum = mt_rand(0,61);
         if($randnum < 10){
            $randstr .= chr($randnum+48);
         }else if($randnum < 36){
            $randstr .= chr($randnum+55);
         }else{
            $randstr .= chr($randnum+61);
         }
      }
      return $randstr;
   }
};



$session = new Session;


$form = new Form;

?>
