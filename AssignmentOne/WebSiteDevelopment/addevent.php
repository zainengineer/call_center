<?php
require_once(dirname(__FILE__) . '/lib/common.php');
forceUserLogin();
include(dirname(__FILE__) . '/header.php');
if (isset($_POST['Submit']))
{
$data = array();
$data['notes'] = $_POST['notes'];
$data['date_entered'] = $_POST['date_entered'];
$data['time_entered'] = $_POST['time_entered'];
$data['contact_id']= $_POST['contact_id'];
$data['user_id']=  $_SESSION['user_id'];
$sql = GetInsertQuery('tevent', $data);
if (mysql_query($sql))
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
<img src="images/contact.png" alt="Add Contact" align="left"/>
<?php include("user-detail.php"); ?>
<h2>Add Events</h2>
<p>All fields required.</p>
<form action="addevent.php" method="post">
<table>
<tr>
<td>Notes:</td>
<td><textarea name='notes' rows="5" cols="40">
</textarea></td>
</tr>
<tr>
<td>Date Entered:</td>
<td><input type='text' name='date_entered' value='<?php echo date("Y-m-d"); ?>'></td>
</tr>
<tr>
<td>Time Entered:</td>
<td><input type='text' name='time_entered' value='<?php echo date("H:i:s"); ?>'></td>
</tr>
<tr>
<td>Contact ID:</td>
<td>
<select name = 'contact_id'>
<?php
if(isset($_GET['id']))
{
$contactId = $_GET['id'];
$query = "SELECT * FROM tcontact WHERE contact_id = $contactId";
}
else
{
$contactId = '';
$query = "SELECT * FROM tcontact";
}
$result = mysql_query($query) or die(mysql_error());
while($newArray = mysql_fetch_array($result))
{
$id = $newArray['contact_id'];
$Name = $newArray['name'];
echo "<option value = '" . $id . "'>" . $Name . "</option>";
}
?>
</select></td>
</tr>
<tr>
<td><input type="reset" name="reset" value="Reset"></td>
<td><input type="submit" name="Submit" id="Submit" value="Add Event"></td>
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