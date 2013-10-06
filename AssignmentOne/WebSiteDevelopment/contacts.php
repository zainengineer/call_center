<?php
require_once (dirname(__FILE__) . '/lib/common.php');
forceUserLogin();
include  (dirname(__FILE__) . '/header.php');
?>
<div class="layout-grid">
    <div id="jumps" class="layout-cell layout-1">
        <div>
            <img src="images/contact.png" alt="Contacts"/>

            <h2>Contacts</h2>
            <a href="addcontact.html">Add Contact</a>
            <a href="editcontact.html">Edit Contact</a>
            <a href="deletecontact.html">Delete Contact</a>
            <a href="updatecontact.html">Update Contact</a>
        </div>
    </div>
</div><!--/grid-->
<?php
include  (dirname(__FILE__)  . '/footer.php');
?>