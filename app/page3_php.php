<?php
session_start();

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
$areaErr = $address1Err =  "";
$area = $address1 = $address2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["area"])) {
     $areaErr = "Please select your area. If your area is not listed then please select last option <strong>My area is not listed</strong></br>";
   } else {
     $area = test_input($_POST["area"]);
   }
   
   if (empty($_POST["address1"])) {
     $address1Err = "Please fill your address in <strong>Address1</strong>field.</br>";
   } else {
     $address1 = test_input($_POST["address1"]);
   }
   
   $address2 = test_input($_POST["address2"]);
   
   if($areaErr != "" || $address1Err != "" ) {
    $_SESSION['error_page2'] = $areaErr + $address1Err;
    header("location: page3_form.php");
   }
   
   $_SESSION['post']['area'] = $area;
   $_SESSION['post']['address1'] = $address1;
   $_SESSION['post']['address2'] = $address2;
   
   header("location: page4_form.php");
   
}
else {
 echo "The operation you are trying to do can't be complete.";
 header("location: badoperation.php");
}
