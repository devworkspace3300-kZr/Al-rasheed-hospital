<?php

include("include/classes/session.php");

class Process
{
 
   function __construct(){
      global $session;
  
      if(isset($_POST['sublogin'])){
         $this->procLogin();
      }
      elseif (isset($_POST['impersonate'])) {
           $this->procImpersonate();
       }
      // candidates
       else if(isset($_POST['subjoin'])){
         $this->procRegister();
      }
      else if(isset($_POST['registerasschool'])){
         $this->procRegisterasschool();
      }
      else if(isset($_POST['joinbyadmin'])){
         $this->procRegisterbyadmin();
      }
      else if(isset($_POST['registerschool'])){
         $this->procRegisterschool();
      }
      //Admin
      else if(isset($_POST['joinadmin'])){
         $this->procRegisteradmin();
      }
      
     
      
      else if(isset($_POST['signup'])){
         $this->procsignup();
      }
      
      

      else if(isset($_POST['editpassword'])){
         $this->procEditpassword();
      }
      else if(isset($_POST['procEditpasswordbyadmin'])){
         $this->procEditpasswordbyadmin();
      }

      else if(isset($_POST['profilepic'])){
         $this->profilepic();
      }

       else if(isset($_POST['editcandprofile'])){
         $this->proeditcandprofile();
      }
      else if(isset($_POST['parentdirectory'])){
         $this->parentdirectory();
      }

     
      else if(isset($_POST['addmsg'])){
         $this->document_update();
      }
      else if(isset($_POST['addupdatemsg'])){
         $this->addupdatemsg();
      }
     


      
      else if($session->logged_in){
         $this->procLogout();
      }
     
       else{
          header("Location: index.php");
       }
   }

   function procLogin(){
      global $session, $form;
      $rememberMe = isset($_POST['rememberMe']) ? true : false;

      $retval = $session->login($_POST['id'],$rememberMe, $_POST['pass']);
      
      if($retval){
         header("Location: modules/dashboard.php");
      }
      else{
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
         header("Location: index.php");
      }
   }

   function procImpersonate(){
    global $session;

    // Logout whoever is currently logged in (admin)
    $session->logout(false); // false to prevent redirect, if your logout supports it

    // Login as the candidate directly
    $retval = $session->login($_POST['id'], true, $_POST['pass']);

    if ($retval) {
        header("Location: dashboard.php");
    } else {
        header("Location: index.php?error=impersonation_failed");
    }
}

   
 
   function procLogout(){
      global $session;
      $retval = $session->logout();
      header("Location: index.php");
   }
   
 
   function procRegister(){
      global $session, $form;
      
      $fullname = ucwords($_POST['fullname']);
      // $address = ucwords($_POST['address']);

      // $cv_name = $_FILES['cv']['name']; 
      //  $fileType = $_FILES['cv']['type'];

      //  $path = "candidates-cvs/".$cv_name;
      //  $dir_path = "candidates-cvs/".$cv_name;

       
       // move_uploaded_file($_FILES['cv']['tmp_name'], $path);

      $retval = $session->register($fullname,$_POST['email'], $_POST['phone'], $_POST['pass'], $_POST['conpass']);
      
     
      if($retval == 0){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = true;
        
         header("Location: signup.php?signup=true");
      }
   
      else if($retval == 1){
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
         header("Location: signup.php?signup=false");
      }
    
      else if($retval == 2){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = false;
         header("Location: signup.php?error=2");
      }
   }

   function procRegisterbyadmin(){
      global $session, $form;
      $fullname = ucwords($_POST['fullname']);
      // $address = ucwords($_POST['address']);

      $cv_name = $_FILES['cv']['name']; 
       $fileType = $_FILES['cv']['type'];

       $path = "candidates-cvs/".$cv_name;
       $dir_path = "candidates-cvs/".$cv_name;

       

       move_uploaded_file($_FILES['cv']['tmp_name'], $path);

      $retval = $session->Registerbyadmin($fullname, $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['postcode'],$_POST['teaching_assistant'],$_POST['learning_support_assistant'],$_POST['care_supervisor'],$_POST['cover_supervisor'],$_POST['attendance_officer'],$_POST['learning_mentor'],$_POST['behavior_support_worker'],$_POST['pastoral_officer'],$_POST['admin_support'],$_POST['teacher_all_subjects'], $_POST['qualification'],$_POST['dateQualified'], $_POST['institution'], $_POST['dbsnumber'], $_POST['dbsdate'], $_POST['updateservice'], $_POST['eligible'], $_POST['visastatus'], $_POST['visaexpiry'], $_POST['healthcheck'], $cv_name);
      
     
      if($retval == 0){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = true;
        
         header("Location: registerbyadmin.php?signup=true");
      }
   
      else if($retval == 1){
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
         header("Location: registerbyadmin.php?signup=false");
      }
    
      else if($retval == 2){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = false;
         header("Location: registerbyadmin.php?error=2");
      }
   }

   function procRegisteradmin(){
     global $session, $form;
      $user = ucwords($_POST['user']);
      $retval = $session->procRegisteradmin($_POST['user'], $_POST['pass'], $_POST['email']);
      
     
      if($retval == 0){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = true;
         header("Location: registeradmin.php?signup=true");
      }
   
      else if($retval == 1){
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
         header("Location: registeradmin.php?signup=false");
      }
    
      else if($retval == 2){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = false;
         header("Location: index.php?error=2");
      }
   }



   function procRegisterschool(){
      global $session, $form;
      $schoolname = ucwords($_POST['schoolname']);
      // $address = ucwords($_POST['address']);

      // $cv_name = $_FILES['cv']['name']; 
      //  $fileType = $_FILES['cv']['type'];

      //  $path = "candidates-cvs/".$cv_name;
      //  $dir_path = "candidates-cvs/".$cv_name;

       $approvedby = $session->username;

       // move_uploaded_file($_FILES['cv']['tmp_name'], $path);

      $retval = $session->registerschool($schoolname,$_POST['schooladdress'], $_POST['schoolpostcode'], $_POST['schoolnumber'], $_POST['schoolemail'],$_POST['adminname'], $_POST['adminphone'],$_POST['adminemail'],$_POST['adminPosition'], $_POST['username'], $_POST['password'], $_POST['confirmPassword'], $_POST['termsCheck'], $_POST['signature'], $_POST['date'], $approvedby);
      
     
      if($retval == 0){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = true;
        
         header("Location: registerschool.php?signup=true");
      }
   
      else if($retval == 1){
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
         header("Location: registerschool.php?signup=false");
      }
    
      else if($retval == 2){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = false;
         header("Location: registerschool.php?error=2");
      }
   }

