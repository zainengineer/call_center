<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Contact Centre Edit Event</title>
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
<img src="images/contact.png" alt="Edit Event" />
<h2>Edit Event</h2>
<?php
include('scripts/userfunctions.php');
 header(' Location: scripts/validateeditevent.php'); 
exit;
?>
<?php
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
?>
<?php
 // Event Notes text area goes here.
?>
 <p>
 <label for="notes">Notes></label>
 <textarea>
 </textarea>
 <span class="error" id="notes_error">
 <?php echo $msg_notes;
?>
<?php
 // These variables need to match the error variables that are set in the validation script
?>
 </span>
 </p>
<?php
 // Date entered field goes here.
?>
 <p>
 <label for="dateentered">Date Entered:</label>
 <input type="text" name="dateentered" id="dateentered" autofocus value="<?php echo $dateentered; ?>">
 <span class="error" id="dateentered_error">
 <?php echo $msg_dateentered;
?>
<?php
 // These variables need to match the error variables that are set in the validation script
?>
 </span>
 </p>
<?php
 // Time entered field goes here.
?>
 <p>
 <label for="timeentered">Time Entered:</label>
 <input type="text" name="address" id="timeentered" autofocus value="<?php echo $timeentered; ?>">
 <span class="error" id="timeentered_error">
 <?php echo $msg_timeentered;
?>
<?php
 // These variables need to match the error variables that are set in the validation script
?>
 </span>
 </p>
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