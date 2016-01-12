<?php
session_start(); // Session starts here.
?><!DOCTYPE HTML>
<html>
 <head>
 <title>For New User</title>
 <link rel="stylesheet" href="style.css" />
 </head>
 <body>
 <div class="container">
 <div class="main">
 <h2>New User - Start here</h2>
 <span id="error">
 <!---- Initializing Session for errors --->
 <?php
 if (!empty($_SESSION['error'])) {
 echo $_SESSION['error'];
 unset($_SESSION['error']);
 }
 ?>
 </span>
 <form action="page2_form.php" method="post">
 <label>Full Name :<span>*</span></label>
 <input name="name" type="text" placeholder="Ex-Sachin Sharma" required>
 <label>Mobile :<span>*</span></label>
 <input name="contact" type="text" placeholder="10-digit number" required>
 <p>We will verify your mobile number by sending OTP.</p>
 <label>Email :<span>*</span></label>
 <input name="email" type="email" placeholder="Ex-sachin@gmail.com" required>
 <p>We will send service status and details on this email address.</p>
 <label>Password :<span>*</span></label>
 <input name="password" type="Password" placeholder="*****" />
 <label>Re-enter Password :<span>*</span></label>
 <input name="confirm" type="password" placeholder="*****" >
 <input type="reset" value="Reset" />
 <input type="submit" value="Next" />
 </form>
 </div>
 </div>
 </body>
</html>
