<?php
session_start();
// Checking second page values for empty, If it finds any blank field then redirected to second page.
/*if (isset($_POST['gender'])){
 if (empty($_POST['gender'])
 || empty($_POST['nationality'])
 || empty($_POST['religion'])
 || empty($_POST['qualification'])
 || empty($_POST['experience'])){ 
 $_SESSION['error_page2'] = "Mandatory field(s) are missing, Please fill it again"; // Setting error message.
 header("location: page2_form.php"); // Redirecting to second page. 
 } else {
 // Fetching all values posted from second page and storing it in variable.
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 }
 }
} else {
 if (empty($_SESSION['error_page3'])) {
 header("location: page1_form.php");// Redirecting to first page.
 }
} */
?> 
<!DOCTYPE HTML>
<html>
 <head>
 <title>Address details</title>
 <link rel="stylesheet" href="style.css" />
 </head>
 <body>
 <div class="container">
 <div class="main">
 <h2>Fill pick up and drop address details</h2><hr/>
 <span id="error">
 <?php
 if (!empty($_SESSION['error_page3'])) {
 echo $_SESSION['error_page3'];
 unset($_SESSION['error_page3']);
 }
 ?>
 </span>
 <form action="page4_insertdata.php" method="post">
 <b>Complete Address :</b>
 <p>As of now we are active in </p>
 <label>Address Line1 :<span>*</span></label>
 <input name="address1" id="address1" type="text" size="30" required>
 <label>Address Line2 :</label>
 <input name="address2" id="address2" type="text" size="50">
 <label>Location :<span>*</span></label>
 <select name="gadget_type">
 <option value="">----Select----</options>
 <option value="phone" value="">iPhone or Smartphome </options>
 <option value="tablet" value="">iPad or Tablet </options>
 <option value="laptop" value="">Laptop </options>
 <option value="other" value="">Other </options>
 </select>
 <label>Pin Code :<span>*</span></label>
 <input name="pin" id="pin" type="text" size="10" required>
 <label>State :<span>*</span></label>
 <input name="state" id="state" type="text" size="30" required>
 <input type="reset" value="Reset" />
 <input name="submit" type="submit" value="Submit" />
 </form>
 </div> 
 </div>
 </body>
</html>
