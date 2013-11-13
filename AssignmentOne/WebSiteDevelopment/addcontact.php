<?php
require_once (dirname(__FILE__) . '/lib/common.php');
forceUserLogin();
include  (dirname(__FILE__) . '/header.php');
if (isset($_POST['Submit']))
{

$Name = $_POST['Name'];
$Address = $_POST['Address'];
$Town = $_POST['Town'];
$State = $_POST['State'];
$PostCode = $_POST['PostCode'];
$Phone = $_POST['Phone'];
$MobilePhone = $_POST['MobilePhone'];
$Email = $_POST['Email'];
$UserID = $_POST['UserID'];
$sql = "INSERT INTO tcontact VALUES ('', '$Name', '$Address', '$Town', '$State', '$PostCode', '$Phone', '$MobilePhone', '$Email', '$UserID')";
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
<h2>Add Contact</h2>
<p>All fields required.</p>
<form action="addcontact.php" method="post">
<table>
<tr><td>Name</td><td>  <input type='text' name='Name'></td></tr>
<tr><td>Address</td><td>  <input type='text' name='Address'></td></tr>
<tr><td>Town</td><td>  <input type='text' name='Town'></td></tr>
<tr><td>State</td><td>  
<select name="State">
<option value="ACT">ACT</option>
<option value="NSW">NSW</option>
<option value="NT">NT</option>
<option value="QLD">QLD</option>
<option value="SA">SA</option>
<option value="TAS">TAS</option>
<option value="VIC">VIC</option>
<option value="WA">WA</option>
</select></td></tr>
<tr><td>PostCode</td><td>  <input type='text' name='PostCode'></td></tr>
<tr><td>Phone</td><td>  <input type='text' name='Phone'></td></tr>
<tr><td>MobilePhone</td><td>  <input type='text' name='MobilePhone'></td></tr>
<tr><td>Email</td><td>  <input type='text' name='Email'></td></tr>
<!-- <tr><td>UserID</td><td>  <input type='text' name='UserID'></td></tr> -->
<tr><td><input name="reset" type="reset" value="Reset"></td><td> <input name="Submit" type="submit" id="Submit" value="Add Contact"></td></tr>



</table>
<p>&nbsp;</p>
</form>
<a href="contacts.html">Back to main Contacts page</a>

</div>
</div>
</div><!--/grid-->

<?php
include  (dirname(__FILE__)  . '/footer.php');
?>

