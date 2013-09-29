<?php
 //Initialize Error Variables.
   $msg_username = '';
   $msg_email = '';
   $msg_password = '';
   $msg_confirmpassword = '';
 // Initialize Variables.
   $username = '';
   $email = '';
   $password = '';
   $confirmpassword = '';
 // Vallidation of the form starts here.  Vallidation Of variables and match invalid or valid characters.
  if(isset($_POST['submit']))
 {
   $errors = 0;
 //  Validate all your form variables here instead of throughout the script. It helps to keep things grouped and tidy.
   $username = trim($_POST['username']);
   $email = trim($_POST['email']);
   $password = trim($_POST['password']);
   $confirmpassword = trim($_POST['password']);
  if(empty($username))
 {
 // Check if field is empty first before any more validating, just so we don't display wrong messages.
   $msg_username = '* Please enter your user name';
   $errors++;
 }
  else if(preg_match('/\d/', $username))
 {
   $msg_username = "Only characters can be entered for this field!";
   $errors++;
 }
  else if(strlen($username) > 50)
 {
   $msg_username = "Invalid Username";
   $errors++;
 }
  if(empty($email))
 {
   $msg_email = '* Please enter your e-mail';
   $errors++;
 }
  else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false)
 {
   $msg_email = '* Invalid email address:';
   $errors++;
 }
 // No need to check if Email field contains numbers, because some people have numbers in their email address. The above function will validate perfectly.
  if(empty($password))
 {
 // Check if field is empty first before any more validating, just so we don't display wrong messages.
   $msg_password = '* Please enter your password';
   $errors++;
 }
  else if(strlen($password) > 50)
 {
   $msg_password = '* Invalid password';
   $errors++;
 }
 // No need to check whether numbers are in the password, because some people might have numbers in their password.
  if(empty($confirmpassword))
  {
 // Check if field is empty first before any more validating, just so we don't display wrong messages.
   $msg_confirmpassword = '* Please confirm your password';
   $errors++;
 }
  else if(strlen($confirmpassword) > 50)
 {
   $msg_confirmpassword = '* Invalid password';
   $errors++;
 }
 // Check to see if the password and confirm password fields match.
   if($password !== $confirmpassword)
 { 
  echo 'The two passwords do not match! Please try again!';
 }
 // No need to check whether numbers are in the password, because some people might have numbers in their password.
 // vallidation of length fields for all text fields.
 // I moved this to the bottom, remember that we only continue the script if no errors are caught.
 // So this needed to be below the validation of length fields section.
 // Vallidation of errors.
  if($errors == 0)
 {
   $data = 'User Name: '.$username.'<br />';
   $data .= 'E-mail: '.$email.'<br />';
   $data .= 'Password: '.$password.'<br />';
   $data .= 'Confirm Password: '.$confirmpassword.'<br />';
 // Best not to check whether data is set before we allow the user access.
 // We should only allow access is their details are correct.
 // I have moved this here so we can easily alter it here.
  if(isset($data) && !empty($data))
 {
 // Database server information goes here.
   $server = "localhost";
   $user = "root";
   $password = "password";
   $database = "contactcentre";
   $connection =mysql_connect('localhost', 'root', '');
   $db=mysql_select_db($database, $connection) or die("Unable to select database"); 
   $query = "insert into login(username, email)";
   $result = mysql_query($query, $connection) or die("Error in query: ".mysql_error());
   mysql_close();
   echo '<h2>Success!</h2>';
   echo '<p>You have successfully created a new account on this website.</p>';
   echo $data;
 }
   $username = '';
   $email = '';
   $password = '';
   $confirmpassword = '';
 }
 }
?>