<?php
require_once(dirname(__FILE__) . '/lib/common.php');
forceUserLogin('Admin');
include(dirname(__FILE__) . '/header.php');
?>
<div class="layout-grid">
    <div id="jumps" class="layout-cell layout-1">
        <div>
            <img src="images/contact.png" alt="Users"/>

            <h2>Users</h2>
            <a href="create.php">Add User</a>

            <?php
            if (isset($_GET['delid'])) {

                $id = $_GET['delid'];

                $sql = "DELETE FROM tlogin WHERE user_id = $id";
                if (mysql_query($sql)) {
                    echo "<b><i>Record Deleted</b></i>";
                }
                else {
                    echo "Error : " . mysql_error();
                }
            }
            ?>
            <table>
                <tr>
                    <!--<td>Name</td>
                    <td>Address</td>
                    <td>Town</td>
                    <td>State</td>
                    -->
                    <td>User ID</td>
                    <td>User Name</td>
                    <td>Email</td>
                    <td>Role</td>
                    <td>Edit</td>
                    <td>Del</td>
                </tr>
                <?php
                $query = "SELECT * FROM tlogin";
                $result = mysql_query($query) or die(mysql_error());
                while ($newArray = mysql_fetch_array($result)) {
                    $user_id = $newArray['user_id'];
                    $user_name = $newArray['user_name'];
                    $email = $newArray['email'];
                    $password = $newArray['password'];
                    $date_accessed = $newArray['date_accessed'];
                    $role = $newArray['role'];


                    /*
                                      //  $userId = $newArray['contact_id'];
                                        if (!$userId) {
                                            $userId = '';
                                        }
                                        $contactName = '';
                                        $userName = '';

                                        if ($contactId) {
                                            $sql = "select name FROM tcontact WHERE contact_id = $contactId";
                                            $contactName = getQueryDefaultBySingleRow($sql);
                                        }
                                        if ($userId) {
                                            $sql = "select user_name,email FROM tlogin  WHERE user_id= $userId";
                                            $row = GetSingleRow($sql);
                                            if ($row) {
                                                $userName = $row['user_name'];
                                                if (!$userName) {
                                                    $userName = $row['email'];
                                                }
                                            }
                                        } */
                    ?>
                    <tr>
                        <td><?php echo $user_id; ?></td>
                        <td><?php echo $user_name; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $role; ?></td>
                        <td><a href='edituser.php?id=<?php echo $user_id; ?>'>Edit</a></td>
                        <td><a href='userslist.php?delid=<?php echo $user_id; ?>'>Del</a></td>
                    </tr>
<?php

//echo "<tr><td>$Name</td><td>$Address</td><td>$Town</td><td>$State</td><td>$post_code</td><td>$Phone</td><td>$MobilePhone</td><td>$Email</td><td>$user_id</td></tr>";

                    ;
                }
                ?>
            </table>

        </div>
    </div>
</div><!--/grid-->

<?php
include(dirname(__FILE__) . '/footer.php');
