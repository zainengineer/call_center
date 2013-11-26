<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Contact Centre Update Event</title>
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
<img src="images/1365497895_update-icon.png" alt="Update Event Logo">
<h2>Update Contact</h2>
<?php
  include('scripts/userfunctions.php');
�header(' Location: scripts/validateupdateevent.php'); 
exit;
if(isset($_POST['submit']) && ($errors == 0))
{
echo "Your event has been updated.";
}
else
{
<?php
//Initialize Error Variables.
?>
$msg_notes = '';
$msg_date_entered = '' ;
$msg_time_entered = '';
$notes = '';
$date_entered = '';
$time_entered = '';
<?php
// Vallidation of the form starts here.  Vallidation Of variables and match invalid or valid characters.
?>
if(isset($_POST['submit']))
{
$errors = 0;
<?php
 //  Validate all your form variables here instead of throughout the script. It helps to keep things grouped and tidy.
?>
$notes = trim($_POST['notes']);
$date_entered = trim($_POST['date_entered']);
$time_entered = trim($_POST['time_entered']);
if(empty($notes))
{
// Check if field is empty first before any more validating, just so we don't display wrong messages.
$msg_notes = '* Please enter your notes';
$errors++;
}
else if(preg_match('/\d/', $notes))
{
<?php
// This seems to work a lot better than the other way.
?>
$msg_notes = "Only characters can be entered for this field!";
$errors++;
}
else if(strlen($notes) > 2000)
{
$msg_notes = "You have exceded the maxium amount of characters for this field!";
$errors++;
}
if(empty($date_entered))
{
<?php
// Check if field is empty first before any more validating, just so we don't display wrong messages.
?>
$msg_time_entered = '* Please enter your date';
$errors++;
}
else if(preg_match('/\d/', $date_entered))
{
<?php
// This seems to work a lot better than the other way.
?>
$msg_dateentred = "Only numbers can be entered for this field!";
$errors++;
}
else if(strlen($date_entered) > 50)
{
$msg_date_entered = "Invalid date entered";
$errors++;
}
<?php
// function to check valid date and is formatted.
?>
$date_format = 'YY-MM-DD';
$input = '2013-06-24';
$input = trim($input);
$time = strtotime($input);
$is_valid = date($date_format, $time) == $input;
print "You have entered a valid date for this field! ".($is_valid.";  
<?php
// check the date and time is correct.
?>
var_dump(checkdate(12, 31, 2013));
var_dump(checkdate(2, 29, 2013));
if(empty($time_entered))
{
<?php
// Check if field is empty first before any more validating, just so we don't display wrong messages.
?>
$msg_time_entered = '* Please enter your time';
$errors++;
}
else if(preg_match('/\d/', $time_entered))
{
<?php
// This seems to work a lot better than the other way.
?>
$msg_time_entered = "Only characters can be entered for this field!";
$errors++;
}
else if(strlen($time_entered) > 50)
{
$msg_time_entered = "Invalid time";
$errors++;
}
<?php
// function to check valid time and is formatted.
?>
$time_format = 'HH-MM-SS';
$input = '11:21:00';
$input = trim($input);
$time = strtotime($input);
$is_valid = time($time_format, $time) == $input;
print "You have entered a valid time for this field! ".($is_valid.";  
<?php
// vallidation of length fields for all text fields.
// I moved this to the bottom, remember that we only continue the script if no errors are caught.
// So this needed to be below the validation of length fields section.
// Vallidation of errors.
?>
if($errors == 0)
{
<?php
// Best not to check whether data is set before we allow the user access.
// We should only allow access is their details are correct.
// I have moved this here so we can easily alter it here.
?>
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
$query = "insert into events(notes, date_entered, time_entered);
$result = $mysql_query($query, $connection) or die("Error in query: ".mysql_error());
if($result = mysql_query("UPDATE FROM  events(notes = '', date_entered = '', time_entered = '')")
{
while($row = mysql_fetch_array($result))
{
echo "<table>";
echo "<tr>";
echo "<td><h2>Contact Centre Update Event:</h2></td>";
echo "<td><br /></td>";
echo "</tr>";
echo "<tr>";
echo "<td><h2>Notes:</h2></td>";
echo "<td><br /></td>";
echo "<td>".$row['notes']." ".$row['lastname']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td><h2>Date Entered:</h2></td>";
echo "<td><br /></td>";
echo "<td>".$row['date_entered']."</td>";
echo "</tr>";
echo "<td><h2>Time Entered:</h2></td>";
echo "<td><br /></td>";
echo "<td>".$row['time_entered']."</td>";
echo "</tr>";
echo "</table>";
}
}
mysql_close();
}
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