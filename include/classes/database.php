<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'vendor/autoload.php'; 
include("constants.php");
      
class MySQLDB
{
   var $connection;        
   var $num_active_users;  
   var $num_active_guests; 
   var $num_members;      

   function __construct(){
   
     $this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());

 
      $this->num_members = -1;
      
      if(TRACK_VISITORS){
     
         $this->calcNumActiveUsers();
      
     
         $this->calcNumActiveGuests();
      }
   }


   function confirmUserPass($id, $password){
  
  // $username = str_replace('&lt;',"~",str_replace('<',"~&gt;",strip_tags(mysqli_real_escape_string($this->connection, $username))));
  $password = str_replace('&lt;',"~",str_replace('<',"~&gt;",strip_tags(mysqli_real_escape_string($this->connection, $password))));
  
      // if(!get_magic_quotes_gpc()) {
        //  $username = addslashes($username);
      // }

   
      $q = "SELECT password FROM ".TBL_USERS." WHERE reference_no = '$id'";
      $result = mysqli_query($this->connection, $q);
      if(!$result || (mysqli_num_rows($result) < 1)){
         return 1;
      }

   
      $dbarray = mysqli_fetch_array($result);
      $dbarray['password'] = stripslashes($dbarray['password']);
      $password = stripslashes($password);

   
      if($password == $dbarray['password']){
         return 0;
      }
      else{
         return 2;
      }
   }


    function confirmPass($reference_no, $subcurpass){
  
  // $username = str_replace('&lt;',"~",str_replace('<',"~&gt;",strip_tags(mysqli_real_escape_string($this->connection, $username))));
  $subcurpass = str_replace('&lt;',"~",str_replace('<',"~&gt;",strip_tags(mysqli_real_escape_string($this->connection, $subcurpass))));
  
      // if(!get_magic_quotes_gpc()) {
        //  $username = addslashes($username);
      // }

   
      $q = "SELECT password FROM users WHERE reference_no = '$reference_no'";
      $result = mysqli_query($this->connection, $q);
      if(!$result || (mysqli_num_rows($result) < 1)){
         return 1;
      }

   
      $dbarray = mysqli_fetch_array($result);
      $dbarray['password'] = stripslashes($dbarray['password']);
      $subcurpass = stripslashes($subcurpass);

   
      if($subcurpass == $dbarray['password']){
         return 0;
      }
      else{
         return 2;
      }
   }
   
  
   function confirmUserID($username, $userid){
    $username = str_replace('&lt;',"~",str_replace('<',"~&gt;",strip_tags(mysqli_real_escape_string($this->connection, $username))));
   $userid = str_replace('&lt;',"~",str_replace('<',"~&gt;",strip_tags(mysqli_real_escape_string($this->connection, $userid))));
      // if(!get_magic_quotes_gpc()) {
        //  $username = addslashes($username);
      // }

   
      $q = "SELECT userid FROM ".TBL_USERS." WHERE username = '$username'";
      $result = mysqli_query($this->connection, $q);
      if(!$result || (mysqli_num_rows($result) < 1)){
         return 1;
      }

    
      $dbarray = mysqli_fetch_array($result);
      $dbarray['userid'] = stripslashes($dbarray['userid']);
      $userid = stripslashes($userid);

   
      if($userid == $dbarray['userid']){
         return 0;
      }
      else{
         return 2;
      }
   }
   
  
   function usernameTaken($username){
   $username = str_replace('&lt;',"~",str_replace('<',"~&gt;",strip_tags(mysqli_real_escape_string($this->connection, $username))));
      // if(!get_magic_quotes_gpc()){
      //    $username = addslashes($username);
      // }
      $q = "SELECT username FROM ".TBL_USERS." WHERE username = '$username'";
      $result = mysqli_query($this->connection, $q);
      return (mysqli_num_rows($result) > 0);
   }
   function emailTaken($email){
   $username = str_replace('&lt;',"~",str_replace('<',"~&gt;",strip_tags(mysqli_real_escape_string($this->connection, $email))));
      // if(!get_magic_quotes_gpc()){
      //    $username = addslashes($username);
      // }
      $q = "SELECT email FROM ".TBL_USERS." WHERE email = '$email'";
      $result = mysqli_query($this->connection, $q);
      return (mysqli_num_rows($result) > 0);
   }
   
  
   function usernameBanned($username){
   $username = str_replace('&lt;',"~",str_replace('<',"~&gt;",strip_tags(mysqli_real_escape_string($this->connection, $username))));
      // if(!get_magic_quotes_gpc()){
      //    $username = addslashes($username);
      // }
      $q = "SELECT username FROM ".TBL_BANNED_USERS." WHERE username = '$username'";
      $result = mysqli_query($this->connection, $q);
      return (mysqli_num_rows($result) > 0);
   }
   
   
   ////// START Custom Functions
   
   
   function clientdata($username){
 $username = str_replace('&lt;',"~",str_replace('<',"~&gt;",strip_tags(mysqli_real_escape_string($this->connection, $username))));
      $q = "SELECT * FROM users where username='$username'";
      $result = mysqli_query($this->connection, $q);

      if(!$result || (mysqli_num_rows($result) < 1)){
         return NULL;
      }

      $dbarray = mysqli_fetch_array($result);
      return $dbarray;
   }

    function getclassdata(){
      $q = "SELECT * FROM classes ";
      $result = mysqli_query($this->connection, $q);

      if(!$result || (mysqli_num_rows($result) < 1)){
         return NULL;
      }

      $dbarray = mysqli_fetch_array($result);
      return $dbarray;
   }




  


    function loginsession($id){
 // $username = str_replace('&lt;',"~",str_replace('<',"~&gt;",strip_tags(mysqli_real_escape_string($this->connection, $username))));
      $q = "SELECT * FROM users where reference_no ='$id'";
      $result = mysqli_query($this->connection, $q);

      if(!$result || (mysqli_num_rows($result) < 1)){
         return NULL;
      }

      $dbarray = mysqli_fetch_array($result);
      return $dbarray;
   }
  
  function addNewUser($fullname, $email, $phone, $conpass) {
    $fullname = mysqli_real_escape_string($this->connection, $fullname);
    $email    = mysqli_real_escape_string($this->connection, $email);
    $phone    = mysqli_real_escape_string($this->connection, $phone);
    $conpass  = mysqli_real_escape_string($this->connection, $conpass);
    // $passwordHash = password_hash($pass, PASSWOR
    $currentTime = date('Y-m-d H:i:s');

    // Fetch admin role id
    $sqlRole = "SELECT id FROM roles WHERE name = 'admin' LIMIT 1";
    $resultRole = mysqli_query($this->connection, $sqlRole);
    $row = mysqli_fetch_assoc($resultRole);
    $role_id = (int)$row['id'];

    $parts = explode(' ', $fullname);
    $firstname = $parts[0];
    $username = strtolower($firstname) . rand(1000, 9999);

    // Insert without reference_no first
    $q = "
        INSERT INTO users (role_id, name, username, email, password, phone, status,userlevel, created_at)
        VALUES (
            $role_id,
            '$fullname',
            '$username',
            '$email',
            '$conpass',
            '$phone',
            'active',
            '$role_id',
            '$currentTime'
        )
    ";
    $insert = mysqli_query($this->connection, $q);

    if ($insert) {
    $user_id = mysqli_insert_id($this->connection);

    // e.g., FN000123
    $reference_no = 'FN' . str_pad($user_id, 6, '0', STR_PAD_LEFT);

    // reference_no is VARCHAR now, so this stores the full string
    mysqli_query(
        $this->connection,
        "UPDATE users SET reference_no='" . mysqli_real_escape_string($this->connection, $reference_no) . "' WHERE id=" . (int)$user_id
    );
    return true;
}
    return false;
}


 
   function updateUserField($username, $field, $value){
   // $username = str_replace('&lt;',"~",str_replace('<',"~&gt;",strip_tags(mysqli_real_escape_string($this->connection, $username))));
   $field = str_replace('&lt;',"~",str_replace('<',"~&gt;",strip_tags(mysqli_real_escape_string($this->connection, $field))));
   $value = str_replace('&lt;',"~",str_replace('<',"~&gt;",strip_tags(mysqli_real_escape_string($this->connection, $value))));
      $q = "UPDATE ".TBL_USERS." SET ".$field." = '$value' WHERE username = '$username'";
      return mysqli_query($this->connection, $q);
   }



  

   
   
   function groupdata($type, $CSRF_Code) {
    $type = str_replace('&lt;', "~", str_replace('<', "~&gt;", strip_tags(mysqli_real_escape_string($this->connection, $type))));
    $CSRF_Code = str_replace('&lt;', "~", str_replace('<', "~&gt;", strip_tags(mysqli_real_escape_string($this->connection, $CSRF_Code))));


   
   // $jumo2 = md5($_SESSION['CSRF_Code'].'8j5j&*&K5jrffgF9wAJDIH'.'JKHds998954(*)(*dfkjll');
   
//    if($CSRF_Code == $jumo2){
// // in CKRF

// if($type == "stp_fieldset"){
// $q = "SELECT username FROM users order by username ASC";
// }


// // End in CKRF
// }



// Out of CKRF
if($type == "stp_fieldset_more"){
$q = "SELECT username FROM users order by username ASC";
}
// if($type == "users"){
// $q = "SELECT * FROM profile  WHERE Validity = 1";
// }

if($type == "userstomembers"){
$q = "SELECT * FROM profile  WHERE Validity = 1";
}

if($type == "membersRequest"){
$q = "SELECT * FROM candidateinfo WHERE Validity = 0 ORDER BY id DESC";

}
if($type == "users"){
$q = "SELECT * FROM users ";
}




//start query process



 $result = mysqli_query($this->connection, $q);
   $num_rows = mysqli_num_rows($result);
   if(!$result || ($num_rows < 0)){
      echo "";
      return;
   }
    if ($num_rows == 0) {
        echo "<tr><td colspan='6' class='text-center'>No record found</td></tr>";
        return;
    }
   
   
   for($i=0; $i<$num_rows; $i++){

      mysqli_data_seek($result, $i);
      $row=mysqli_fetch_row($result);

//END query process


// if($CSRF_Code == $jumo2){
// //In CKRF
// if($type == "stp_fieldset"){
// echo $row[0];
// }

// //END In CKRF
// }

//Out of CKRF
if($type == "stp_fieldset_getnamereg"){
echo '<option value="'.$row[0].'">'.$row[1].'</option>';
}

if ($type == "membersRequest") {
    $url = $this->urlEncoder($row[1]);
    echo "
    <tr>
        <td>" . htmlspecialchars($row[1]) . "</td>
        <td>" . htmlspecialchars($row[2]) . "</td>
        <td>" . htmlspecialchars($row[3]) . "</td>
        <td>
            <a href='memberdetails.php?r={$url}' class='btn btn-sm text-white' style='border-radius: 20px; background-color: #173663; padding: 6px 15px; font-size: 0.875rem;'>
                <i class='fa fa-eye mr-1'></i> View
            </a>
        </td>
    </tr>";
}








if($type == "users"){

   $url = $this->urlEncoder($row[8]);
echo "<tr>
<td>" . $row[8]  . " </td>
<td>" . $row[1]  . " </td>
<td>" . $row[5]  . " </td>



<td><a href='userdetails.php?r=".$url."'  class='btn btn-primary btn-sm' style='border-radius:20px;'>Details</a></td>
</tr>";
}



if($type == "applications"){
    $url = $this->urlEncoder($row[0]);
echo "<tr>
<td>" . $row[1] . "</td>
<td>" . $row[2] . "</td>
<td>" . $row[3] . "</td>



<td><a href='applicationdetails.php?id=".$url."'>Details</a></td>

</tr>";
}


// END Out of CKRF
} }





   ///////END Custom Functions
   

   function approveRequest($refno,$username, $useremail, $password){
      $currentTime = date('Y-m-d H:i:s');
      // $pass = md5($password);
      $userlevel = 0;
      $q = "INSERT INTO `users`(`id`, `username`, `password`, `userid`, `userlevel`, `email`, `timestamp`, `parent_directory`, `reference_no`, `display_name`,`joining_time`) VALUES ('','$username','$password','','','$useremail','','','$refno','$username','$currentTime')";
      return mysqli_query($this->connection, $q);
   }

  




  
   function getUserInfo($username){
   $username = str_replace('&lt;',"~",str_replace('<',"~&gt;",strip_tags(mysqli_real_escape_string($this->connection, $username))));
      $q = "SELECT * FROM ".TBL_USERS." WHERE username = '$username'";
      $result = mysqli_query($this->connection, $q);
    
      if(!$result || (mysqli_num_rows($result) < 1)){
         return NULL;
      }
    
      $dbarray = mysqli_fetch_array($result);
      return $dbarray;
   }


   
   
    // function profile($username){
