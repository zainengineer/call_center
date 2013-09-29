<!-- saved from url=(0022)http://internet.e-mail -->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Contact Centre Logout</title>
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
<li><a href="accounts.html">Accounts</a></li>
<li><a href="contacts.html">Contacts</a></li>
<li><a href="events.html">Events</a></li>
</ul>
</nav>
<div class="layout-grid">
<div id="jumps" class="layout-cell layout-1">
<div>
<img src="images/14553321.jpg" alt="Logout Logo">
<h2> Contact Centre Logout</h2>
<?php
include('scripts/userfunctions.php');
  if(!ini_get('session.autostart'))
 {
   session_start();
 }
   session_destroy();
  exit;
 ?>
  echo '<p>You have logged out of the system on this website.  Click the home page link to go back to the home page</p>';
  echo '<p><a href="index.html" target="_top" title="Logout" accesskey="J">Logout</a></p>';
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