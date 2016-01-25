<?php

if(isset($_SESSION['login']['name'])){
header("location: myorders.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<h1>Login</h1>
<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>Mobile :</label>
<input id="name" name="contact" placeholder="10 digit mobile number" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error_login_form; ?></span>
</form>
<a href="page1_form.php">New user?</a><a href="forgot_form.php">Forgot password?</a>
</div>
</div>
</body>
</html>
