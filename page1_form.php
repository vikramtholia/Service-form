<?php
session_start(); // Session starts here.
?>
<!DOCTYPE HTML>
<html>
 <head>
 <title>For New User</title>
 <link rel="stylesheet" href="app/css/style.css" />
 </head>
 <body>
 <div class="container">
 <div class="main">
 <h2>New User - Start here</h2>
 <span id="error">
 <!-- Initializing Session for errors -->
 <?php
 if (!empty($_SESSION['error'])) {
 echo $_SESSION['error'];
 unset($_SESSION['error']);
 }
 ?>
 </span>
 <form action="app/page1_php.php" method="post">
 <label>Full Name :<span>*</span></label>
 <input name="name" type="text" placeholder="Ex-Sachin Sharma" required><?php if(isset($_SESSION['post']['name']) echo $_SESSION['post']['name']; ?></input>
 <label>Mobile :<span>*</span></label>
 <input name="contact" type="text" placeholder="10-digit number" required><?php if(isset($_SESSION['post']['contact']) echo $_SESSION['post']['contact']; ?></input>
 <p>We will verify your mobile number by sending verification code by sms.</p>
 <label>Email :<span>*</span></label>
 <input name="email" type="email" placeholder="Ex-sachin@gmail.com" required><?php if(isset($_SESSION['post']['email']) echo $_SESSION['post']['email']; ?></input>
 <p>Important: We will send service status and details on this email address.</p>
 <label>Password :<span>*</span></label>
 <input name="password" type="Password" placeholder="********" />
 <label>Re-enter Password :<span>*</span></label>
 <input name="confirm" type="password" placeholder="********" >
 <input type="reset" value="Reset" />
 <input type="submit" value="Next" />
 </form>
 </div>
 </div>
 </body>
</html>
