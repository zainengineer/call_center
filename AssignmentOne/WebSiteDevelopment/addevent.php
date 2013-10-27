<?php
require_once (dirname(__FILE__) . '/lib/common.php');
forceUserLogin();
include  (dirname(__FILE__) . '/header.php');
if (isset($_POST['Submit']))
{
$Notes = $_POST['Notes'];
$DateEntered = $_POST['DateEntered'];
$TimeEntered = $_POST['TimeEntered'];

$sql = "INSERT INTO tevent VALUES ('', '$Notes', '$DateEntered', '$TimeEntered', '')";
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
<img src="images/contact.png" alt="Add Contact" />
<h2>Add Events</h2>
<p>All fields required.</p>
<form action="addevent.php" method="post">
<table>
<tr><td>Notes</td><td>  <textarea  name='Notes'> </textarea ></td></tr>
<tr><td>DateEntered</td><td>  <input type='text' name='DateEntered' value='<?php echo date("Y-m-d");?>'></td></tr>
<tr><td>TimeEntered</td><td>  <input type='text' name='TimeEntered' value='<?php echo date("H:i:s");?>'></td></tr>
<tr><td><input name="reset" type="reset" value="Reset"></td><td> <input name="Submit" type="submit" id="Submit" value="Add Event"></td></tr>



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

