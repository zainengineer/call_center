<?php
if (isset($_GET['id']))
{
$id = $_GET['id'];
$query = "SELECT * FROM tcontact where contact_id = $id";
$result = mysql_query($query) or die(mysql_error());
while($newArray = mysql_fetch_array($result))
{
$id = $newArray['contact_id'];
$Name = $newArray['name'];
$Address = $newArray['address'];
$Town = $newArray['town'];
$State = $newArray['state'];
$post_code = $newArray['post_code'];
$Phone = $newArray['phone'];
$MobilePhone = $newArray['mobile_phone'];
$Email = $newArray['email'];
}
echo "<table>
<tr>
<td><a href='editcontact.php?id=$id'>Edit</a></td>
</tr>
<tr>
<td>Name:</td>
<td>$Name</td>
</tr>
<tr>
<td>Address:</td> 
<td>$Address</td>
</tr>
<tr>
<td>Town:</td>
<td>$Town</td>
</tr>
<tr>
<td>State:</td>
<td>$State</td>
</tr>
<tr>
<td>Post Code:</td>
<td>$post_code</td>
</tr>
<tr>
<td>Phone:</td>
<td>$Phone</td>
</tr>
<tr>
<td>Mobile Phone:</td>
<td>$MobilePhone</td>
</tr>
<tr>
<td>Email:</td>
<td>$Email</td>
</tr>
</table>";
}
?>