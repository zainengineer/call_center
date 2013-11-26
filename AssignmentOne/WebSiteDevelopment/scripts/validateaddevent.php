 <?php
 //Initialize Error Variables.
   $msg_notes = '';
   $msg_date_entered = '' ;
   $msg_time_entered = '';
   $notes = '';
   $date_entered = '';
   $time_entered = '';
 // Vallidation of the form starts here.  Vallidation Of variables and match invalid or valid characters.
  if(isset($_POST['submit']))
 {
  $errors = 0;
 //  Validate all your form variables here instead of throughout the script. It helps to keep things grouped and tidy.
   $notes = trim($_POST['notes']);
   $date_entered = trim($_POST['date_entered']);
   $time_entered = trim($_POST['time_entered']);
  if(empty($notes))
 {
 // Check if field is empty first before any more validating, just so we don't display wrong messages.
   $msg_notes = '* Please enter your notes';
   $errors++;
 }
  else if(preg_match('/\d/', $notes))
 {
 // This seems to work a lot better than the other way.
   $msg_notes = "Only characters can be entered for this field!";
   $errors++;
 }
  else if(strlen($notes) > 2000)
 {
   $msg_notes = "You have exceded the maxium amount of characters for this field!";
   $errors++;
 }
  if(empty($date_entered))
 {
 // Check if field is empty first before any more validating, just so we don't display wrong messages.
   $msg_time_entered = '* Please enter your date';
   $errors++;
 }
  else if(preg_match('/\d/', $date_entered))
 {
 // This seems to work a lot better than the other way.
   $msg_dateentred = "Only numbers can be entered for this field!";
   $errors++;
 }
  else if(strlen($date_entered) > 50)
 {
   $msg_date_entered = "Invalid date entered";
   $errors++;
 }
 // function to check valid date and is formatted.
   $date_format = 'YY-MM-DD';
   $input = '2013-06-24';
   $input = trim($input);
   $time = strtotime($input);
   $is_valid = date($date_format, $time) == $input;
   print "You have entered a valid date for this field! ".($is_valid.";  
 // check the date and time is correct.
   var_dump(checkdate(12, 31, 2013));
   var_dump(checkdate(2, 29, 2013));
  if(empty($time_entered))
 {
 // Check if field is empty first before any more validating, just so we don't display wrong messages.
   $msg_time_entered = '* Please enter your time';
   $errors++;
 }
  else if(preg_match('/\d/', $time_entered))
 {
 // This seems to work a lot better than the other way.
   $msg_time_entered = "Only characters can be entered for this field!";
   $errors++;
 }
  else if(strlen($time_entered) > 50)
 {
   $msg_time_entered = "Invalid time";
   $errors++;
 }
 // function to check valid time and is formatted.
   $time_format = 'HH-MM-SS';
   $input = '11:21:00';
   $input = trim($input);
   $time = strtotime($input);
   $is_valid = time($time_format, $time) == $input;
   print "You have entered a valid time for this field! ".($is_valid.";  
 // vallidation of length fields for all text fields.
 // I moved this to the bottom, remember that we only continue the script if no errors are caught.
 // So this needed to be below the validation of length fields section.
 // Vallidation of errors.
  if($errors == 0)
 {
 // Best not to check whether data is set before we allow the user access.
 // We should only allow access is their details are correct.
 // I have moved this here so we can easily alter it here.
  if(isset($data) && !empty($data))
 {
 // Database server information goes here.
   $server = "localhost";
   $user = "root";
   $password = "password";
   $database = "contactcentre";
   $connection =mysql_connect('localhost', 'root', '');
   $db=mysql_select_db($database, $connection) or die("Unable to select database"); 
   $query = "insert into events(notes, date_entered, time_entered)";
   $result = $mysql_query($query, $connection) or die("Error in query: ".mysql_error());
  if($result = mysql_query("SELECT * FROM contacts"))
 {
   while($row = mysql_fetch_array($result))
 {
  echo "<table>";
  echo "<tr>";
  echo "<td><h2>Contact Centre Add Event:</h2></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td><h2>Notes:</h2></td>";
  echo "<td>".$row['notes']." ".$row['lastname']."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td><h2>Date Entered:</h2></td>";
  echo "<td>".$row['date_entered']."</td>";
  echo "</tr>";
  echo "<td><h2>Time Entered:</h2></td>";
  echo "<td>".$row['time_entered']."</td>";
  echo "</tr>";
  echo "</table>";
 }
 }
  mysql_close();
 }
 }
 }
?>