   function procRegisterasschool(){
      global $session, $form;
      $schoolname = ucwords($_POST['schoolname']);
      // $address = ucwords($_POST['address']);

      // $cv_name = $_FILES['cv']['name']; 
      //  $fileType = $_FILES['cv']['type'];

      //  $path = "candidates-cvs/".$cv_name;
      //  $dir_path = "candidates-cvs/".$cv_name;

       $approvedby = "From web";

       // move_uploaded_file($_FILES['cv']['tmp_name'], $path);

      $retval = $session->registerasschool($schoolname,$_POST['schooladdress'], $_POST['schoolpostcode'], $_POST['schoolnumber'], $_POST['schoolemail'],$_POST['adminname'], $_POST['adminphone'],$_POST['adminemail'],$_POST['adminPosition'], $_POST['username'], $_POST['password'], $_POST['confirmPassword'], $_POST['termsCheck'], $_POST['signature'], $_POST['date'], $approvedby);
      
     
      if($retval == 0){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = true;
        
         header("Location: registerasschool.php?signup=true");
      }
   
      else if($retval == 1){
         header("Location: registerasschool.php?signup=false");
      }
    
      else if($retval == 2){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = false;
         header("Location: registerasschool.php?error=2");
      }
   }









   function procsignup(){
      global $session, $form;
      if(ALL_LOWERCASE){
         $_POST['user'] = strtolower($_POST['user']);
      }
      $retval = $session->signup($_POST['user'], $_POST['pass'], $_POST['email']);
      
     
      if($retval == 0){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = true;
         header("Location: add-employe.php?add-employe=true");
      }
   
      else if($retval == 1){
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
         header("Location: add-employe.php?add-employe=false");
      }
    
      else if($retval == 2){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = false;
         header("Location: index.php?error=2");
      }
   }






function procupdatepersonalinfo(){
      global $database, $session, $form;
      
      // $picture = $_FILES['picture']['name']; 
      //  $fileType = $_FILES['picture']['type'];

      //  $path = "requitment/".$pic;
      //  // $dir_path = "images/".$photo_name;

      //  move_uploaded_file($_FILES['picture']['tmp_name'], $path);
    
      $retval = $session->updatepersonalinfo( $_POST['fullname'] ,$_POST['canemail'] , $_POST['dob'], $_POST['phone'], $_POST['email'], $_POST['address'], $_POST['postcode'], $_POST['reference_no']);


      if($retval){
         //$_SESSION['useredit'] = true;
          header('Location: candidate-requitment.php?r='.$database->urlEncoder($_POST['reference_no']).'&change=success');
      }else{
         // $_SESSION['value_array'] = $_POST;
         // $_SESSION['error_array'] = $form->getErrorArray();
          header('Location: candidate-requitment.php?r='.$database->urlEncoder($_POST['reference_no']).'&change=error');
      }
   }

   function procupdatemergency(){
      global $database,$session, $form;

     
    
      $retval = $session->updatemergency($_POST['emergency_name'] , $_POST['relationship'], $_POST['contact_number'], $_POST['reference_no'],$_POST['canemail']);


      if($retval){
         //$_SESSION['useredit'] = true;
         header('Location: candidate-requitment.php?r='.$database->urlEncoder($_POST['reference_no']).'&change=success');
      }else{
         // $_SESSION['value_array'] = $_POST;
         // $_SESSION['error_array'] = $form->getErrorArray();
         header('Location: candidate-requitment.php?r='.$database->urlEncoder($_POST['reference_no']).'&change=error');
      }
   }


    function procupdatebank(){
      global $database,$session, $form;

     
    
      $retval = $session->updatebank($_POST['bank_name'] , $_POST['account_number'], $_POST['sort_code'], $_POST['reference_no'],$_POST['canemail']);


      if($retval){
         //$_SESSION['useredit'] = true;
        header('Location: candidate-requitment.php?r='.$database->urlEncoder($_POST['reference_no']).'&change=success');
      }
    
      else{
         // $_SESSION['value_array'] = $_POST;
         // $_SESSION['error_array'] = $form->getErrorArray();
        header('Location: candidate-requitment.php?r='.$database->urlEncoder($_POST['reference_no']).'&change=error');
      }
   }

      function procupdateinterestinschool(){
      global $database,$session, $form;

     
    $preference = implode(',', $_POST['preference']);
      $retval = $session->updateinterestinschool($_POST['Bradford'], $_POST['Leeds'], $_POST['Wakefield'],$preference,$_POST['time'],$_POST['teaching_assistant'],$_POST['learning_support_assistant'],$_POST['care_supervisor'],$_POST['cover_supervisor'],$_POST['attendance_officer'],$_POST['learning_mentor'],$_POST['behavior_support_worker'],$_POST['pastoral_officer'],$_POST['admin_support'],$_POST['teacher_all_subjects'],$_POST['price'], $_POST['reference_no'],$_POST['canemail']);


      if($retval){
         //$_SESSION['useredit'] = true;
        header('Location: candidate-requitment.php?r='.$database->urlEncoder($_POST['reference_no']).'&change=success');
      }
    
      else{
         // $_SESSION['value_array'] = $_POST;
         // $_SESSION['error_array'] = $form->getErrorArray();
         header('Location: candidate-requitment.php?r='.$database->urlEncoder($_POST['reference_no']).'&change=error');
      }
   }

   function updateprice(){
      global $database,$session, $form;

     
    
      $retval = $session->updateprice($_POST['reference_no'],$_POST['price']);


      if($retval){
         //$_SESSION['useredit'] = true;
        header('Location: candidate-profile.php?r='.$database->urlEncoder($_POST['reference_no']).'&change=success');
      }
    
      else{
         // $_SESSION['value_array'] = $_POST;
         // $_SESSION['error_array'] = $form->getErrorArray();
         header('Location: candidate-profile.php?r='.$database->urlEncoder($_POST['reference_no']).'&change=error');
      }
   }

