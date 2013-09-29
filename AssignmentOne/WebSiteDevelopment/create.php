<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Contact Centre Create Account</title>
<link href="styles.css" rel="stylesheet" type="text/css">
<script src="//html5shim.googlecode.com/svn/trunk/html5.js">
</script>
</head>
<body class="home">
<h1>Contact Centre</h1>
<img src="images/1365402787_user.png" alt="Create Account">
<nav>
<ul>
<li><a href="index.html" title="Home">Home</a></li>
<li><a href="login.html" title="Login">Login</a></li>
<li><a href="contacts.html" title="Contacts">Contacts</a></li>
<li><a href="events.html" title="Events">Events</a></li>
</ul>
</nav>
<div class="layout-grid">
<div class="layout-cell layout-1">
<div>
<h2>Create Account</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 <?php
include('scripts/userfunctions.php');
 header(' Location: scripts/validatecreate.php'); 
exit;
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
?>
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
 <label for="confirmpassword">Confirm Password:</label>
 <input type="password" name="confirmpassword" id="password" value="<?php echo $confirmpassword; ?>"> <?php //make sure the password input type is type="password" ?>
 <span class="error" id="password_error">
 <?php echo $msg_confirmpassword; ?></span>
?>
 </p>
 <p>
<?php
 // Submit and Reset form elements goes here.
?>
 <input type="submit" name="submit" value="Create Account">
 </form>
?>
</div>
</div>
</div><!--/grid-->
<nav>
<ul>
<li><a href="copyright.html" title="Copyright">Copyright</a></li>
<li><a href="disclaimer.html" title="Disclaimer">Disclaimer</a></li>
<li><a href="privacy.html" title="Privacy">Privacy</a></li>
<li><a href="feedback.html" title="Feedback">Feedback</a></li>
</ul>
</nav>
</body>
</html>
