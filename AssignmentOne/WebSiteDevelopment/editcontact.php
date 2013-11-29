<?php
require_once(dirname(__FILE__) . '/lib/common.php');
forceUserLogin();
include(dirname(__FILE__) . '/header.php');
if (isset($_POST['Submit']))
{
$id = $_POST['id'];
$Name = $_POST['name'];
$Address = $_POST['address'];
$Town = $_POST['town'];
$State = $_POST['state'];
$post_code = $_POST['post_cdoe'];
$Phone = $_POST['phone'];
$MobilePhone = $_POST['mobile_phone'];
$Email = $_POST['email'];
$user_id = $_POST['user_id'];
$sql = "UPDATE tcontact SET name = '$Name', address = '$Address', town = '$Town', state = '$State', post_code = '$post_code', phone = '$Phone', mobile_phone = '$MobilePhone', email = '$Email', user_id = '$user_id' WHERE contact_id = $id";
if (mysql_query($sql))
{
echo "Record updated";
}
else
{
echo "Error : " . mysql_error();
}
}
?>
<div class="layout-grid">
<div id="jumps" class="layout-cell layout-1">
<div>
<img src="images/contact.png" alt="Add Contact" align="left" />
<?php include("user-detail.php"); ?>
<h2>Update Contact</h2>
<p>All fields required.</p>
<form action="" method="post">
<table>
<?php
if(isset($_GET['id']))
{
$id = $_GET['id'];
$query = "SELECT * FROM tcontact where contact_id = $id";
$result = mysql_query($query) or die(mysql_error());
while($newArray = mysql_fetch_array($result))
{
$id = $newArray['contact_id'];
$Name = $newArray['name'];
$Address = $newArray['address'];
$Town = $newArray['town'];
$State = $newArray['state'];
$post_code = $newArray['post_code'];
$Phone = $newArray['phone'];
$MobilePhone = $newArray['mobile_phone'];
$Email = $newArray['email'];
$user_id = $newArray['user_id'];
}
echo " <tr>
<td>Name:</td>
<td><input type='hidden' name='id' value='$id'>
<input type='text' name='Name'  value='$Name'></td>
</tr>
<tr>
<td>Address:</td>
<td><input type='text' name='Address'  value='$Address'></td>
</tr>
<tr>
<td>Town:</td>
<td><input type='text' name='Town'  value='$Town'></td>
</tr>
<tr>
<td>State:</td>
<td><select name='State'>
<option value = '$State'>$State</option>
<option value = 'ACT'>ACT</option>
<option value = 'NSW'>NSW</option>
<option value = 'NT'>NT</option>
<option value = 'QLD'>QLD</option>
<option value = 'SA'>SA</option>
<option value = 'TAS'>TAS</option>
<option value = 'VIC'>VIC</option>
<option value = 'WA'>WA</option>
</select></td>
</tr>
<tr>
<td>Post Code:</td>
<td><input type='text' name='post_code'  value='$post_code'></td>
</tr>
<tr>
<td>Phone:</td>
<td><input type='text' name='Phone'  value='$Phone'></td>
</tr>
<tr>
<td>Mobile Phone:</td>
<td><input type='text' name='MobilePhone'  value='$MobilePhone'></td>
</tr>
<tr>
<td>Email:</td>
<td><input type='text' name='Email'  value='$Email'></td>
</tr>
}
?>
<tr>
<td><input type="reset" name="reset" value="Reset"></td>
<td><input type="submit" name="Submit" id="Submit" value="Update"></td>
</tr>
</table>
<p>&nbsp;</p>
</form>
<a href="contacts.php">Back To Main Contacts Page</a>
</div>
</div>
</div><!--/grid-->
<?php
include(dirname(__FILE__) . '/footer.php');
?>