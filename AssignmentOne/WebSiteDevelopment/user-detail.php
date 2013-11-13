<?php
if (isset($_GET['id']))
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
//$UserID = $newArray['UserID'];
}

echo "<table>
<tr><td></td><td><a href='editcontact.php?id=$id'>Edit</a></td></tr>
<tr><td>Name</td><td>$Name</td></tr>
<tr><td>Address</td><td>$Address</td></tr>
<tr><td>Town</td><td>$Town</td></tr>
<tr><td>State</td><td>$State</td></tr>
<tr><td>PostCode</td><td>$PostCode</td></tr>
<tr><td>Phone</td><td>$Phone</td></tr>
<tr><td>MobilePhone</td><td>$MobilePhone</td></tr>
<tr><td>Email</td><td>$Email</td></tr>
</table>";
}
?>

