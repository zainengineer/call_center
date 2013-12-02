<?php
require_once(dirname(__FILE__) . '/lib/common.php');
forceUserLogin();
include(dirname(__FILE__) . '/header.php');
?>
<div class="layout-grid">
<div id="jumps" class="layout-cell layout-1">
<div>
<img src="images/contact.png" alt="Contacts"/>
<h2>Contacts</h2>
<a href="addcontact.php">Add Contact</a>
<?php
if(isset($_GET['delid']))
{
$id = $_GET['delid'];
$sql = "DELETE FROM tcontact WHERE contact_id = $id";
if (mysql_query($sql))
{
echo "<b><i>Record Deleted</b></i>";
}
else
{
echo "Error : " . mysql_error();
}
}
?>
<table>
<tr>
<td>Name:</td>
<td>Address:</td>
<td>Town:</td>
<td>State:</td>
<td>Post Code:</td>
<td>Phone:</td>
<td>Mobile Phone:</td>
<td>Email:</td>
<td>Add Event:</td>
<td>Events:</td>
<td>Edit:</td>
<td>Delete:</td>
</tr>
<?php
$query = "SELECT * FROM tcontact";
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
echo "<tr>
<td>$Name</td>
<td>$Address</td>
<td>$Town</td>
<td>$State</td>
<td>$post_code</td>
<td>$Phone</td>
<td>$MobilePhone</td>
<td>$Email</td>
<td><a href='addevent.php?id=$id'>Add Events</a></td>
<td><a href='eventslog.php?id=$id'>Events</a></td>
<td><a href='editcontact.php?id=$id'>Edit</a></td><td>
<a href='contacts.php?delid=$id'>Delete</a></td></tr>";
}
?>
</table>
</div>
</div>
</div><!--/grid-->
<?php
include(dirname(__FILE__) . '/footer.php');
?>