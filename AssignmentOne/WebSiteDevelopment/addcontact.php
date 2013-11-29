<?php
require_once(dirname(__FILE__) . '/lib/common.php');
forceUserLogin();
include(dirname(__FILE__) . '/header.php');
if (isset($_POST['Submit']))
{
$Name = $_POST['name'];
$Address = $_POST['address'];
$Town = $_POST['town'];
$State = $_POST['state'];
$post_code = $_POST['post_code'];
$Phone = $_POST['phone'];
$MobilePhone = $_POST['mobile_phone'];
$Email = $_POST['email'];
$user_id = $_POST['user_id'];
$sql = "INSERT INTO tcontact VALUES ('', '$Name', '$Address', '$Town', '$State', '$post_code', '$Phone', '$MobilePhone', '$Email', '$user_id')";
if(mysql_query($sql))
{
echo "Record Added";
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
<img src="images/contact.png" alt="Add Contact"/>
<h2>Add Contact</h2>
<p>All fields required.</p>
<form action="addcontact.php" method="post">
<table>
<tr>
<td>Name:</td>
<td><input type='text' name='Name'></td>
</tr>
<tr>
<td>Address:</td>
<td><input type='text' name='Address'></td>
</tr>
<tr>
<td>Town:</td>
<td><input type='text' name='Town'></td>
</tr>
<tr>
<td>State:</td>
<td>
<select name = "State">
<option value = "ACT">ACT</option>
<option value = "NSW">NSW</option>
<option value = "NT">NT</option>
<option value = "QLD">QLD</option>
<option value = "SA">SA</option>
<option value = "TAS">TAS</option>
<option value = "VIC">VIC</option>
<option value = "WA">WA</option>
</select></td>
</tr>
<tr>
<td>Post Code:</td>
<td><input type='text' name='post_code'></td>
</tr>
<tr>
<td>Phone:</td>
<td><input type='text' name='Phone'></td>
</tr>
<tr>
<td>Mobile Phone:</td>
<td><input type='text' name='MobilePhone'></td>
</tr>
<tr>
<td>Email:</td>
<td><input type='text' name='Email'></td>
</tr>
<tr>
<td><input type="reset" name="reset" value="Reset"></td>
<td><input type="submit" name="Submit" id="Submit" value="Add Contact"></td>
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