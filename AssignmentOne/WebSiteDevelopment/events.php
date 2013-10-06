<?php
require_once (dirname(__FILE__) . '/lib/common.php');
forceUserLogin();
include  (dirname(__FILE__) . '/header.php');
?>
<div class="layout-grid">
<div id="jumps" class="layout-cell layout-1">
<div>
<img src="images/contact.png" alt="Events" />
<h2>Events</h2>
<a href="addevent.html">Add Event</a>
<a href="editevent.html">Edit Event</a>
<a href="deleteevent.html">Delete Event</a>
<a href="updateevent.html">Update Event</a>
</div>
</div>
</div><!--/grid-->

<?php
include  (dirname(__FILE__)  . '/footer.php');
?>
