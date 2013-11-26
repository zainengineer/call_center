<?php
require_once(dirname(__FILE__) . '/lib/common.php');
include  (dirname(__FILE__)  . '/header.php');

if (isset($_POST['submit'])) {
    $data = array();
    $data['user_name'] = $_POST['username'];
    $data['email'] = $_POST['email'];
    $data['password'] = $_POST['password'];
    $data['role']= "User";


    $sql = GetInsertQuery('tlogin',$data);
    if (mysql_query($sql)) {
        echo "Record Added";
    }
    else {
        echo "Error : " . mysql_error();
    }
}

?>
<div class="layout-grid">
    <div id="jumps" class="layout-cell layout-1">
        <div>
            <img src="images/user-login-icon.png" alt="Login">

            <h2> Contact Centre Login</h2>
            <?php
          //  include('scripts/validatecreate.php');

            ?>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                
                   <table>
<tr><td></td><td></td></tr>
		<tr><td>		   <label for="username">User Name:</label> </td>
                    <td><input type="text" name="username" id="username" autofocus value="<?php echo $username; ?>">
 <span class="error" id="username_error">
 <?php echo $msg_username; // These variables need to match the error variables that are set in the validation script ?></span>
                </td>

                <tr><td>
                    <label for="email">E-mail:</label></td><td>
                    <input type="text" name="email" id="email" value="<?php echo $email; ?>">
 <span class="error" id="email_error">
 <?php echo $msg_email; ?></span>
                </td>

                <tr><td>
                    <label for="password">Password:</label></td>
					<td>
                    <input type="password" name="password" id="password" value="<?php echo $password; ?>">
                    <span class="error" id="password_error"> <?php echo $msg_password; ?></span></td>
                </tr>

                <!-- <p>
                    <label for="confirm_password">Confirm Password:</label>
                    <input type="password" name="confirm_password" id="confirm_password"
                           value="<?php echo $confirm_password; ?>"/>
                    <span class="error" id="confirm_password_error"> <?php echo $msg_password_confirm; ?></span>
                </p> -->

                <tr><td></td><td>

                    <input type="submit" name="submit" value="Sign up">
					</td></tr></table>
            </form>

        </div>
    </div>
</div>
<!--/grid-->

<?php
include  (dirname(__FILE__)  . '/footer.php');
?>
