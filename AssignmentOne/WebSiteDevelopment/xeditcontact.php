<?php
require_once (dirname(__FILE__) . '/lib/common.php');
forceUserLogin();
include  (dirname(__FILE__) . '/header.php');
?>

<div class="layout-grid">
<div id="jumps" class="layout-cell layout-1">
<div>
<img src="images/contact.png" alt="Edit Contact" />
<h2>Edit Contact</h2>
<?php
include('scripts/userfunctions.php');
header(' Location: scripts/validateeditcontact.php'); 
exit;
?>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<?php
 // First Name field goes here.
?>
 <p>
 <label for="firstname">First Name:</label>
 <input type="text" name="firstname" id="firstname" autofocus value="<?php echo $firstname; ?>">
 <span class="error" id="firstname_error"> 
 <?php echo $msg_firstname;
 ?>
<?php
 // These variables need to match the error variables that are set in the validation script
?>
 </span>
 </p>
<?php
 // Lastname field goes here.
?>
 <p>
 <label for="lastname">Last Name:</label>
 <input type="text" name="lastname" id="lastname" autofocus value="<?php echo $lastname; ?>">
 <span class="error" id="lastname_error"> 
 <?php echo $msglastname;
 ?>
<?php
 // These variables need to match the error variables that are set in the validation script
?>
 </span>
 </p>
 <p>
<?php
 // address field goes here.
?>
 <p>
 <label for="address">Address:</label>
 <input type="text" name="address" id="address" autofocus value="<?php echo $address; ?>">
 <span class="error" id="address_error">
 <?php echo $msg_address;
 ?>
<?php
 // These variables need to match the error variables that are set in the validation script
?>
 </span>
 </p>
 <p>
 <label for="town">Town:</label>
 <input type="text" name="firstname" id="town" autofocus value="<?php echo $town; ?>">
 <span class="error" id="town_error">
 <?php echo $msg_town;
 ?>
<?php
 // These variables need to match the error variables that are set in the validation script
?>
 </span>
 </p>
 <p>
 <label for="state">State:</label>
 <select id= "state" name="state" autofocus value="<?php echo $state; ?>">
 <option value="ACT">ACT</option>
 <option value="NT">NT</option>
 <option value="NSW">NSW</option>
 <option value="SA">SA</option>
 <options value="TAS">TAS</option>
 <option value="VIC">VIC</option>
 <option value="WA">WA</option>
 </select>
 <span class="error" id="state_error">
 <?php echo $msg_state;
 ?>
<?php
 // These variables need to match the error variables that are set in the validation script
?>
 </span>
 </p>
 <p>
 <label for="postcode">Post Code:</label>
 <input type="text" name="postcode" id="postcode" autofocus value="<?php echo $postcode; ?>">
 <span class="error" id="postcode_error">
 <?php echo $msg_postcode;
 ?>
<?php
 // These variables need to match the error variables that are set in the validation script
?>
 </span>
 </p>
 <p>
 <label for="phone">Phone:</label>
 <input type="text" name="phone" id="firstname" autofocus value="<?php echo $phone; ?>">
 <span class="error" id="phone_error">
 <?php echo $msg_phone;
 ?>
<?php
 // These variables need to match the error variables that are set in the validation script
?>
 </span>
 </p>
 <p>
 <label for="mobilephone">Mobile Phone:</label>
 <input type="text" name="mobilephone" id="firstname" autofocus value="<?php echo $mobilephone; ?>">
 <span class="error" id="mobilephone_error">
 <?php echo $msg_mobilephone;
 ?>
<?php
 // These variables need to match the error variables that are set in the validation script
?>
 </span>
 </p>
 <p>
 <label for="email">E-mail:</label>
 <input type="text" name="email" id="email" autofocus value="<?php echo $email; ?>">
 <span class="error" id="email_error">
 <?php echo $msg_email;
 ?>
<?php
 // These variables need to match the error variables that are set in the validation script
?>
 </span>
 </p>
 <p>
<?php
 // Submit and Reset form elements goes here.
?>
 <input type="submit" name="submit" value="Create Account">
 </form>
?>
</div>
</div>
</div><!--/grid-->

<?php
include  (dirname(__FILE__)  . '/footer.php');
?>
