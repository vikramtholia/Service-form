<?php
session_start();

function getsetVerificationCode() {
 if (isset($_SESSION['sent_verification_code'])){
  return $_SESSION['sent_verification_code'];
 }
 else {
  $code = mt_rand(100000,999999);
  $_SESSION['sent_verification_code'] = $code;
  return $code;
 }
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

// define variables and set to empty values
$nameErr = $contactErr = $emailErr = $passwordErr = $confirmErr = "";
$name = $contact = $email = $password = $confirm = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Full Name can't be empty.</br>";
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed in Full name.</br>"; 
     }
   }
   
   if (empty($_POST["contact"])) {
     $contactErr = "Moblie number cannot be empty.</br>";
   } else {
     $contact = test_input($_POST["contact"]);
     if(!preg_match("/^[0-9]{10}$/", $contact) {
      $contactErr = "10 digit contact number is required.</br>";
     }
     
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email can't be empty.</br>";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format.</br>"; 
     }
   }
     
   

   if (empty($_POST["password"])) {
     $password = "Password can't be empty.</br>";
   } else {
     $password = test_input($_POST["password"]);
   }
   
   if (empty($_POST["confirm"])) {
     $password = "Confirm password can't be empty.</br>";
   } else {
     $confirm = test_input($_POST["confirm"]);
     if(!($password === $confirm))
     {
       confirmErr = "Conform password do not match to password.</br>";
     }
   }
   
   if($nameErr != "" || $contactErr != "" || $emailErr = "" || $passwordErr = "" || $confirmErr != "") {
    $_SESSION['error'] = $nameErr + $contactErr + $emailErr + $passwordErr + $confirmErr;
    header("location: page1_form.php");
   }
   
   $_SESSION['post']['name'] = $name;
   $_SESSION['post']['contact'] = $contact;
   $_SESSION['post']['email'] = $email;
   $_SESSION['post']['password'] = md5($password);
   
}
else {
 echo "The operation you are trying to do can't be complete.";
 header("location: badoperation.php");
}

$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("db_name", $connection); // Storing values in database.
$query = mysql_query("insert into temp_user (name,email,contact) values('$name','$email','$mobile')", $connection);
 
header("location: verify_moblie_number_form.php"); //If everything is fine then transfer for mobile number verification
?>
