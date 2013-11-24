<?php
require_once (dirname(__FILE__) . '/lib/common.php');
forceUserLogin();
include  (dirname(__FILE__) . '/header.php');
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

$sql = "DELETE FROM tcontact WHERE ContactID = $id";
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
<td>Name</td>
<!--<td>Address</td>
<td>Town</td>
<td>State</td>
-->
<td>PostCode</td>
<td>Phone</td>
<td>MobilePhone</td>
<td>Email</td>
<td>Add Event</td>
<td>Events</td>
<td>Edit</td>
<td>Del</td>
</tr>
<?php
$query = "SELECT * FROM tcontact";
$result = mysql_query($query) or die(mysql_error());
while ($newArray = mysql_fetch_array($result))
	{
$id = $newArray['ContactID'];
$Name = $newArray['Name'];
//$Address = $newArray['Address'];
//$Town = $newArray['Town'];
//$State = $newArray['State'];
$PostCode = $newArray['PostCode'];
$Phone = $newArray['Phone'];
$MobilePhone = $newArray['MobilePhone'];
$Email = $newArray['Email'];
$UserID = $newArray['UserID'];
//echo "<tr><td>$Name</td><td>$Address</td><td>$Town</td><td>$State</td><td>$PostCode</td><td>$Phone</td><td>$MobilePhone</td><td>$Email</td><td>$UserID</td></tr>";

echo "<tr><td>$Name</td><td>$PostCode</td><td>$Phone</td><td>$MobilePhone</td><td>$Email</td>
<td><a href='addevent.php?id=$id'>Add Events</a></td>
<td><a href='eventslog.php?id=$id'>Events</a></td>
<td><a href='editcontact.php?id=$id'>Edit</a></td><td>
<a href='contacts.php?delid=$id'>Del</a></td></tr>";
}
			?>
			</table>
        </div>
    </div>
</div><!--/grid-->
<?php
include  (dirname(__FILE__)  . '/footer.php');
?>