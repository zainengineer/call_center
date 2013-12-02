<?php
if(!session_id())
{
session_start();
}
//Initialize Error Variables.
$msg_username = '';
$msg_email = '';
$msg_password = '';
// Initialize Variables.
$username_email = '';
$email = '';
$password = '';
// Vallidation of the form starts here.  Vallidation Of variables and match invalid or valid characters.
if(isset($_POST['submit']))
{
$errors = 0;
// Initialize all your form variables here instead of throughout the script. It helps to keep things grouped and tidy.
$username_email = trim($_POST['username_email']);
$password = trim($_POST['password']);
if(empty($username_email))
{
// Check if field is empty first before any more validating, just so we don't display wrong messages.
$msg_username = '* Please enter your user name / Email';
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
// vallidation of length fields for all text fields.
// I moved this to the bottom, remember that we only continue the script if no errors are caught.
// So this needed to be below the validation of length fields section.
// Vallidation of errors.
if($errors == 0)
{
// Best not to check whether data is set before we allow the user access.
// We should only allow access is their details are correct.
// I have moved this here so we can easily alter it here.
$sql= "SELECT user_id FROM tlogin WHERE ((user_name = '$username_email') or email ='$username_email') AND (password = '$password') ";
$userId = getQueryDefaultBySingleRow($sql);
if($userId)
{
$_SESSION['user_id'] = $userId;
$sql1= "SELECT role FROM tlogin WHERE ((user_name = '$username_email') or email ='$username_email') AND (password = '$password') ";
$userRole = getQueryDefaultBySingleRow($sql1);
$_SESSION['user_role'] = $userRole;

header('Location: contacts.php');
exit;
}
else
{
$msg_password = '* Invalid user Name / Email or password';
$errors++;
}
}
}
?>