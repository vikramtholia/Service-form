<?php
session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
/* if (isset($_POST['name'])){
 if (empty($_POST['name'])
 || empty($_POST['email'])
 || empty($_POST['contact'])
 || empty($_POST['password'])
 || empty($_POST['confirm'])){ 
 // Setting error message
 $_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: page1_form.php"); // Redirecting to first page 
 } else {
 // Sanitizing email field to remove unwanted characters.
 $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); 
 // After sanitization Validation is performed.
 if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ 
 // Validating Contact Field using regex.
 if (!preg_match("/^[0-9]{10}$/", $_POST['contact'])){ 
 $_SESSION['error'] = "10 digit contact number is required.";
 header("location: page1_form.php");
 } else {
 if (($_POST['password']) === ($_POST['confirm'])) {
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 }
 } else {
 $_SESSION['error'] = "Password does not match with Confirm Password.";
 header("location: page1_form.php"); //redirecting to first page
 }
 }
 } else {
 $_SESSION['error'] = "Invalid Email Address";
 header("location: page1_form.php");//redirecting to first page
 }
 }
} else {
 if (empty($_SESSION['error_page2'])) {
 header("location: page1_form.php");//redirecting to first page
 }
}
?> */
<!DOCTYPE HTML>
<html>
 <head>
 <title>Gadget Details</title>
 <link rel="stylesheet" href="style.css" />
 </head>
 <body>
 <div class="container">
 <div class="main">
 <h2>Fill your gadget details</h2><hr/>
 <span id="error">
<?php
// To show error of page 2.
if (!empty($_SESSION['error_page2'])) {
 echo $_SESSION['error_page2'];
 unset($_SESSION['error_page2']);
}
?>
 </span>
 <form action="page2_php.php" method="post">
 <label>You gadget is :<span>*</span></label>
 <select name="gadget_type">
 <option value="">----Select----</options>
 <option value="phone" value="">iPhone or Smartphome </options>
 <option value="tablet" value="">iPad or Tablet </options>
 <option value="laptop" value="">Laptop </options>
 <option value="other" value="">Other </options>
 </select>
 <label>Make :<span>*</span></label>
 <input name="make" id="religion" type="text" value="" >
 <label>Model :<span>*</span></label><br />
 <input name="model" id="nationality" type="text" value="" >
 <label>Problem Type:<span>*</span></label>
 <select name="problem_type">
 <option value="">----Select----</options>
 <option value="software" value="">Software Problem </options>
 <option value="screen" value="">Post Graduation </options>
 <option value="battery" value="">Graduation </options>
 <option value="camera" value="">Post Graduation </options>
 <option value="speakers" value="">Graduation </options>
 <option value="microphone" value="">Post Graduation </options>
 <option value="update" value="">OS update </options>
 <option value="locked" value=""Gadget is locked </options>
 <option value="water" value="">Problem due to water damage </options>
 <option value="other" value="">Other </options>
 </select>
 <label>Problem Description (Optional, But provide as much details as you can. It helps us alot. ) :</label>
 <input name="problem-description" id="religion" type="text" value="" >
 <input type="reset" value="Reset" />
 <input type="submit" value="Almost done!! Proceed to fill address details >>" />
 </form>
 </div>
 </div>
 </body>
</html>
