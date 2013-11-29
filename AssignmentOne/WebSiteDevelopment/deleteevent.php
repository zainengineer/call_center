<?php
require_once(dirname(__FILE__) . '/lib/common.php');
forceUserLogin();
include(dirname(__FILE__) . '/header.php');
?>
<div class="layout-grid">
<div id="jumps" class="layout-cell layout-1">
<div>
<img src="images/contact.png" alt="Add Contact"/>
<h2>Delete Contact</h2>
<?php
if (isset($_GET['deleteid']))
{
$deleteid = $_GET['deleteid'];
echo "<h2>You have requested to delete the user with id " . $deleteid;
echo "</h2>";
$query = "DELETE FROM tevent WHERE   id = $deleteid";
$result = mysql_query($query);
if (mysql_affected_rows() > 0) {
echo "<h2>The record was deleted.</h2>";
}
else
{
echo "<h2>There is no record  with id $deleteid</h2>";
}
}
?>
<a href="contacts.php">Back To Main Contacts Page</a>
</div>
</div>
</div><!--/grid-->
<?php
include(dirname(__FILE__) . '/footer.php');
?>