   function uploadpriceforschool(){
      global $database,$session, $form;

     
    
      $retval = $session->uploadpriceforschool($_POST['reference_no'],$_POST['price']);


      if($retval){
         //$_SESSION['useredit'] = true;
        header('Location: candidate-profile.php?r='.$database->urlEncoder($_POST['reference_no']).'&change=success');
      }
    
      else{
         // $_SESSION['value_array'] = $_POST;
         // $_SESSION['error_array'] = $form->getErrorArray();
         header('Location: candidate-profile.php?r='.$database->urlEncoder($_POST['reference_no']).'&change=error');
      }
   }

   function procupdateinsuranceno() {
    global $database, $session, $form;

    $uploadDir = "requitment/";

    // ✅ Helper function for file upload or fallback
    function uploadOrKeep($fileKey, $existingKey, $uploadDir) {
        // If new file uploaded
        if (isset($_FILES[$fileKey]) && $_FILES[$fileKey]['error'] === UPLOAD_ERR_OK) {
            $fileName = basename($_FILES[$fileKey]['name']);
            $targetPath = $uploadDir . $fileName;

            // Move uploaded file
            if (move_uploaded_file($_FILES[$fileKey]['tmp_name'], $targetPath)) {
                return $fileName;
            }
        }

        // ✅ No new upload — use existing if provided
        return $_POST[$existingKey] ?? "";
    }

    // ✅ Process each file field (use fallback key)
    $pass_photo             = uploadOrKeep('passport_photo', 'existing_passport_photo', $uploadDir);
    $uk_passport            = uploadOrKeep('uk_passport', 'existing_uk_passport', $uploadDir);
    $licence_photo          = uploadOrKeep('licence_photo', 'existing_licence_photo', $uploadDir);
    $poa                    = uploadOrKeep('poa', 'existing_poa', $uploadDir);
    $cv                     = uploadOrKeep('cv', 'existing_cv', $uploadDir);
    $qualification_document = uploadOrKeep('qualification_document', 'existing_qualification_document', $uploadDir);
    $dbsdocument            = uploadOrKeep('dbsdocument', 'existing_dbsdocument', $uploadDir);

    // ✅ Now call your database update function
    $retval = $session->updateinsuranceno(
        $_POST['national_insurance'],
        $pass_photo,
        $uk_passport,
        $_POST['licence'],
        $licence_photo,
        $poa,
        $cv,
        $_POST['qualification'],
        $_POST['year'],
        $qualification_document,
        $_POST['other_qualifications'],
        $_POST['dbs_check'],
        $_POST['dbs_no'],
        $_POST['dbs_issue'],
        $dbsdocument,
        $_POST['updateservicereg'],
        $_POST['permissionuk'],
        $_POST['visa_expiry'],
        $_POST['reference_no'],
        $_POST['canemail']
    );

    if ($retval) {
        header('Location: candidate-requitment.php?r=' . $database->urlEncoder($_POST['reference_no']) . '&change=success');
    } else {
        header('Location: candidate-requitment.php?r=' . $database->urlEncoder($_POST['reference_no']) . '&change=error');
    }
}



    function procupdatereferences(){
      global $database,$session, $form;

     
    
      $retval = $session->updatereferences($_POST['previous_experiance'] ,$_POST['employment_ref_name'] , $_POST['employment_ref_position'], $_POST['employment_ref_email'],$_POST['employment_ref_phone'], $_POST['character_ref_name'], $_POST['character_ref_position'], $_POST['character_ref_email'], $_POST['character_ref_phone'], $_POST['reference_no'], $_POST['canemail'], $_POST['canphone'], $_POST['caname']);


      if($retval){
         //$_SESSION['useredit'] = true;
         header('Location: candidate-requitment.php?r='.$database->urlEncoder($_POST['reference_no']).'&change=success');
      }
    
      else{
         // $_SESSION['value_array'] = $_POST;
         // $_SESSION['error_array'] = $form->getErrorArray();
         header('Location: candidate-requitment.php?r='.$database->urlEncoder($_POST['reference_no']).'&change=error');
      }
   }


   function procuploadcertificate() {
    global $database, $session, $form;

    // Directory where files are stored
    $uploadDir = "requitment/";

    // Default: use existing file from hidden input
    $certificate_upload = $_POST['existing_certificate_upload'] ?? '';

    // ✅ Check if a new file was uploaded
    if (isset($_FILES['certificate_upload']) && $_FILES['certificate_upload']['error'] === UPLOAD_ERR_OK) {
        $fileName = time() . "_" . basename($_FILES['certificate_upload']['name']);
        $targetPath = $uploadDir . $fileName;

        // Move new file
        if (move_uploaded_file($_FILES['certificate_upload']['tmp_name'], $targetPath)) {
            $certificate_upload = $fileName; // Replace old with new
        } else {
            // Optional: handle move error
            error_log("File move failed for " . $_FILES['certificate_upload']['name']);
        }
    }

    // Now call your session update
    $retval = $session->uploadcertificate(
        $certificate_upload,
        $_POST['reference_no'],
        $_POST['canemail']
    );

    // Redirect based on success/failure
    if ($retval) {
        header('Location: candidate-requitment.php?r=' . $database->urlEncoder($_POST['reference_no']) . '&change=success');
    } else {
        header('Location: candidate-requitment.php?r=' . $database->urlEncoder($_POST['reference_no']) . '&change=error');
    }
}

   
      function procupdatehealthdec(){
      global $database,$session, $form;

     
      // $health_declaration_document = $_FILES['health_declaration_document']['name']; 
      //  $fileType = $_FILES['health_declaration_document']['type'];

      //  $path = "requitment/".$health_declaration_document;
       // $dir_path = "images/".$photo_name;

       

       // move_uploaded_file($_FILES['health_declaration_document']['tmp_name'], $path);

      $retval = $session->updatehealthdec($_POST['reference_no'], $_POST['medically_fit'], $_POST['medical_conditions'], $_POST['canemail']);


      if($retval){
         //$_SESSION['useredit'] = true;
         header('Location: candidate-requitment.php?r='.$database->urlEncoder($_POST['reference_no']).'&change=success');
      }
    
      else{
         // $_SESSION['value_array'] = $_POST;
         // $_SESSION['error_array'] = $form->getErrorArray();
         header('Location: candidate-requitment.php?r='.$database->urlEncoder($_POST['reference_no']).'&change=error');
      }
   }


