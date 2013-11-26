<?php
require_once (dirname(__FILE__) . '/lib/common.php');
forceUserLogin();
include  (dirname(__FILE__) . '/header.php');
if (isset($_POST['Submit']))
{
$id = $_POST['id'];
$Notes = $_POST['Notes'];
$date_entered = $_POST['date_entered'];
$time_entered = $_POST['time_entered'];

$sql = "UPDATE tevent SET Notes = '$Notes', date_entered = '$date_entered', time_entered = '$time_entered' WHERE event_id = $id";
//$sql = "INSERT INTO tcontact VALUES ('', '$Name', '$Address', '$Town', '$State', '$post_code', '$Phone', '$MobilePhone', '$Email', '$user_id')";
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
<img src="images/contact.png" alt="Add Contact" />
<h2>Update Eventt</h2>
<p>All fields required.</p>
<form action="" method="post">
<table>
<?php
if(isset($_GET['id']))
{
$id = $_GET['id'];
$query = "SELECT * FROM tevent where event_id = $id";
$result = mysql_query($query) or die(mysql_error());
while ($newArray = mysql_fetch_array($result))
	{
$id = $newArray['event_id'];
$Notes = $newArray['Notes'];
$date_entered = $newArray['date_entered'];
$time_entered = $newArray['time_entered'];
$contact_id = $newArray['contact_id'];

}
echo "
<input type='hidden' name='id'  value='$id'>
<tr><td>Notes</td><td>  <textarea name='Notes'>$Notes</textarea></td></tr>
<tr><td>date_entered</td><td>  <input type='text' name='date_entered'  value='$date_entered'></td></tr>
<tr><td>time_entered</td><td>  <input type='text' name='time_entered'  value='$time_entered'></td></tr>
";
}
?>


<tr><td><input name="reset" type="reset" value="Reset"></td><td> <input name="Submit" type="submit" id="Submit" value="Update"></td></tr>



</table>
<p>&nbsp;</p>
</form>
<a href="events.php">Back to main Events page</a>

</div>
</div>
</div><!--/grid-->

<?php
include  (dirname(__FILE__)  . '/footer.php');
?>

