<?php
include('scripts/userfunctions.php');
?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Contact Centre Login</title>
<link rel="stylesheet" href="style.css" type="text/css" title="contact-centre" />
<script src="//html5shim.googlecode.com/svn/trunk/html5.js">
</script>
</head>
<body class="home">
<h1>Contact Centre</h1>
<div id="jump">
<a href="#jumps">jump to content</a>
</div>
<nav>
<ul>
<li><a href="index.html">Home</a></li>
<li><a href="login.html">Login</a></li>
<li><a href="contacts.html">Contacts</a></li>
<li><a href="events.html">Events</a></li>
</ul>
</nav>
<div class="layout-grid">
<div id="jumps" class="layout-cell layout-1">
<div>
<img src="images/user-login-icon.png" alt="Login">
<h2> Contact Centre Login</h2>
 <?php
include('scripts/validatelogin.php');
 
?>
 <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<?php
 // User Name form field goes here.
?>
 <p>
 <label for="username">User Name:</label>
 <input type="text" name="username" id="username" autofocus value="<?php echo $username; ?>">
 <span class="error" id="username_error">
 <?php echo $msg_username; // These variables need to match the error variables that are set in the validation script ?></span>
?>
 </p>
<?php
 // E-mail form field goes here.
?>
 <p>
 <label for="email">E-mail:</label>
 <input type="text" name="email" id="email" value="<?php echo $email; ?>">
 <span class="error" id="email_error">
 <?php echo $msg_email; ?></span>
?>
 </p>
<?php
 //Password form field goes here.
?>
 <p>
 <label for="password">Password:</label>
 <input type="password" name="password" id="password" value="<?php echo $password; ?>"> <?php //make sure the password input type is type="password" ?>
 <span class="error" id="password_error">
 <?php echo $msg_password; ?></span>
?>
 </p>
 <p>
<?php
 // Submit and Reset form elements goes here.
?>
 <input type="submit" name="submit" value="Login">
 </form>
?>
</div>
</div>
</div><!--/grid-->
<nav>
<ul>
<li><a href="copyright.html">Copyright</a></li>
<li><a href="disclaimer.html">Disclaimer</a></li>
<li><a href="privacy.html">Privacy</a></li>
<li><a href="feedback.html">Feedback</a></li>
</ul>
</nav>
</body>
</html>
