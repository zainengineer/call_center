<?php
require_once(dirname(__FILE__) . '/lib/common.php');
$msg = '';
if(isset($_POST['submit']))
{
$data = array();
$data['user_name'] = $_POST['username'];
$data['email'] = $_POST['email'];
$data['password'] = $_POST['password'];
$data['role']= "User";
$sql = GetInsertQuery('tlogin',$data);
if(mysql_query($sql))
{
$msg =  "Record Added";
$id = mysql_insert_id();
$url = "edituser.php?id=$id&msg=" . urlencode($msg);
header("Location: $url");
exit;
}
else
{
$msg= "Error : " . mysql_error();
}

}
include(dirname(__FILE__) . '/header.php');
echo $msg;
?>
<div class="layout-grid">
<div id="jumps" class="layout-cell layout-1">
<div>
<img src="images/user-login-icon.png" alt="Login">
<h2> Contact Centre Login</h2>
<?php
include('scripts/validatecreate.php');
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<table>
<tr>
<td><label for="username">User Name:</label></td>
<td><input type="text" name="username" id="username" autofocus value="<?php echo $username; ?>">
<span class="error" id="username_error">
<?php echo $msg_username; // These variables need to match the error variables that are set in the validation script ?></span>
</td>
</tr>
<tr>
<td><label for="email">E-mail:</label></td><td>
<input type="text" name="email" id="email" value="<?php echo $email; ?>">
<span class="error" id="email_error">
<?php echo $msg_email; ?></span>
</td>
</tr>
<tr>
<td><label for="password">Password:</label></td>
<td><input type="password" name="password" id="password" value="<?php echo $password; ?>">
<span class="error" id="password_error"> <?php echo $msg_password; ?></span></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Sign Up"></td>
<td>&nbsp;</td>
</tr>
</table>
</form>
</div>
</div>
</div> <!--/grid-->
<?php
include(dirname(__FILE__) . '/footer.php');
?>