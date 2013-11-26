<?php
if (!session_id()){
    session_start();
}

?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Contact Centre Login</title>
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

	<?php
	if (empty($_SESSION['user_id']))
		{
		echo '<li><a href="index.php">Home</a></li>';
		echo '<li><a href="accounts.php">Login/Create</a></li>';
		}
	else
		{
		$sessionrole = $_SESSION['user_role'] ;
		if ($sessionrole == "Admin")	
			{
			echo '<li><a href="userslist.php">User Accounts</a></li>' . "\n\r";
			echo '<li><a href="logout.php">Logout</a></li>';
			}
		else
			echo '<li><a href="index.php">Home</a></li>
			<li><a href="logout.php">Logout</a></li>';
		}
	?>

<li><a href="contacts.php">Contacts</a></li>
<li><a href="events.php">Events</a></li>

</ul>
</nav>