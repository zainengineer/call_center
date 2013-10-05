<?php
include('scripts/userfunctions.php');
include('scripts/validatelogin.php');
include  (dirname(__FILE__)  . '/header.php');
?>
<div class="layout-grid">
<div id="jumps" class="layout-cell layout-1">
<div>
<img src="images/user-login-icon.png" alt="Login">
<h2> Contact Centre Login</h2>

 <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
 <p>
 <label for="username_email">User:</label>
 <input type="text" name="username_email" id="username_email" autofocus value="<?php echo $username_email; ?>">
 <span class="error" id="username_error">
 <?php echo $msg_username; // These variables need to match the error variables that are set in the validation script ?></span>
 </p>

 <p>
 <label for="password">Password:</label>
 <input type="password" name="password" id="password" value="<?php echo $password; ?>">
 <span class="error" id="password_error">
 <?php echo $msg_password; ?></span>
 </p>
 <p>

 <input type="submit" name="submit" value="Login">
 </form>

</div>
</div>
</div><!--/grid-->
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
