<?php
require_once (dirname(__FILE__) . '/lib/common.php');
//forceUserLogin();
include  (dirname(__FILE__) . '/header.php');
?>
<div class="layout-grid">
<div id="jumps" class="layout-cell layout-1">
<div>
<img src="images/7087549.jpg" alt="Feedback">
<h2>Feedback</h2>
<p>Please fill out all fields on the form to send us feedback about this website.</p>
<form action="feedbacksend.php" method="post">
Name:
<input name="name" type="text" size="50" maxlength="50">
<br />
E-mail:
<input name="email" type="text" size="50" maxlength="50">
<br />
Comments:
<textarea name="message" cols="32" rows="15"></textarea>
<br />
<input name="submit" type="submit" value="Send Feedback">
<br />
<input name="reset" type="reset" value="Reset">
 </form>
</div>
</div>
</div><!--/grid-->
<?php
include  (dirname(__FILE__)  . '/footer.php');
?>

