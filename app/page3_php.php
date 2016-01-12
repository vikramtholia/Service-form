<?php
session_start();
// Checking second page values for empty, If it finds any blank field then redirected to second page.
 if (isset($_POST['address1'])){
 if (empty($_POST['make'])
 || empty($_POST['gadget_type'])
 || empty($_POST['model'])
 || empty($_POST['problem_type'])
 || empty($_POST['problem-description'])){ 
 $_SESSION['error_page2'] = "Mandatory field(s) are missing, Please fill it again"; // Setting error message.
 header("location: page2_form.php"); // Redirecting to second page. 
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
header("location: page3_form.php");
