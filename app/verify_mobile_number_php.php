<?php
session_start();

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

$codeErr = "";
$code = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (empty($_POST["code"])) {
     $codeErr = "Verification code cannot be empty.</br>";
   } else if{
     $code = test_input($_POST["code"]);
     if(!preg_match("/^[0-9]{6}$/", $code) {
      $codeErr = "6 digit verification code is required.</br>";
     }
     else {
      $code = test_input($_POST["code"]);
      if(!($_SESSION['sent_verification_code'] === $code)) {
      $codeErr = "Sorry, You have entered incorrect verification code. Please try again.</br>";
     }
    
    if($codeErr != "" ) {
     $_SESSION['error_verify_mobile_number']  = $codeErr ; 
     header("location: verify_moblie_number_form.php");
   }
   
   //success
  
}
else {
 echo "The operation you are trying to do can't be complete.";
 header("location: badoperation.php");
}

/*if (isset($_POST['verification_code'])){
 if (empty($_POST['verification_code'])){ 
 // Setting error message
 $_SESSION['error_verify_mobile_number'] = "Verification code is missing, Please fill it again";
 header("location: verify_moblie_number_form.php"); // Redirecting to first page 
 } else {
 if (!preg_match("/^[0-9]{6}$/", $_POST['verification_code'])){ 
 $_SESSION['error_verify_mobile_number'] = "Please enter 6 digit verification code.";
 header("location: verify_moblie_number_form.php");
 } else {
 if (($_SESSION['sent_verification_code']) === ($_POST['verification_code'])) {
  //$_SESSION['post'][$key] = $value;
 header("location: page2_form.php");
 }
 } else {
 $_SESSION['error_verify_mobile_number'] = "Verification code does not match. Please try again";
 header("location: verify_moblie_number_form.php"); //redirecting to verification page
 }
 }
 }
 else 
 {
  $_SESSION['error_verify_mobile_number'] = "Verification code is missing, Please fill it again";
  header("location: verify_moblie_number_form.php"); //Just in case verifiaction code is not set. 
 }
?>*/
