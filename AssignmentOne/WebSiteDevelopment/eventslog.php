<?php
require_once (dirname(__FILE__) . '/lib/common.php');
forceUserLogin();
include  (dirname(__FILE__) . '/header.php');
$id = $_GET['id'];
?>
<div class="layout-grid">
<div id="jumps" class="layout-cell layout-1">
<div>
<img src="images/contact.png" alt="Events" align="left" /><?php include("user-detail.php"); ?>
<h2>Events</h2>

<a href="addevent.php?id=<?=$id?>">Add Event</a>

<?php
if(isset($_GET['delid']))
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
<!--<td>Name</td>
<td>Address</td>
<td>Town</td>
<td>State</td>
-->
<td>Event ID</td>
<td>Notes</td>
<td>Date Entered</td>
<td>Edit</td>
<td>Del</td>
</tr>
<?php

$query = "SELECT * FROM tevent where contact_id = $id";
$result = mysql_query($query) or die(mysql_error());
while ($newArray = mysql_fetch_array($result))
	{
$id = $newArray['event_id'];
$Notes = $newArray['Notes'];
$date_entered = $newArray['date_entered'];
$time_entered = $newArray['time_entered'];
$contact_id = $newArray['contact_id'];

//echo "<tr><td>$Name</td><td>$Address</td><td>$Town</td><td>$State</td><td>$post_code</td><td>$Phone</td><td>$MobilePhone</td><td>$Email</td><td>$user_id</td></tr>";

echo "<tr><td>$id</td><td>$Notes</td><td>$date_entered</td><td><a href='editevent.php?id=$id'>Edit</a></td><td>
<a href='events.php?delid=$id'>Del</a></td></tr>";
}
			?>
			</table>
			
</div>
</div>
</div><!--/grid-->

<?php
include  (dirname(__FILE__)  . '/footer.php');
?>