//   $username = str_replace('&lt;',"~",str_replace('<',"~&gt;",strip_tags(mysqli_real_escape_string($this->connection, $username))));
//       $q = "SELECT * FROM proofofaddress WHERE id = '$id'";
//       $result = mysqli_query($this->connection, $q);
    
//       if(!$result || (mysqli_num_rows($result) < 1)){
//          return NULL;
//       }
    
//       $dbarray = mysqli_fetch_array($result);
//       return $dbarray;
//   }
   
   
  
   
   

   function applicationinfo($userid){
    //   $username = str_replace('&lt;',"~",str_replace('<',"~&gt;",strip_tags(mysqli_real_escape_string($this->connection, $username))));
         $q = "SELECT * FROM proofofaddress WHERE id = '$userid'";
         $result = mysqli_query($this->connection, $q);
       
         if(!$result || (mysqli_num_rows($result) < 1)){
            return NULL;
         }
       
         $dbarray = mysqli_fetch_array($result);
         return $dbarray;
   }
   
   
    

   function membershipRequests(){
         $q = "SELECT * FROM candidateinfo WHERE Validity = 0";
         $result = mysqli_query($this->connection, $q);
         $requests = mysqli_num_rows($result);
         return $requests;
      }

      // function candidateupdt($refno){
      //    $q = "SELECT * FROM booking WHERE reference_no = refno";
      //    $result = mysqli_query($this->connection, $q);
      //    $requests = mysqli_num_rows($result);
      //    return $requests;
      // }
     

    
      
      
      
     
      
    

     

      // candidate

     

 
      

   function getNumMembers(){
      if($this->num_members < 0){
         $q = "SELECT * FROM ".TBL_USERS;
         $result = mysqli_query($this->connection, $q);
         $this->num_members = mysqli_num_rows($result);
      }
      return $this->num_members;
   }
