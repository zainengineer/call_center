<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Contact Centre Delete Contact</title>
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
<li><a href="index.html" title="Home">Home</a></li>
<li><a href="accounts.html">Accounts</a></li>
<li><a href="contacts.html" title="Contacts">Contacts</a></li>
<li><a href="events.html" title="Events">Events</a></li>
</ul>
</nav>
<div class="layout-grid">
<div id="jumps" class="layout-cell layout-1">
<div>
<img src="images/contact.png" alt="Delete Contact" />
<h2>Delete Contact</h2>
    if(isset($data) && !empty($data))
 {
<?php
 // Database server information goes here.
 ?>
   $server = "localhost";
   $user = "root";
   $password = "password";
   $database = "contactcentre";
   $connection =mysql_connect('localhost', 'root', '');
   $db=mysql_select_db($database, $connection) or die("Unable to select database"); 
   $query = "insert into contactcentre(firstname, lastname, address, town, state, postcode, phone, mobilephone, email)";
   $result = $mysql_query($query, $connection) or die("Error in query: ".mysql_error());
  if($result = mysql_query("SELECT * FROM contactcentre"))
 {
  if(isset($_GET['deleteid']))
 {
   $deleteid = $_GET['deleteid'];
  echo "<h2>You have requested to delete the user with id ".deleteid;
  echo "</h2>";
   $query="DELETE FROM contactcentre WHERE   id = $deleteid";
   $result=mysql_query($query);
  if (mysql_affected_rows()>0)
 {
  echo "<h2>The record was deleted.</h2>";
 }
  else
 {
  echo "<h2>There is no record  with id $deleteid</h2>";
 }
 } 
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