    function procupdateconfirmations(){
      global $database,$session, $form;

      // $signature = $_FILES['signature']['name']; 
      //  $fileType = $_FILES['signature']['type'];

      //  $path = "requitment/".$signature;
      //  move_uploaded_file($_FILES['signature']['tmp_name'], $path);
    
      $retval = $session->updateconfirmations($_POST['fitness_declaration'] , $_POST['criminal_offence_declaration'], $_POST['true_information_declaration'],$_POST['convictions'],$_POST['disciplinary'],$_POST['health_condition'],$_POST['data_sharing'],$_POST['signature'], $_POST['reference_no'], $_POST['canemail']);


      if($retval){
         //$_SESSION['useredit'] = true;
        header('Location: candidate-requitment.php?r='.$database->urlEncoder($_POST['reference_no']).'&change=success');
      }
    
      else{
         // $_SESSION['value_array'] = $_POST;
         // $_SESSION['error_array'] = $form->getErrorArray();
        header('Location: candidate-requitment.php?r='.$database->urlEncoder($_POST['reference_no']).'&change=error');
      }
   }


   function procupdatechildrenconfirmations(){
      global $database,$session, $form;
    
      $retval = $session->updatechildrenconfirmations($_POST['childcare_orders'] , $_POST['childcare_orders_child'], $_POST['barred_from_working'],$_POST['child_offence'],$_POST['signature'], $_POST['reference_no'], $_POST['canemail']);


      if($retval){
         //$_SESSION['useredit'] = true;
        header('Location: candidate-requitment.php?r='.$database->urlEncoder($_POST['reference_no']).'&change=success');
      }
    
      else{
         // $_SESSION['value_array'] = $_POST;
         // $_SESSION['error_array'] = $form->getErrorArray();
        header('Location: candidate-requitment.php?r='.$database->urlEncoder($_POST['reference_no']).'&change=error');
      }
   }


   function procupdatekeyinformation() {
    global $database, $session, $form;

    // Upload directory
    $uploadDir = "requitment/";

    // Ensure directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    // --- Handle file upload or retain existing ---
    $self_employed_file = '';

    if (isset($_FILES['self_employed_file']) && $_FILES['self_employed_file']['error'] === UPLOAD_ERR_OK) {
        // ✅ A new file was uploaded
        $fileName = time() . "_" . basename($_FILES['self_employed_file']['name']);
        $targetPath = $uploadDir . $fileName;

        if (move_uploaded_file($_FILES['self_employed_file']['tmp_name'], $targetPath)) {
            $self_employed_file = $fileName;
        } else {
            error_log("❌ File upload failed: " . $_FILES['self_employed_file']['name']);
            $self_employed_file = $_POST['existing_self_employed_file'] ?? ''; // fallback
        }

    } else {
        // ✅ No new file uploaded → keep the existing one if provided
        $self_employed_file = $_POST['existing_self_employed_file'] ?? '';
    }

    // --- Call your session update function ---
    $retval = $session->updatekeyinformation(
        $_POST['your_name'],
        $_POST['employment_business'],
        $_POST['employer'],
        $_POST['contract_type'],
        $self_employed_file,
        $_POST['payment_responsible'],
        $_POST['payment_frequency'],
        $_POST['rate_of_pay'],
        $_POST['deductions_law'],
        $_POST['other_deductions'],
        $_POST['fees_goods_services'],
        $_POST['annual_leave'],
        $_POST['other_benefits'],
        $_POST['example_rate_pay'],
        $_POST['net_take_home_pay'],
        $_POST['reference_no'],
        $_POST['canemail']
    );

    // --- Redirect ---
    if ($retval) {
        header('Location: candidate-requitment.php?r=' . $database->urlEncoder($_POST['reference_no']) . '&change=success');
    } else {
        header('Location: candidate-requitment.php?r=' . $database->urlEncoder($_POST['reference_no']) . '&change=error');
    }
}



   function procupdaterepresentativeexample(){
      global $database,$session, $form;
    
      $retval = $session->updaterepresentativeexample($_POST['example_rate_pay'] ,$_POST['deductions_wage_law'] ,$_POST['other_deductions_costs'] ,$_POST['fees_goods_services'] ,$_POST['net_take_home_pay'], $_POST['reference_no'], $_POST['canemail']);


      if($retval){
         //$_SESSION['useredit'] = true;
        header('Location: candidate-requitment.php?r='.$database->urlEncoder($_POST['reference_no']).'&change=success');
      }
    
      else{
         // $_SESSION['value_array'] = $_POST;
         // $_SESSION['error_array'] = $form->getErrorArray();
        header('Location: candidate-requitment.php?r='.$database->urlEncoder($_POST['reference_no']).'&change=error');
      }
   }

   function procupdateavailability(){
      global $database,$session, $form;
    
      $retval = $session->updateavailability($_POST['reference_no'] ,$_POST['calendar_data'],$_POST['canemail']);


      if($retval){
         //$_SESSION['useredit'] = true;
        header('Location: candidate-requitment.php?r='.$database->urlEncoder($_POST['reference_no']).'&change=success');
      }
    
      else{
         // $_SESSION['value_array'] = $_POST;
         // $_SESSION['error_array'] = $form->getErrorArray();
        header('Location: candidate-requitment.php?r='.$database->urlEncoder($_POST['reference_no']).'&change=error');
      }
   }

   function procupdateavailabilitybyschool(){
      global $database,$session, $form;
      file_put_contents('debug_calendar_data.txt', $_POST['calendar_data']);

    $positions = isset($_POST['positions']) ? $_POST['positions'] : [];
    $positions_str = implode(', ', $positions);
      $retval = $session->updateavailabilitybyschool($_POST['reference_no'],$_POST['schoolname'],$_POST['reference'] ,$_POST['calendar_data'],$positions_str,$_POST['time_slot'],$_POST['candidatename'],$_POST['candidatemail']);


      if($retval){
         //$_SESSION['useredit'] = true;
        header('Location: book.php?school='.$database->urlEncoder($_POST['schoolname']).'&r='.$database->urlEncoder($_POST['reference_no']).'&id='.$database->urlEncoder($_POST['id']).'&change=success');
      }
    
      else{
         // $_SESSION['value_array'] = $_POST;
         // $_SESSION['error_array'] = $form->getErrorArray();
        header('Location: book.php?school='.$database->urlEncoder($_POST['schoolname']).'&r='.$database->urlEncoder($_POST['reference_no']).'&id='.$database->urlEncoder($_POST['id']).'&change=error');
      }
   }

