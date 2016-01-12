<?php
session_start();
// Checking second page values for empty, If it finds any blank field then redirected to second page.
 if (isset($_POST['address1'])){
 if (empty($_POST['address1'])
 || empty($_POST['area'])){ 
 $_SESSION['error_page3'] = "Mandatory field(s) are missing, Please fill it again"; // Setting error message.
 header("location: page3_form.php"); // Redirecting to third page. 
 } else {
 // Fetching all values posted from second page and storing it in variable.
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 }
 }
} else {
 /* if (empty($_SESSION['error_page3'])) {
 header("location: page1_form.php");// Redirecting to first page. */
 }
} 
header("location: page4_form.php");
