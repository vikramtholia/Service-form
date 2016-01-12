<?php
session_start(); // Session starts here.
?><!DOCTYPE HTML>
<html>
 <head>
 <title>For New User</title>
 <link rel="stylesheet" href="app/css/style.css" />
 </head>
 <body>
 <div class="container">
 <div class="main">
 <h2>Mobile Number Verification</h2>
 <span id="error">
 <!-- Initializing Session for errors -->
 <?php
 if (!empty($_SESSION['error_verify_mobile_number'])) {
 echo $_SESSION['error_verify_mobile_number'];
 unset($_SESSION['error_verify_mobile_number']);
 }
 ?>
 </span>
 <form action="app/verify_mobile_number_php.php" method="post">
  <label>Mobile : <?php echo $_POST['contact']; ?></label>
 <label>Verification Code :<span>*</span></label>
 <input name="verification_code" type="text" placeholder="6-digit number" required>
 <p>We have sent the verification code on your mobile number <?php echo $_POST['contact']; ?> by sms. Please wait for sometime.</p>
 <p>You might not receive sms if DND is active on your number.</p>
 <p>Please contact us if your face any problem, We are waiting to help you.</p>
 //<input type="reset" value="Reset" />
 <input type="submit" value="Verify Mobile Number" />
 </form>
 </div>
 </div>
 </body>
</html>
