<?php
require_once (dirname(__FILE__) . '/lib/common.php');
forceUserLogin();
include  (dirname(__FILE__) . '/header.php');
if (isset($_POST['Submit']))
{
$id = $_POST['id'];
$Notes = $_POST['Notes'];
$DateEntered = $_POST['DateEntered'];
$TimeEntered = $_POST['TimeEntered'];

$sql = "UPDATE tevent SET Notes = '$Notes', DateEntered = '$DateEntered', TimeEntered = '$TimeEntered' WHERE EventID = $id";
//$sql = "INSERT INTO tcontact VALUES ('', '$Name', '$Address', '$Town', '$State', '$PostCode', '$Phone', '$MobilePhone', '$Email', '$UserID')";
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
$query = "SELECT * FROM tevent where EventID = $id";
$result = mysql_query($query) or die(mysql_error());
while ($newArray = mysql_fetch_array($result))
	{
$id = $newArray['EventID'];
$Notes = $newArray['Notes'];
$DateEntered = $newArray['DateEntered'];
$TimeEntered = $newArray['TimeEntered'];
$ContactID = $newArray['ContactID'];

}
echo "
<input type='hidden' name='id'  value='$id'>
<tr><td>Notes</td><td>  <textarea name='Notes'>$Notes</textarea></td></tr>
<tr><td>DateEntered</td><td>  <input type='text' name='DateEntered'  value='$DateEntered'></td></tr>
<tr><td>TimeEntered</td><td>  <input type='text' name='TimeEntered'  value='$TimeEntered'></td></tr>
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

