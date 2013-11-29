<?php
require_once(dirname(__FILE__) . '/lib/common.php');
include(dirname(__FILE__) . '/header.php');
?>
<?php
include('scripts/userfunctions.php');
if(isset($_POST['email']))
{    
$email_to = "startrekcafe@gmail.com";
$email_subject = "Contact Centre Feedback";
$name = $_POST['name']; // required
$email_from = $_POST['email']; // required
$message = $_POST['message']; // required
$email_message = "Form details below.\n\n";
function clean_string($string)
{
$bad = array("content-type","bcc:","to:","cc:","href");
return str_replace($bad,"", $string);
}
$email_message .= "Name: ".clean_string($name)."\n";
$email_message .= "Email: ".clean_string($email_from)."\n";
$email_message .= "Message: ".clean_string($message)."\n";
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
}
?>
<div class="layout-grid">
<div id="jumps" class="layout-cell layout-1">
<div>
<img src="images/7087549.jpg" alt="Feedback">
<h2>Feedback</h2>
<p>Thank you for sending me comments about this website.  Stop by any time to visit my web page.</p>
<p><a href="index.php">Return To Contact Centre</a></p>
</div>
</div>
</div><!--/grid-->
<?php
include(dirname(__FILE__) . '/footer.php');
?>