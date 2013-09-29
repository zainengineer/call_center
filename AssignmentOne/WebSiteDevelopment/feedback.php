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
   return str_replace($bad,"",$string);
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
<!DOCTYPE HTML>
<html>
 <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Contact Centre Feedback</title>
<link rel="stylesheet" href="style.css" type="text/css" title="contact-centre" />
<script src="//html5shim.googlecode.com/svn/trunk/html5.js">
</script>
</head>
<body class="home">
<h1>Contact Centre</h1>
<div id="jump">
<a href="#jumps">jump to content</a>
</div>
<nav>
<ul>
<li><a href="index.html">Home</a></li>
<li><a href="accounts.html">Accounts</a></li>
<li><a href="contacts.html">Contacts</a></li>
<li><a href="events.html">Events</a></li>
</ul>
</nav>
<div class="layout-grid">
<div id="jumps" class="layout-cell layout-1">
<div>
<img src="images/7087549.jpg" alt="Feedback">
<h2>Feedback</h2>
<p>Thank you for sending me comments about this website.  Stop by any time to visit my web page.</p>
<p><a href="index.html">Return to Contact Centre</a></p>
</a></p>
</div>
</div>
</div><!--/grid-->
<nav>
<ul>
<li><a href="copyright.html" title="Copyright">Copyright</a></li>
<li><a href="disclaimer.html" title="Disclaimer">Disclaimer</a></li>
<li><a href="privacy.html" title="Privacy">Privacy</a></li>
<li><a href="feedback.html" title="Feedback">Feedback</a></li>
</ul>
</nav>
</body>
</html>