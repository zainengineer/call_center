<?php
require_once (dirname(__FILE__) . '/lib/common.php');
forceUserLogin();
include  (dirname(__FILE__) . '/header.php');
if (isset($_POST['Submit']))
{
$id = $_POST['id'];
$Name = $_POST['Name'];
$Address = $_POST['Address'];
$Town = $_POST['Town'];
$State = $_POST['State'];
$PostCode = $_POST['PostCode'];
$Phone = $_POST['Phone'];
$MobilePhone = $_POST['MobilePhone'];
$Email = $_POST['Email'];
$UserID = $_POST['UserID'];
$sql = "UPDATE tcontact SET Name = '$Name', Address = '$Address', Town = '$Town', State = '$State', PostCode = '$PostCode', Phone = '$Phone', MobilePhone = '$MobilePhone', Email = '$Email', UserID = '$UserID' WHERE ContactID = $id";
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
<h2>Update Contact</h2>
<p>All fields required.</p>
<form action="" method="post">
<table>
<?php
if(isset($_GET['id']))
{
$id = $_GET['id'];
$query = "SELECT * FROM tcontact where ContactID = $id";
$result = mysql_query($query) or die(mysql_error());
while ($newArray = mysql_fetch_array($result))
	{
$id = $newArray['ContactID'];
$Name = $newArray['Name'];
$Address = $newArray['Address'];
$Town = $newArray['Town'];
$State = $newArray['State'];
$PostCode = $newArray['PostCode'];
$Phone = $newArray['Phone'];
$MobilePhone = $newArray['MobilePhone'];
$Email = $newArray['Email'];
$UserID = $newArray['UserID'];
}
echo "
<tr><td>Name</td><td> 
<input type='hidden' name='id' value='$id'>
 <input type='text' name='Name'  value='$Name'></td></tr>
<tr><td>Address</td><td>  <input type='text' name='Address'  value='$Address'></td></tr>
<tr><td>Town</td><td>  <input type='text' name='Town'  value='$Town'></td></tr>
<tr><td>State</td><td>
<select id='State'>
<option value='$State'>$State</option>
<option value='ACT'>ACT</option>
<option value='NSW'>NSW</option>
<option value='NT'>NT</option>
<option value='QLD'>QLD</option>
<option value='SA'>SA</option>
<option value='TAS'>TAS</option>
<option value='VIC'>VIC</option>
<option value='WA'>WA</option>
</select></td></tr>
<tr><td>PostCode</td><td>  <input type='text' name='PostCode'  value='$PostCode'></td></tr>
<tr><td>Phone</td><td>  <input type='text' name='Phone'  value='$Phone'></td></tr>
<tr><td>MobilePhone</td><td>  <input type='text' name='MobilePhone'  value='$MobilePhone'></td></tr>
<tr><td>Email</td><td>  <input type='text' name='Email'  value='$Email'></td></tr>
<tr><td>UserID</td><td>  <input type='text' name='UserID'  value='$UserID'></td></tr>";
}
?>


<tr><td><input name="reset" type="reset" value="Reset"></td><td> <input name="Submit" type="submit" id="Submit" value="Update"></td></tr>



</table>
<p>&nbsp;</p>
</form>
<a href="contacts.php">Back to main Contacts page</a>

</div>
</div>
</div><!--/grid-->

<?php
include  (dirname(__FILE__)  . '/footer.php');
?>

