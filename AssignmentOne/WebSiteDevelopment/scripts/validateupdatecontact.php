 <?php
 //Initialize Error Variables.
   $msg_FIRSTNAME = '';
   $MSG_LASTNAME = '';
   $MSG_ADDRESS = '';
   $MSG_TOWN = '';
   $MSG_STATE = '';
   $MSG_post_code = '';
   $MSG_PHONE = '';
   $MSG_MOBILEPHONE = '';
   $msg_email = '';
 // Initialize Variables.
   $firstname = '';
   $lastname = '';
   $address = '';
   $town = '';
   $state = '';
   $post_code = '';
   $phone = '';
   $mobilephone = '';
   $email = '';
 // Vallidation of the form starts here.  Vallidation Of variables and match invalid or valid characters.
  if(isset($_POST['submit']))
 {
   $errors = 0;
 //  Validate all your form variables here instead of throughout the script. It helps to keep things grouped and tidy.
   $firstname = trim($_POST['firstname']);
   $lastname = trim($_POST['lastname']);
   $address = trim($_POST['address']);
   $town = trim($_POST['town']);
   $state = trim($_POST['state']);
   $post_code = trim($_POST['post_code']);
   $phone = trim($_POST['phone']);
   $mobilephone = trim($_POST['mobilephone']);
   $email = trim($_POST['email']);
  if(empty($firstname))
 {
 // Check if field is empty first before any more validating, just so we don't display wrong messages.
   $msg_firstname = '* Please enter your firstname';
   $errors++;
 }
  else if(preg_match('/\d/', $firstname))
 {
 // This seems to work a lot better than the other way.
   $msg_firstname = "Only characters can be entered for this field!";
   $errors++;
 }
  else if(strlen($firstname) > 50)
 {
   $msg_firstname = "Invalid Firstname";
   $errors++;
 }
  if(empty($lastname))
 {
 // Check if field is empty first before any more validating, just so we don't display wrong messages.
   $msg_lastname = '* Please enter your lastname';
   $errors++;
 }
  else if(preg_match('/\d/', $lastname))
 {
 // This seems to work a lot better than the other way.
   $msg_lastname = "Only characters can be entered for this field!";
   $errors++;
 }
  else if(strlen($lastname) > 50)
 {
   $msg_lastname = "Invalid Lastname";
   $errors++;
 }
  if(empty($address))
 {
 // Check if field is empty first before any more validating, just so we don't display wrong messages.
   $msg_address = '* Please enter your address';
   $errors++;
 }
  else if(preg_match('/\d/', $address))
 {
 // This seems to work a lot better than the other way.
   $msg_address = "Only characters can be entered for this field!";
   $errors++;
 }
  else if(strlen($address) > 50)
 {
   $msg_address = "Invalid Address";
   $errors++;
 }
  if(empty($town))
 {
 // Check if field is empty first before any more validating, just so we don't display wrong messages.
   $msg_town = '* Please enter your town';
   $errors++;
 }
  else if(preg_match('/\d/', $town))
 {
 // This seems to work a lot better than the other way.
   $msg_town = "Only characters can be entered for this field!";
   $errors++;
 }
  else if(strlen($town) > 50)
 {
   $msg_town = "Invalid Town";
   $errors++;
 } 
 // Vallidate state combo box.
   $state= array("state");
 // verify is the lowercased version of $state. 
   $verify = strtolower($state = $_REQUEST["state"]);
 // whether we found an allowed state.
    $found = 0;
 // Check for each state in the array.
     if (is_array($state))
     foreach($state as $state)
     {
  if($state == $verify)
 {
   $found = 1;
  break;
 }
  if($state == $verify)
 {
    $found = 2;
  break;
 }
  if($state == $verify)
 {
    $found = 3;
  break;
 }
  if($state == $verify)
 {
    $found = 4;
  break;
 }
  if($state == $verify)
 {
    $found = 5;
  break;
 }
  if($state == $verify)
 {
    $found = 6;
  break;
 }
  if($state == $verify)
 {
    $found = 7;
  break;
 }
  if($state == $verify)
 {
    $found = 8;
  break;
 }
}
  if (!$found)
 { 
   $msg_state = 'You have selecdted a state:';
 }
} 
  if(empty($post_code))
 {
 // Check if field is empty first before any more validating, just so we don't display wrong messages.
   $msg_post_code = '* Please enter your post_code';
   $errors++;
 }
  else if(preg_match('/\d/', $post_code))
 {
 // This seems to work a lot better than the other way.
   $msg_post_code = "Only numbers can be entered for this field!";
   $errors++;
 }
  else if(strlen($post_code) > 50)
 {
   $msg_post_code = "Invalid post_code";
   $errors++;
 }
  if(empty($phone))
 {
 // Check if field is empty first before any more validating, just so we don't display wrong messages.
   $msg_phone = '* Please enter your Phone number';
   $errors++;
 }
  else if(preg_match('/\d/', $phone))
 {
 // This seems to work a lot better than the other way.
   $msg_phone = "Only numbers can be entered for this field!";
   $errors++;
 }
  else if(strlen($phone) > 50)
 {
   $msg_phone = "Invalid Phone Number";
   $errors++;
 }
  if(empty($mobilephone))
 {
 // Check if field is empty first before any more validating, just so we don't display wrong messages.
   $msg_mobilephone = '* Please enter your mobile phone number';
   $errors++;
 }
  else if(preg_match('/\d/', $mobilephone))
 {
 // This seems to work a lot better than the other way.
   $msg_mobilephone = "Only numbers can be entered for this field!";
   $errors++;
 }
  else if(strlen($mobilephone) > 50)
 {
   $msg_mobilephone = "Invalid Mobile Phone Number";
   $errors++;
 }
  if(empty($email))
 {
   $msg_email = '* Please enter your e-mail';
   $errors++;
 }
  else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false)
 {
   $msg_email = '* Invalid email address:';
   $errors++;
 }
 // No need to check if Email field contains numbers, because some people have numbers in their email address. The above function will validate perfectly.
 // vallidation of length fields for all text fields.
 // I moved this to the bottom, remember that we only continue the script if no errors are caught.
 // So this needed to be below the validation of length fields section.
 // Vallidation of errors.
  if($errors == 0)
 {
 // Best not to check whether data is set before we allow the user access.
 // We should only allow access is their details are correct. // I have moved this here so we can easily alter it here.
  if(isset($data) && !empty($data))
 {
 // Database server information goes here.
   $server = "localhost";
   $user = "root";
   $password = "password";
   $database = "contactcentre";
   $connection =mysql_connect('localhost', 'root', '');
   $db=mysql_select_db($database, $connection) or die("Unable to select database"); 
   $result = $mysql_query($query, $connection) or die("Error in query: ".mysql_error())";
  if($result = mysql_query("UPDATE  contacts SET firstname = 'Marvin', lastname = 'Hunkin', address = '28 Hazeltine Drive', town = 'Seaford Rise', state = 'SA', post_code = '5169', phone = '(08) 8327 4059', mobilephone = '0404 800 900', email = 'startrekcafe@gmail.com'"))
 {
   while($row = mysql_fetch_array($result))
 {
  echo "<table>";
  echo "<tr>";
  echo "<td><h2>Contact Centre Update Contact:</h2></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td><h2>Name:</h2></td>";
  echo "<td>".$row['firstname']." ".$row['lastname']."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td><h2>Address:</h2></td>";
  echo "<td>".$row['address']."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td><h2>Town:</h2></td>";
  echo "<td>".$row['town']."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td><h2>State:</h2></td>";
  echo "<td>".$row['state']."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td><h2>Post Code:</h2></td>";
  echo "<td>".$row['post_code']."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td><h2>Phone:</h2></td>";
  echo "<td>".$row['phone']."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td><h2>Mobile Phone:</h2></td>";
  echo "<td>".$row['mobilephone']."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td><h2>Email:</h2></td>";
  echo "<td><a href=\"mailto: ".$row['email']."\"> ".$row['email']."</a></td>";
  echo "</tr>";
  echo "</table>";
 }
 }
   mysql_close();
 }
 }
 }
?>