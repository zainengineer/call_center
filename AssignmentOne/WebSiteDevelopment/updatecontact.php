<?php
require_once(dirname(__FILE__) . '/lib/common.php');
forceUserLogin();
include(dirname(__FILE__) . '/header.php');
$fields = array('name', 'address', 'town', 'state', 'post_code', 'phone', 'mobile_phone', 'email');
$errorList = array();
$postedData = array();
$contactId = $_GET['id'];
if ($_POST) {
    foreach ($fields as $field) {
        $postedData[$field] = $_POST[$field];
    }
    $sql = GetUpdateQuery('tcontact',$postedData,"contact_id = '$contactId'",false,true );
    ExecuteQuery($sql);
}
else {
    $sql = "SELECT * FROM tcontact WHERE contact_id = $contactId";
    $row = GetSingleRow($sql);
    foreach ($fields as $field) {
        $postedData[$field] = $row[$field];
    }
}

$GLOBALS['errorList'] = $errorList;
function displayError($fieldName)
{
    $errorList = $GLOBALS['errorList'];
    if (isset($errorList[$fieldName])) {
        echo $fieldName;
    }

}

?>
<div class="layout-grid">
    <div id="jumps" class="layout-cell layout-1">
        <div>
            <img src="images/contact.png" alt="Update Contact"/>
            <?php

            if ($_POST){
                echo '<h3 style="background-color: deepskyblue">Contacts updated</h3>';
            }
            ?>
            <h2>Update Contact</h2>

            <p>All fields required.</p>

            <form action="<?php echo "updatecontact.php?id=$contactId"; ?>" method="post">
                <?php
                // First Name field goes here.
                ?>
                <p>
                    <label for="name">First Name:</label>
                    <input type="text" name="name" id="name" autofocus value="<?php echo $postedData['name']; ?>">
 <span class="error" id="name">
 <?php displayError('name') ?>
 <?php
 // These variables need to match the error variables that are set in the validation script
 ?>
 </span>
                    <?php
                    // address field goes here.
                    ?>

                <p>
                    <label for="address">Address:</label>
                    <input type="text" name="address" id="address" autofocus
                           value="<?php echo $postedData['address']; ?>">
 <span class="error" id="address_error">
 <?php displayError('address') ?>
 <?php
 // These variables need to match the error variables that are set in the validation script
 ?>
 </span>
                </p>

                <p>
                    <label for="town">Town:</label>
                    <input type="text" name="town" id="town" autofocus value="<?php echo $postedData['town']; ?>">
 <span class="error" id="town_error">
 <?php displayError('town'); ?>
 <?php
 // These variables need to match the error variables that are set in the validation script
 ?>
 </span>
                </p>

                <p>
                    <label for="state">State:</label>
                    <select id="state" name="state" autofocus value="<?php echo $postedData['state']; ?>">
                        <option value="ACT">ACT</option>
                        <option value="NT">NT</option>
                        <option value="NSW">NSW</option>
                        <option value="SA">SA</option>
                        <option value="TAS">TAS</option>
                        <option value="VIC">VIC</option>
                        <option value="WA">WA</option>
                    </select>
 <span class="error" id="state_error">
 <?php displayError('state'); ?>
 <?php
 // These variables need to match the error variables that are set in the validation script
 ?>
 </span>
                </p>
                <p>
                    <label for="post_code">Post Code:</label>
                    <input type="text" name="post_code" id="post_code" autofocus
                           value="<?php echo $postedData['post_code']; ?>">
 <span class="error" id="post_code_error">
 <?php displayError('post_code'); ?>
 <?php
 // These variables need to match the error variables that are set in the validation script
 ?>
 </span>
                </p>

                <p>
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone" id="phone" autofocus value="<?php echo $postedData['phone']; ?>">
 <span class="error" id="phone_error">
<?php displayError('phone'); ?>
 <?php
 // These variables need to match the error variables that are set in the validation script
 ?>
 </span>
                </p>

                <p>
                    <label for="mobile_phone">Mobile Phone:</label>
                    <input type="text" name="mobile_phone" id="mobile_phone" autofocus value="<?php echo $postedData['mobile_phone'] ?>">
 <span class="error" id="mobilephone_error">
 <?php displayError('[mobile_phone'); ?>
 <?php
 // These variables need to match the error variables that are set in the validation script
 ?>
 </span>
                </p>

                <p>
                    <label for="email">E-mail:</label>
                    <input type="text" name="email" id="email" autofocus value="<?php echo $postedData['email'] ?>">
 <span class="error" id="email_error">
 <?php displayError('[email'); ?>
 <?php
 // These variables need to match the error variables that are set in the validation script
 ?>
 </span>
                </p>

                <p>
                    <?php
                    // Submit and Reset form elements goes here.
                    ?>
                    <input type="submit" name="submit" value="Update Account">
            </form>
        </div>
    </div>
</div><!--/grid-->
