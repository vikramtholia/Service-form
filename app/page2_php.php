<?php
session_start();
// Checking second page values for empty, If it finds any blank field then redirected to second page.

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


$makeErr = $gadget_typeErr = $modelErr = $problem_typeErr = "";
$make = $gadget_type = $model = $problem_type = $problem_description = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["make"])) {
     $makeErr = "Field <strong>Make</strong> can't be empty. Please provide Manufacturer details. Example: Apple, Samsung, Dell etc.</br>";
   } else {
     $make = test_input($_POST["make"]);
   }
   
   if (empty($_POST["gadget_type"])) {
     $gadget_typeErr = "Please select Gadget Type. Example: Smartphone, Laptop etc.</br>";
   } else {
     $gadget_type = test_input($_POST["gadget_type"]);
   }
   if (empty($_POST["model"])) {
     $modelErr = "Field <strong>Model</strong> can't be empty. Please provide model details details. Example: iPhone 6, Galaxy S3 etc.</br>";
   } else {
     $model = test_input($_POST["model"]);
   }
   
   if (empty($_POST["problem_type"])) {
     $problem_typeErr = "Please select Gadget Type. Example: Smartphone, Laptop etc.</br>";
   } else {
     $problem_type = test_input($_POST["problem_type"]);
   }
   
   $problem_description = test_input($_POST["problem_description"]);
   
   
     
   
   
   if($makeErr != "" || $gadget_typeErr != "" || $modelErr = "" || $problem_typeErr = "" ) {
    $_SESSION['error_page2'] = $makeErr + $gadget_typeErr + $modelErr + $problem_typeErr;
    header("location: page2_form.php");
   }
   
   $_SESSION['post']['make'] = $make;
   $_SESSION['post']['gadget_type'] = $gadget_type;
   $_SESSION['post']['model'] = $model;
   $_SESSION['post']['problem_type'] = $problem_type;
   $_SESSION['post']['problem_description'] = $problem_description;
   
   header("location: page3_form.php");
   
}
else {
 echo "The operation you are trying to do can't be complete.";
 header("location: badoperation.php");
}

 ?>