function getNumMemberstouser(){
      if($this->num_members < 0){
         $q = "SELECT * FROM ".TBL_USERS;
         $result = mysqli_query($this->connection, $q);
         $this->num_members = mysqli_num_rows($result);
      }
      return $this->num_members;
   }
    function getapplications(){
         $q = "SELECT username,email FROM proofofaddress ORDER BY username";
         $result = mysqli_query($this->connection, $q);
         $applications = mysqli_num_rows($result);
         return $applications;
      }


      function getUserOnly($username){
     $username = str_replace('&lt;',"~",str_replace('<',"~&gt;",strip_tags(mysqli_real_escape_string($this->connection, $username))));
      $q = "SELECT username FROM ".TBL_USERS." WHERE username = '$username'";
      $result = mysqli_query($this->connection, $q);
   
      if(!$result || (mysqli_num_rows($result) < 1)){
         return NULL;
      }
  
      $dbarray = mysqli_fetch_array($result);
      return $dbarray;
   }
   
 //Delete process

   //delete user from profile and users
   function deletemp($refno){
      
      $q = "DELETE FROM `users` WHERE reference_no = '$refno'";
      return mysqli_query($this->connection, $q);
      
   }
   function deletmember($refno){
      
      $q = "DELETE FROM `candidateinfo` WHERE reference_no = '$refno'";
      return mysqli_query($this->connection, $q);
      
   }
   
 
    function urlEncoder($value){
    return urlencode(base64_encode($value));
   }
    function urlDecoder($value){
    return base64_decode(urldecode($value));
   }


   
  
   function calcNumActiveUsers(){
   
      $q = "SELECT * FROM ".TBL_ACTIVE_USERS;
      $result = mysqli_query($this->connection, $q);
      $this->num_active_users = mysqli_num_rows($result);
   }
 
   function calcNumActiveGuests(){
    
      $q = "SELECT * FROM ".TBL_ACTIVE_GUESTS;
      $result = mysqli_query($this->connection, $q);
      $this->num_active_guests = mysqli_num_rows($result);
   }
 
   function addActiveUser($username, $time){
   // $username = str_replace('&lt;',"~",str_replace('<',"~&gt;",strip_tags(mysqli_real_escape_string($this->connection, $username))));
   $time = str_replace('&lt;',"~",str_replace('<',"~&gt;",strip_tags(mysqli_real_escape_string($this->connection, $time))));
      $q = "UPDATE ".TBL_USERS." SET timestamp = '$time' WHERE username = '$username'";
      mysqli_query($this->connection, $q);
      
      if(!TRACK_VISITORS) return;
      $q = "REPLACE INTO ".TBL_ACTIVE_USERS." VALUES ('$username', '$time')";
      mysqli_query($this->connection, $q);
      $this->calcNumActiveUsers();
   }
   
 
   function addActiveGuest($ip, $time){
   $ip = str_replace('&lt;',"~",str_replace('<',"~&gt;",strip_tags(mysqli_real_escape_string($this->connection, $ip))));
   $time = str_replace('&lt;',"~",str_replace('<',"~&gt;",strip_tags(mysqli_real_escape_string($this->connection, $time))));
      if(!TRACK_VISITORS) return;
      $q = "REPLACE INTO ".TBL_ACTIVE_GUESTS." VALUES ('$ip', '$time')";
      mysqli_query($this->connection, $q);
      $this->calcNumActiveGuests();
   }
   
 
   function removeActiveUser($username){
   $username = str_replace('&lt;',"~",str_replace('<',"~&gt;",strip_tags(mysqli_real_escape_string($this->connection, $username))));
      if(!TRACK_VISITORS) return;
      $q = "DELETE FROM ".TBL_ACTIVE_USERS." WHERE username = '$username'";
      mysqli_query($this->connection, $q);
      $this->calcNumActiveUsers();
   }
   
 
   function removeActiveGuest($ip){
   $ip = str_replace('&lt;',"~",str_replace('<',"~&gt;",strip_tags(mysqli_real_escape_string($this->connection, $ip))));
      if(!TRACK_VISITORS) return;
      $q = "DELETE FROM ".TBL_ACTIVE_GUESTS." WHERE ip = '$ip'";
      mysqli_query($this->connection, $q);
      $this->calcNumActiveGuests();
   }
   
 
   function removeInactiveUsers(){
      if(!TRACK_VISITORS) return;
      $timeout = time()-USER_TIMEOUT*60;
      $q = "DELETE FROM ".TBL_ACTIVE_USERS." WHERE timestamp < $timeout";
      mysqli_query($this->connection, $q);
      $this->calcNumActiveUsers();
   }

 
   function removeInactiveGuests(){
      if(!TRACK_VISITORS) return;
      $timeout = time()-GUEST_TIMEOUT*60;
      $q = "DELETE FROM ".TBL_ACTIVE_GUESTS." WHERE timestamp < $timeout";
      mysqli_query($this->connection, $q);
      $this->calcNumActiveGuests();
   }



   

   function query($query){
      return mysqli_query($this->connection, $query);
   }
};


$database = new MySQLDB;

?>
