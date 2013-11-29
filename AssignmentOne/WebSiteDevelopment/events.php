<?php
require_once(dirname(__FILE__) . '/lib/common.php');
forceUserLogin();
include(dirname(__FILE__) . '/header.php');
?>
<div class="layout-grid">
<div id="jumps" class="layout-cell layout-1">
<div>
<img src="images/contact.png" alt="Events"/>
<h2>Events</h2>
<a href="addevent.php">Add Event</a>
<?php
if (isset($_GET['delid']))
{
$id = $_GET['delid'];
$sql = "DELETE FROM tevent WHERE event_id = $id";
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
<td>Event ID:</td>
<td>Notes:</td>
<td>Date Entered:</td>
<td>Contact ID:</td>
<?php
if (isset($_SESSION['user_role']) && $_SESSION['user_role']=='Admin' )
{
echo '<td>User:</td>';
}
?>
<td>Edit:</td>
<td>Delete:</td>
</tr>
<?php
$query = "SELECT * FROM tevent";
$result = mysql_query($query) or die(mysql_error());
while($newArray = mysql_fetch_array($result))
{
$id = $newArray['event_id'];
$Notes = $newArray['notes'];
$date_entered = $newArray['date_entered'];
$time_entered = $newArray['time_entered'];
$contactId = $newArray['contact_id'];
$userId = $newArray['user_id'];
$userId = $newArray['contact_id'];  
if (!$userId)
{
$userId = '';
}
$contactName = '';
$userName = '';
if ($contactId)
{
$sql = "select name FROM tcontact WHERE contact_id = $contactId";
$contactName = getQueryDefaultBySingleRow($sql);
}
if ($userId)
{
$sql = "select user_name,email FROM tlogin  WHERE user_id= $userId";
$row = GetSingleRow($sql);
if ($row)
{
$userName = $row['user_name'];
if (!$userName)
{
$userName = $row['email'];
}
}
}
?>
<tr>
<td><?php echo $id; ?></td>
<td><?php echo $Notes; ?></td>
<td><?php echo $date_entered; ?></td>
<td><a href='editcontact.php?id=<?php echo $contactId; ?> '><?php echo $contactName; ?></a></td>
<?php
if (isset($_SESSION['user_role']) && $_SESSION['user_role']=='Admin' )
{
?>
<td><a href='edituser.php?id=<?php echo $userId; ?> '><?php echo $userName ; ?></a></td>
<?php
}
?>
<td><a href='editevent.php?id=<?php echo $id; ?> '>Edit</a></td>
<td><a href='events.php?delid=<?php echo $id; ?> '>Delete</a></td>
</tr>
<?php
}
?>
</table>
</div>
</div>
</div><!--/grid-->
<?php
include(dirname(__FILE__) . '/footer.php');
?>