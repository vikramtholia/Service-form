<?php
session_start(); // Session starts here.
?>
<!DOCTYPE HTML>
<html>
 <head>
 <title>Mobile Number Verification</title>
 <link rel="stylesheet" href="app/css/style.css" />
 </head>
 <body>
 <div class="container">
 <div class="main">
 <h2>Thank you for joining ComfyTap family!!</h2>
 <h3>Mobile Number Verification</h3>
 <span id="error">
 <!-- Initializing Session for errors -->
 <?php
 if (!empty($_SESSION['error_verify_mobile_number'])) {
 echo $_SESSION['error_verify_mobile_number'];
 unset($_SESSION['error_verify_mobile_number']);
 }
 ?>
 </span>
 <label>Mobile : <?php echo $_SESSION['contact']; ?></label>
 <p>If this mobile number is not correct</p><form action="page1_form.php" method="post"><input type="submit" value="Go Back" /></form>
 <form action="app/verify_mobile_number_php.php" method="post">
 <label>Verification Code :<span>*</span></label>
 <input name="verification_code" type="text" placeholder="6-digit number" required>
 <p>We have sent the verification code on your mobile number <?php echo $_POST['contact']; ?> by sms. Please wait for sometime.</p>
 <p>If DND is active on your number then you might not receive sms.</p>
 <p>Please contact us at mail if your face any problem, We are waiting to help you.</p>
 <input type="submit" value="Verify Mobile Number" />
 </form>
 </div>
 </div>
 </body>
</html>