     function submitrefereedetails(){
      global $database,$session, $form;

      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
         

          $fields = [
            'punctuality', 'attendance', 'flexibility_reliability',
            'interpersonal_communication_skills', 'ability_to_work_well_with_others',
            'skill_set', 'ability_to_work_under_pressure',
            'ability_to_learn_new_skills', 'ability_to_take_instructions',
            'honesty_and_integrity', 'how_were_they_to_manage'
          ];

          $responses = [];
          foreach ($fields as $field) {
              $responses[$field] = $_POST[$field] ?? null;
          }

          

          if ($_POST['reference'] == "employment") {
            $reference = "employment";
            $retval = $session->submitemploymentrefereedetails($_POST['email'],$_POST['reference_no'],$reference,$_POST['candidate_name'],$_POST['position_held'],$_POST['duties'],$_POST['date_started'],$_POST['date_finished'],$_POST['company'],$_POST['referee_name'],$responses['punctuality'],$responses['attendance'],$responses['flexibility_reliability'],$responses['interpersonal_communication_skills'],$responses['ability_to_work_well_with_others'],$responses['skill_set'],$responses['ability_to_work_under_pressure'],$responses['ability_to_learn_new_skills'],$responses['ability_to_take_instructions'],$responses['honesty_and_integrity'],$responses['how_were_they_to_manage'],$_POST['reason_leaving'],$_POST['re_employ'],$_POST['training'],$_POST['comments'],$_POST['print_name_date']);
          }elseif($_POST['reference'] == "character"){
            $reference = "character";
            $retval = $session->submitcharacterrefereedetails($_POST['email'],$_POST['reference_no'],$reference,$_POST['candidate_name'],$_POST['position_held'],$_POST['duties'],$_POST['date_started'],$_POST['date_finished'],$_POST['company'],$_POST['referee_name'],$responses['punctuality'],$responses['attendance'],$responses['flexibility_reliability'],$responses['interpersonal_communication_skills'],$responses['ability_to_work_well_with_others'],$responses['skill_set'],$responses['ability_to_work_under_pressure'],$responses['ability_to_learn_new_skills'],$responses['ability_to_take_instructions'],$responses['honesty_and_integrity'],$responses['how_were_they_to_manage'],$_POST['reason_leaving'],$_POST['re_employ'],$_POST['training'],$_POST['comments'],$_POST['print_name_date']);
          }


         if($retval){
            //$_SESSION['useredit'] = true;
           header('Location: reference-form.php?r='.urlencode(base64_encode($_POST['reference_no'])).'&ref='.$reference.'&submit=success'.'&m='.urlencode(base64_encode($_POST['email'])).'&submit=success');
         }
       
         else{
            // $_SESSION['value_array'] = $_POST;
            // $_SESSION['error_array'] = $form->getErrorArray();
           header('Location: reference-form.php?r='.urlencode(base64_encode($_POST['reference_no'])).'&ref='.$reference.'&m='.urlencode(base64_encode($_POST['email'])).'&submit==error');
         }
      }

      
   }

   


    function procEditpassword(){
      global $session, $form;
    
      $retval = $session->editAccount($_POST['curpass'], $_POST['newpass'], $_POST['reference_no'],$_POST['userlevel']);


      if($retval == 0){
         //$_SESSION['useredit'] = true;
         
         if ($_POST['userlevel'] == 1) {
           header("Location: school-settings.php?changepass=success");
         }elseif($session->userlevel == 0){
            header("Location: candidate-settings.php?changepass=success");
         }else{
            header("Location: settings.php?changepass=success");
         }
      }
    
      else if($retval == 1){
         // $_SESSION['value_array'] = $_POST;
         // $_SESSION['error_array'] = $form->getErrorArray();
         if ($_POST['userlevel'] == 1) {
            header("Location: school-settings.php?errorpass=error");
         }elseif($session->userlevel == 0){
            header("Location: candidate-settings.php?errorpass=error");
         }else{
             header("Location: settings.php?errorpass=error");
         }
        
      }
      else if($retval == 2){
         // $_SESSION['value_array'] = $_POST;
         // $_SESSION['error_array'] = $form->getErrorArray();
         
         if ($_POST['userlevel'] == 1) {
            header("Location: school-settings.php?error=db_error");
         }elseif($session->userlevel == 0){
            header("Location: candidate-settings.php?error=db_error");
         }else{
             header("Location: settings.php?error=db_error");
         }
      }
   }

    function procEditpasswordbyadmin(){
      global $database,$session, $form;
    
      $retval = $session->editAccount($_POST['curpass'], $_POST['newpass'], $_POST['reference_no']);


      if($retval == 0){
         //$_SESSION['useredit'] = true;
        header('Location: candidate-profile.php?r='.$database->urlEncoder($_POST['reference_no']).'&changepass=success');
      }
    
      else if($retval == 1){
         // $_SESSION['value_array'] = $_POST;
         // $_SESSION['error_array'] = $form->getErrorArray();
         header('Location: candidate-profile.php?r='.$database->urlEncoder($_POST['reference_no']).'&errorpass=error');
      }
      else if($retval == 2){
         // $_SESSION['value_array'] = $_POST;
         // $_SESSION['error_array'] = $form->getErrorArray();
         header('Location: candidate-profile.php?r='.$database->urlEncoder($_POST['reference_no']).'&error=db_error');
      }
   }





   function editprofile(){
      global $session, $form;



      $retval = $session->editprofile( $_POST['displayname'], $_POST['phone'],$_POST['reference_no']);
      
     
      if($retval == 0){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = true;
         header("Location: settings.php?msg=true");
      }
   
      else if($retval == 1){
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
         header("Location: settings.php?msg=false");
      }
    
      else if($retval == 2){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = false;
         header("Location: index.php?error=2");
      }
   }

    function editprofileschool(){
      global $session, $form;
      $schoolname = ucwords($_POST['schoolname']);
      

      $retval = $session->editprofileschool($_POST['displayname'],$schoolname,$_POST['schooladdress'], $_POST['schoolpostcode'], $_POST['schoolnumber'], $_POST['schoolemail'],$_POST['adminname'], $_POST['adminphone'],$_POST['adminemail'],$_POST['adminPosition'],$_POST['reference_no'],$_POST['userlevel']);
      
     
      if($retval == 0){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = true;
         
         if ($_POST['userlevel'] == 1) {
            header("Location: school-settings.php?msg=true");
         }else{
           header("Location: settings.php?msg=true");
         }
      }
   
      else if($retval == 1){
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
        
         if ($_POST['userlevel'] == 1) {
             header("Location: school-settings.php?msg=false");
         }else{
            header("Location: settings.php?msg=false");
         }
      }
    
      else if($retval == 2){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = false;
         header("Location: index.php?error=2");
      }
   }

   function editprofileschoolbyadmin(){
      global $database,$session, $form;
      $schoolname = ucwords($_POST['schoolname']);
      

      $retval = $session->editprofileschoolbyadmin($schoolname,$_POST['schooladdress'], $_POST['schoolpostcode'], $_POST['schoolnumber'], $_POST['schoolemail'],$_POST['adminname'], $_POST['adminphone'],$_POST['adminemail'],$_POST['adminPosition'],$_POST['reference_no']);
      
     
      if($retval == 0){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = true;
         header('Location: edit_school.php?sc='.$database->urlEncoder($_POST['reference_no']).'&change=success');
      }
   
      else if($retval == 1){
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
         header('Location: edit_school.php?sc='.$database->urlEncoder($_POST['reference_no']).'&change=error');
      }
    
      else if($retval == 2){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = false;
         header("Location: index.php");
      }
   }


     function editprofileschoolpasswordbyadmin(){
      global $database,$session, $form;
    
      $retval = $session->editAccountschoolpass( $_POST['newpass'], $_POST['reference_no']);


      if($retval == 0){
         //$_SESSION['useredit'] = true;
         header('Location: edit_school.php?sc='.$database->urlEncoder($_POST['reference_no']).'&change=success');
      }
    
      else if($retval == 1){
         // $_SESSION['value_array'] = $_POST;
         // $_SESSION['error_array'] = $form->getErrorArray();
        header('Location: edit_school.php?sc='.$database->urlEncoder($_POST['reference_no']).'&change=error');
      }
      else if($retval == 2){
         // $_SESSION['value_array'] = $_POST;
         // $_SESSION['error_array'] = $form->getErrorArray();
         header('Location: edit_school.php?sc='.$database->urlEncoder($_POST['reference_no']).'&change=db_error');
      }
   }



   function profilepic(){
      global $database,$session, $form;

       $profile = $_FILES['picture']['name']; 

       $path = "requitment/".$profile;

       move_uploaded_file($_FILES['picture']['tmp_name'], $path);

      
      $retval = $session->profilepic($profile,$_POST['reference_no']);
      
     
      if($retval == 0){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = true;
         header('Location: candidate-requitment.php?r='.$database->urlEncoder($_POST['reference_no']).'&msg=true');
      }
   
      else if($retval == 1){
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
          header('Location: candidate-requitment.php?r='.$database->urlEncoder($_POST['reference_no']).'&msg=error');
      }
    
      else if($retval == 2){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = false;
         header("Location: index.php?error=2");
      }
   }

    function proeditcandprofile(){
      global $session, $form;

       $profile = $_FILES['photo']['name']; 

       $path = "requitment/".$profile;

       move_uploaded_file($_FILES['photo']['tmp_name'], $path);



       $ukpass = $_FILES['ukpassport']['name']; 

       $path = "requitment/".$ukpass;

       move_uploaded_file($_FILES['ukpassport']['tmp_name'], $path);


       $proofofaddress = $_FILES['proofofaddress']['name']; 

       $path = "requitment/".$proofofaddress;

       move_uploaded_file($_FILES['proofofaddress']['tmp_name'], $path);


       $cv = $_FILES['cv']['name']; 

       $path = "requitment/".$cv;

       move_uploaded_file($_FILES['cv']['tmp_name'], $path);


       $qualificationresult = $_FILES['qualificationresult']['name']; 

       $path = "requitment/".$qualificationresult;

       move_uploaded_file($_FILES['qualificationresult']['tmp_name'], $path);



        $helthdecdoc = $_FILES['helthdecdoc']['name']; 

       $path = "requitment/".$helthdecdoc;

       move_uploaded_file($_FILES['helthdecdoc']['tmp_name'], $path);



        $signature = $_FILES['signature']['name']; 

       $path = "requitment/".$signature;

       move_uploaded_file($_FILES['signature']['tmp_name'], $path);



       $location1 = isset($_POST['location1']) ? $_POST['location1'] : '';
      $location2 = isset($_POST['location2']) ? $_POST['location2'] : '';
      $location3 = isset($_POST['location3']) ? $_POST['location3'] : '';


      
      $retval = $session->proeditcandprofile($profile,$_POST['reference_no'],$_POST['full_name'],$_POST['dob'],$_POST['email'],$_POST['phone'],$_POST['emergency_contact_name'],$_POST['relationship'],$_POST['emergency_contact_number'],$_POST['bank_name'],$_POST['account_number'],$_POST['sort_code'],$_POST['location1'],$_POST['location2'],$_POST['location3'],$_POST['day_available'],$_POST['preference'],$_POST['schooltime'],$_POST['insuranceno'],$ukpass,$proofofaddress,$cv,$_POST['qualification1'],$_POST['year1'],$qualificationresult,$_POST['dbs_number'],$_POST['dbs_issue_date'],$_POST['serviceregister'],$_POST['employment_ref'],$_POST['employment_ref_position'],$_POST['employment_ref_email'],$_POST['employment_ref_phone'],$_POST['healthdec'],$helthdecdoc,$signature);
      
     
      if($retval == 0){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = true;
         header("Location: candidate-profile.php?proedit=true");
      }
   
      else if($retval == 1){
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
         header("Location: candidate-profile.php?proedit=false");
      }
    
      else if($retval == 2){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = false;
         header("Location: index.php?error=2");
      }
   }



   function parentdirectory(){
      global $session, $form;

       $profile = $_FILES['parent_directory']['name']; 

       $path = "images/".$profile;

       move_uploaded_file($_FILES['parent_directory']['tmp_name'], $path);

      
      $retval = $session->parentdirectory($profile,$_POST['reference_no']);
      
     
      if($retval == 0){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = true;
         
         if ($_POST['userlevel'] == 1) {
            header("Location: school-settings.php?profilepic=true");
         }else{
             header("Location: settings.php?profilepic=true");
         }
      }
   
      else if($retval == 1){
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
        
         if ($_POST['userlevel'] == 1) {
            header("Location: school-settings.php?profilepic=false");
         }else{
              header("Location: settings.php?profilepic=false");
         }
      }
    
      else if($retval == 2){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = false;
         header("Location: index.php?error=2");
      }
   }
   
   
   
    function document_update(){
      global $database, $session;
         $msgby = $session->username;
            $res = $session->document_update($_POST['reference_no'],$_POST['email'],$_POST['msgtitle'],$_POST['msgdescription'],$msgby);
            if($res == 0){

               header('Location: candidate-profile.php?r='.$database->urlEncoder($_POST['reference_no']).'&msg=success');
            }
            else if($res == 1){
               header('Location:  candidate-profile.php?r='.$database->urlEncoder($_POST['reference_no']).'msg=form_error');
            }
            else if($res == 2){
               header('Location:  candidate-profile.php?r='.$database->urlEncoder($_POST['reference_no']).'msg=db_error');
            }
   }

   function addupdatemsg(){
      global $database, $session;
         $msgby = $session->username;
            $res = $session->document_update($_POST['reference_no'],$_POST['email'],$_POST['msgtitle'],$_POST['msgdescription'],$msgby);
            if($res == 0){

               header('Location: new-application-details.php?r='.$database->urlEncoder($_POST['reference_no']).'&msg=success');
            }
            else if($res == 1){
               header('Location:  new-application-details.php?r='.$database->urlEncoder($_POST['reference_no']).'msg=form_error');
            }
            else if($res == 2){
               header('Location:   new-application-details.php?r='.$database->urlEncoder($_POST['reference_no']).'msg=db_error');
            }
   }


   function sendrespfromcandidate(){
      global $database, $session;
         // $msgby = $session->username;
            $res = $session->sendrespfromcandidate($_POST['reference_no'],$_POST['repliedto'],$_POST['response'],$_POST['resto']);
            if($res == 0){

               header('Location: updates.php?r='.$database->urlEncoder($_POST['reference_no']).'&msg=sucess');
            }
            else if($res == 1){
               header('Location:  updates.php?r='.$database->urlEncoder($_POST['reference_no']).'msg=error');
            }
            else if($res == 2){
               header('Location:  updates.php?r='.$database->urlEncoder($_POST['reference_no']).'msg=db_error');
            }
   }

   function sendrespfromschool(){
      global $database, $session;
         // $msgby = $session->username;
            $res = $session->sendrespfromschool($_POST['uni_id'],$_POST['reference_no'],$_POST['schoolname'],$_POST['repliedto'],$_POST['response'],$_POST['resto']);
            if($res == 0){

               header('Location: schoolupdates.php?r='.$database->urlEncoder($_POST['reference_no']).'&msg=send');
            }
            else if($res == 1){
               header('Location:  schoolupdates.php?r='.$database->urlEncoder($_POST['reference_no']).'msg=notsend');
            }
            else if($res == 2){
               header('Location:  schoolupdates.php?r='.$database->urlEncoder($_POST['reference_no']).'msg=db_error');
            }
   }
    function sendrespfromadmin(){
      global $database, $session;
         // $msgby = $session->username;
            $res = $session->sendrespfromadmin($_POST['uni_id'],$_POST['reference_no'],$_POST['response'],$_POST['resto']);
            if($res == 0){

               header('Location: adminupdates.php?r='.$database->urlEncoder($_POST['reference_no']).'&msg=send');
            }
            else if($res == 1){
               header('Location:  adminupdates.php?r='.$database->urlEncoder($_POST['reference_no']).'msg=notsend');
            }
            else if($res == 2){
               header('Location:  adminupdates.php?r='.$database->urlEncoder($_POST['reference_no']).'msg=db_error');
            }
   }

    function rejectbooking(){
      global $database, $session;
         // $msgby = $session->username;
      $calendar_data = json_encode($_POST['calendar_data'], JSON_UNESCAPED_SLASHES);

            $res = $session->rejectbooking($_POST['reference_no'],$_POST['id'],$calendar_data,$_POST['email'],$_POST['fullname'],$_POST['bookby'],$_POST['reason']);
            if($res == 0){

               header('Location: candidate-bookingupdates.php?id='.$database->urlEncoder($_POST['id']).'&msg=rejected');
            }
            else if($res == 1){
               header('Location:   candidate-bookingupdates.php?id='.$database->urlEncoder($_POST['id']).'msg=notrej');
            }
            else if($res == 2){
               header('Location:   candidate-bookingupdates.php?id='.$database->urlEncoder($_POST['id']).'&msg=rejected');
            }
   }

  function acceptedcalendarmarks(){
    global $database, $session;
    
    if (isset($_POST['mark_type'])) {
        $mark_type = $_POST['mark_type'];
        $id = $_POST['id'];
        $selected_date = $_POST['selected_date'];

        if ($mark_type == "leave") {
            $price = $_POST['price'];
            $priceforschool = $_POST['priceforschool'];

            $retval = $session->updateacceptedcalendarforleave($id, $selected_date, $price, $priceforschool);
        } 
        else if ($mark_type == "half") {
            $amount_candidate = $_POST['amount_candidate'];
            $amount_school = $_POST['amount_school'];

            $retval = $session->updateacceptedcalendarforhalfday($id, $selected_date, $amount_candidate, $amount_school);
        }

        if ($retval === 0) {
            header('Location: acceptedbookingdetails-toadmin.php?id=' . $database->urlEncoder($id) . '&school=' . $database->urlEncoder($_POST['school']) . '&candidate=' . $database->urlEncoder($_POST['candidate']) . '&change=success');
            exit;
        } else {
            header('Location: acceptedbookingdetails-toadmin.php?id=' . $database->urlEncoder($id) . '&school=' . $database->urlEncoder($_POST['school']) . '&candidate=' . $database->urlEncoder($_POST['candidate']) . '&change=error');
            exit;
        }
    }
}


 function sendCredentialstocandidates(){
      global $database, $session;
            $res = $session->sendCredentialstocandidates($_POST['reference_no'],$_POST['password'],$_POST['email']);
            if($res == 0){

               header('Location: candidate-profile.php?r='.$database->urlEncoder($_POST['reference_no']).'&s=success');
            }
            else if($res == 1){
               header('Location:  candidate-profile.php?r='.$database->urlEncoder($_POST['reference_no']).'s=error');
            }
            else if($res == 2){
               header('Location:  candidate-profile.php?r='.$database->urlEncoder($_POST['reference_no']).'s=db_error');
            }
   }

   function sendCredentialstoschools(){
      global $database, $session;
            $res = $session->sendCredentialstoschools($_POST['schoolcode'],$_POST['password'],$_POST['email']);
            if($res == 0){

               header('Location: schooldetails.php?sc='.$database->urlEncoder($_POST['schoolcode']).'&s=success');
            }
            else if($res == 1){
               header('Location:  schooldetails.php?sc='.$database->urlEncoder($_POST['schoolcode']).'s=error');
            }
            else if($res == 2){
               header('Location:  schooldetails.php?sc='.$database->urlEncoder($_POST['schoolcode']).'s=db_error');
            }
   }



   function school_message(){
      global $database, $session;
         $msgby = $session->username;
            $res = $session->school_message($_POST['reference_no'],$_POST['schoolname'],$_POST['message'],$msgby);
            if($res == 0){

               header('Location: schooldetails.php?sc='.$database->urlEncoder($_POST['reference_no']).'&msg=success');
            }
            else if($res == 1){
               header('Location:  schooldetails.php?sc='.$database->urlEncoder($_POST['reference_no']).'msg=form_error');
            }
            else if($res == 2){
               header('Location:  schooldetails.php?sc='.$database->urlEncoder($_POST['reference_no']).'msg=db_error');
            }
   }
   function bookcandidate() {
    global $database, $session;

    $bookby = $session->username;
    $reference_no = $_POST['reference_no'];

    // Retrieve form data
    $days_needed = $_POST['confirm_days']; // Stored as a comma-separated string
    $time_slot = $_POST['confirm_time'];
    $positions = $_POST['confirm_position']; // Stored as a comma-separated string

    // Call to session's bookcandidate method
    $res = $session->bookcandidate($reference_no, $days_needed, $time_slot, $positions, $bookby);

    // Redirect based on the result
    if ($res == 0) {
        header('Location: numberofcandidates-toschool.php?msg=success');
    } elseif ($res == 1) {
        header('Location: numberofcandidates-toschool.php?msg=error');
    } elseif ($res == 2) {
        header('Location: numberofcandidates-toschool.php?msg=db_error');
    }
}

    function uploadinvoice(){
      global $database,$session, $form;

       $file = $_FILES['invoiceFile']['name']; 

       $path = "invoices/".$file;

       move_uploaded_file($_FILES['invoiceFile']['tmp_name'], $path);

      $retval = $session->uploadinvoice($_POST['reference_no'],$_POST['candidate'],$_POST['id'],$_POST['invoice_by'],$file,$_POST['time'],$_POST['positions'],$_POST['calendar_data'],$_POST['price'],$_POST['invoice_status']);
      
     
      if($retval == 0){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = true;
         header('Location: acceptedbookingdetails-toadmin.php?id='.$database->urlEncoder($_POST['id']).'&school='.$database->urlEncoder($_POST['school']).'&candidate='.$database->urlEncoder($_POST['candidate']).'&msg=succ');
      }
   
      else if($retval == 1){
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
         header('Location: acceptedbookingdetails-toadmin.php?id='.$database->urlEncoder($_POST['id']).'&school='.$database->urlEncoder($_POST['school']).'&candidate='.$database->urlEncoder($_POST['candidate']).'&msg=err');
      }
    
      else if($retval == 2){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = false;
         header('Location: acceptedbookingdetails-toadmin.php?id='.$database->urlEncoder($_POST['id']).'&school='.$database->urlEncoder($_POST['school']).'&candidate='.$database->urlEncoder($_POST['candidate']).'&msg=db_error');
      }
   }


    function uploadinvoicetoschool(){
      global $database,$session, $form;

       $file = $_FILES['invoiceFile']['name']; 

       $path = "invoices/".$file;

       move_uploaded_file($_FILES['invoiceFile']['tmp_name'], $path);

      
      $retval = $session->uploadinvoicetoschool($_POST['schoolcode'],$_POST['school'],$_POST['candidate'],$_POST['id'],$_POST['invoice_by'],$file,$_POST['time'],$_POST['positions'],$_POST['calendar_data'],$_POST['price'],$_POST['invoice_status']);
      
     
      if($retval == 0){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = true;
         header('Location: acceptedbookingdetails-toadmin.php?id='.$database->urlEncoder($_POST['id']).'&school='.$database->urlEncoder($_POST['school']).'&candidate='.$database->urlEncoder($_POST['candidate']).'&invoice=succ');
      }
   
      else if($retval == 1){
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
         heade('Location: acceptedbookingdetails-toadmin.php?id='.$database->urlEncoder($_POST['id']).'&school='.$database->urlEncoder($_POST['school']).'&candidate='.$database->urlEncoder($_POST['candidate']).'&invoice=err');
      }
    
      else if($retval == 2){
         // $_SESSION['reguname'] = $_POST['user'];
         // $_SESSION['regsuccess'] = false;
         header('Location: acceptedbookingdetails-toadmin.php?id='.$database->urlEncoder($_POST['id']).'&school='.$database->urlEncoder($_POST['school']).'&candidate='.$database->urlEncoder($_POST['candidate']).'&invoice=db_error');
      }
   }








};


$process = new Process;

?>
