<?php
if (isset($_POST['verification_code'])){
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
?>
