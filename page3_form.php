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
 <b>Address :</b>
 <p>As of now we are active in some areas of Chandigarh, Mohali and Near IT park. We have take this decision to serve you better. Even if your area is not listed in drop down below, we will try to serve you. </p>
 <label>Your Area :<span>*</span></label>
 <select name="area">
 <option value="">----Select----</options>
 <option value="other" value="">My area is not listed </options>
 <option value="tablet" value="">IT Park, Chandigarh </options>
 <option value="tablet" value="">MDC sector 4, Panchkula </options>
 <option value="tablet" value="">MDC sector 5, Panchkula </options>
 <option value="tablet" value="">MDC sector 6, Panchkula </options>
 <option value="tablet" value="">Sector 6, Panchkula </options>
 <option value="tablet" value="">Sector 7, Panchkula </options>
 <option value="tablet" value="">Sector 8, Panchkula </options>
 <option value="tablet" value="">Sector 9, Panchkula </options>
 <option value="tablet" value="">Sector 10, Panchkula </options>
 </select>
 <label>Address Line1 :<span>*</span></label>
 <input name="address1" id="address1" type="text" size="30" required>
 <label>Address Line2 :</label>
 <input name="address2" id="address2" type="text" size="50">
 
 <label>Pin Code :<span></span></label>
 <input name="pin" id="pin" type="text" size="10" required>
 <input type="reset" value="Reset" />
 <input name="submit" type="submit" value="Complete order >> " />
 </form>
 </div> 
 </div>
 </body>
</html>
