<?php
session_start();
?> 
<!DOCTYPE HTML>
<html>
 <head>
 <title>Gadget Details</title>
 <link rel="stylesheet" href="app/style.css" />
 </head>
 <body>
 <div class="container">
 <div class="main">
 <h2>New repair request</h2><hr/>
 <h3>Fill your gadget details</h3><hr/>
 <span id="error">
<?php
// To show error of page 2.
if (!empty($_SESSION['error_page2'])) {
 echo $_SESSION['error_page2'];
 unset($_SESSION['error_page2']);
}
?>
 </span>
 <form action="app/page2_php.php" method="post">
 <label>You gadget is :<span>*</span></label>
 <select name="gadget_type">
 <option value="">----Select----</options>
 <option value="phone" value="">iPhone or Smartphome </options>
 <option value="tablet" value="">iPad or Tablet </options>
 <option value="laptop" value="">Laptop </options>
 <option value="other" value="">Other </options>
 </select>
 <label>Make (Example: apple, samsung ,dell etc ) :<span>*</span></label>
 <input name="make" id="religion" type="text" value="" placeholder="Ex-Apple">
 <label>Model :<span>*</span></label><br />
 <input name="model" id="nationality" type="text" value="" placeholder="Ex- iPhone 6">
 <label>Problem Type:<span>*</span></label>
 <select name="problem_type">
 <option value="">----Select----</options>
 <option value="software" value="">Software Problem </options>
 <option value="screen" value="">Sreen damage </options>
 <option value="battery" value="">Battery </options>
 <option value="camera" value="">Camera </options>
 <option value="speakers" value="">Speakers </options>
 <option value="microphone" value="">Microphone</options>
 <option value="update" value="">OS update </options>
 <option value="locked" value=""Gadget is locked </options>
 <option value="water" value="">Problem due to water damage </options>
 <option value="slow" value="">Gadget is slow </options>
 <option value="other" value="">Other </options>
 </select>
 <label>Problem Description (Optional, But provide as much details as you can. It helps us a lot. ) :</label>
 <input name="problem-description" id="religion" type="text" value="" placeholder="Ex- My Phone's screen is broken. So, I want to get it replaced. ">
 <input type="reset" value="Reset" />
 <input type="submit" value="Almost done!! Proceed to fill address details >>" />
 </form>
 </div>
 </div>
 </body>
</html>
