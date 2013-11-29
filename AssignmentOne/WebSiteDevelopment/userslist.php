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
            <!--<a href="addevent.php">Add Event</a> -->

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
<td><?php echo $user_id; ?></td>
<td><?php echo $user_name; ?></td>
<td><?php echo $email; ?></td>
<td><?php echo $role; ?></td>td><a href='edituser.php?id=<?php echo $user_id; ?>'>Edit</a></td>
<td><a href='userslist.php?delid=<?php echo $user_id; ?> '>Delete</a></td>
</tr>
<?php
}
?>
</table>
</div>
</div>
</div><!--/grid-->
<?php
include(dirname(__FILE__) . '/footer.php');
?>