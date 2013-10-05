<?php
include('scripts/userfunctions.php');
?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Contact Centre Login</title>
    <link rel="stylesheet" href="style.css" type="text/css" title="contact-centre"/>
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
        <li><a href="login.html">Login</a></li>
        <li><a href="contacts.html">Contacts</a></li>
        <li><a href="events.html">Events</a></li>
    </ul>
</nav>
<div class="layout-grid">
    <div id="jumps" class="layout-cell layout-1">
        <div>
            <img src="images/user-login-icon.png" alt="Login">

            <h2> Contact Centre Login</h2>
            <?php
            include('scripts/validatecreate.php');

            ?>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <p>
                    <label for="username">User Name:</label>
                    <input type="text" name="username" id="username" autofocus value="<?php echo $username; ?>">
 <span class="error" id="username_error">
 <?php echo $msg_username; // These variables need to match the error variables that are set in the validation script ?></span>
                </p>

                <p>
                    <label for="email">E-mail:</label>
                    <input type="text" name="email" id="email" value="<?php echo $email; ?>">
 <span class="error" id="email_error">
 <?php echo $msg_email; ?></span>
                </p>

                <p>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" value="<?php echo $password; ?>">
                    <span class="error" id="password_error"> <?php echo $msg_password; ?></span>
                </p>

                <p>
                    <label for="confirm_password">Confirm Password:</label>
                    <input type="password" name="confirm_password" id="confirm_password"
                           value="<?php echo $confirm_password; ?>"/>
                    <span class="error" id="confirm_password_error"> <?php echo $msg_password_confirm; ?></span>
                </p>

                <p>

                    <input type="submit" name="submit" value="Sign up">
            </form>

        </div>
    </div>
</div>
<!--/grid-->
<nav>
    <ul>
        <li><a href="copyright.html">Copyright</a></li>
        <li><a href="disclaimer.html">Disclaimer</a></li>
        <li><a href="privacy.html">Privacy</a></li>
        <li><a href="feedback.html">Feedback</a></li>
    </ul>
</nav>
<aside>&copy; Contact Centre Pty Ltd. All Rights Reserved 2013</aside>
</body>
</html>
