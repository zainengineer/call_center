<?php
require_once (dirname(__FILE__) . '/lib/common.php');
forceUserLogin();
include  (dirname(__FILE__) . '/header.php');
$message = '';
if (isset($_POST['Submit']))
{

$id = $_POST['id'];
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];


$sql = "UPDATE tlogin SET user_name = '$user_name', email = '$email', password = '$password', role='$role' WHERE user_id = $id";
//$sql = "INSERT INTO tcontact VALUES ('', '$Name', '$Address', '$Town', '$State', '$post_code', '$Phone', '$MobilePhone', '$Email', '$user_id')";
if (mysql_query($sql))
  {
  $message=  "Record updated";
  }
  else
  {
  $message= "Error : " . mysql_error();
  }
}
?>
<div class="layout-grid">
<div id="jumps" class="layout-cell layout-1">
<div>
<img src="images/contact.png" alt="Add Contact" />
<h2>Update Event</h2>
    <?php
      if ($message){
          echo "<h3 style='background-color: deepskyblue;width:250px'>$message</h3>";
      }
    ?>
<p>All fields required.</p>
<form action="" method="post">
<table>
<tr><td></td><td></td></tr>
<?php
if(isset($_GET['id']))
{
$id = $_GET['id'];
$query = "SELECT * FROM tlogin where user_id = $id";
$result = mysql_query($query) or die(mysql_error());
while ($newArray = mysql_fetch_array($result))
	{
	
$id = $newArray['user_id'];
$user_name = $newArray['user_name'];
$email = $newArray['email'];
$password = $newArray['password'];
$date_accessed = $newArray['date_accessed'];
$role  = $newArray['role'];

		
}
echo "
<input type='hidden' name='id'  value='$id'>
<tr><td>User Name</td><td>  <input type='text' name='user_name'  value='$user_name'></td></tr>
<tr><td>Email</td><td>  <input type='text' name='email'  value='$email'></td></tr>
<tr><td>Password</td><td>  <input type='text' name='password'  value='$password'></td></tr>
<tr><td>Role </td><td>  <input type='text' name='role'  value='$role'></td></tr>

";
}
?>


<tr><td><input name="reset" type="reset" value="Reset"></td><td> <input name="Submit" type="submit" id="Submit" value="Update"></td></tr>



</table>
<p>&nbsp;</p>
</form>
<a href="userslist.php">Back to User List page</a>

</div>
</div>
</div><!--/grid-->

<?php
include  (dirname(__FILE__)  . '/footer.php');
?>

