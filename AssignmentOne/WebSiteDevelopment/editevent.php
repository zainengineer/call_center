<?php
require_once(dirname(__FILE__) . '/lib/common.php');
forceUserLogin();
include(dirname(__FILE__) . '/header.php');
$message = '';
if (isset($_POST['Submit']))
{
$id = $_POST['id'];
$notes = $_POST['notes'];
$date_entered = $_POST['date_entered'];
$time_entered = $_POST['time_entered'];
$sql = "UPDATE tevent SET notes = '$notes', date_entered = '$date_entered', time_entered = '$time_entered' WHERE event_id = $id";
if (mysql_query($sql))
{
$message = "Record updated";
}
else
{
$message = "Error : " . mysql_error();
}
}
?>
<div class="layout-grid">
<div id="jumps" class="layout-cell layout-1">
<div>
<img src="images/contact.png" alt="Add Contact" />
<h2>Update Event</h2>
<?php
if ($message)
{
echo "<h3 style = 'background-color: deepskyblue;width:250px'>$message</h3>";
}
?>
<p>All fields required.</p>
<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
<table>
<?php
if(isset($_GET['id']))
{
$id = $_GET['id'];
$query = "SELECT * FROM tevent where event_id = $id";
$result = mysql_query($query) or die(mysql_error());
while($newArray = mysql_fetch_array($result))
{
$id = $newArray['event_id'];
$notes = $newArray['notes'];
$date_entered = $newArray['date_entered'];
$time_entered = $newArray['time_entered'];
$contactId = $newArray['contact_id'];
$userId = $newArray['user_id'];
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
}
echo "


<tr>
<td>User Name:</td>
<td>$userName</td>
</tr>
<tr>
<td>Contact Name:</td>
<td>$contactName</td>
</tr>
<input type='hidden' name='id'  value='$id'></td>
</tr>
<tr>
<td>Notes:</td>
<td><textarea name='notes' rows='5' cols='50'>$notes</textarea></td>
</tr>
<tr>
<td>Date Entered:</td>
<td><input type='text' name='date_entered'  value='$date_entered'></td>
</tr>
<tr>
<td>Time Entered:</td>
<td><input type='text' name='time_entered'  value='$time_entered'></td>
</tr> ";
}
?>
<tr>
<td><input type="reset" name="reset" value="Reset"></td>
<td><input type="submit" name="Submit" id="Submit" value="Update"></td>
</tr>
</table>
<p>&nbsp;</p>
</form>
<a href="events.php">Back To Main Events Page</a>
</div>
</div>
</div><!--/grid-->
<?php
include(dirname(__FILE__) . '/footer.php');
?>