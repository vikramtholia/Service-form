<?php
session_start();

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
// define variables and set to empty values
$contactErr = $passwordErr = "";
$contact = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
   if (empty($_POST["contact"])) {
     $contactErr = "Moblie number cannot be empty.</br>";
   } else {
     $contact = test_input($_POST["contact"]);
     if(!preg_match("/^[0-9]{10}$/", $contact) {
      $contactErr = "10 digit contact number is required.</br>";
     }
     
   }
   
  
   if (empty($_POST["password"])) {
     $password = "Password can't be empty.</br>";
   } else {
     $password = test_input($_POST["password"]);
   }

   
   if( $contactErr != ""  $passwordErr != "") {
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
