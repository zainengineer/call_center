<?php
  if(!ini_get('session.auto_start'))
  {
      if (!session_id()){
          session_start();
      }
  }
  function get_database()
 {
   return new PDO('mysql:host:=localhost;
   dbname=contactcentre', 'contactcentre_reguser', 'regpassword');
  }
  function verify_login()
 {
   $user = load_profile($username);
  if(!user)
 {
   return false;
 }
   $hash = sha1($user['salt'] . $password);
  if($user['password'] === $hash)
 {
   return true;
 }
   return false;
 }
  function require_login()
 {
  if(isset($_SESSION['LOGGED_IN']))
{
    return true;
 }
 exit;
 }
  FUNCTION REQUIRE_ADMIN()
 {
  if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] && strtolower($_SESSION['username']) == 'startrekcafe@gmail.com')
 {
   return true;
 }
 echo '<html>
 <body>
 <h1>Access Denied</h1>
 <p>You must be logged in as a user to view this page.  <a href="index.html">Login</a> on the home page.</p>
 </body>
 </html>';
 exit;
 }
  function load_profile($username)
 {
   $db = get_database();
   $sql = "SELECT * FROM users WHERE username = :username";
   $query = $db->prepare($sql);
   $query->bindValue(':username', $username);
   $query->execute();
   $user = $query->fetch();
   return $user;
 }
  function list_users($username)
 {
   $db = get_database();
   $sql = "SELECT username, name FROM users ORDER BY username ASC";
   $query = $db->prepare($sql);
   $query->execute();
   $users = $query->fetchAll();
   return $users;
 }
  function update_user($old_username, $new_username, $name, $new_password)
 {
   $db = get_database();
   $sql = "UPDATE users SET  username = :newusername, name = :name, WHERE username = :oldusername";
   $query = $db->prepare($sql);
   $query->bindValue(':oldusername', $old_username);
   $query->bindValue(':newusername', $new_username);
   $query->bindValue(':name', $name);
    try
 {
   $query->execute();
 }
    catch(PDOException $e)
 {
   return false;
 }
  if(!$new_password)
 {
   return true;
 }
   $salt = sha1(microtime());
   $hash = sha1($salt.$new_password);
   $sql = "UPDATE users SET salt = :salt, password = :password WHERE username = :username";
   $query = $db-prepare($sql);
   $query->bindValue(':username', $new_username);
   $query->bindValue(':salt', $salt);
   $query->bindValue(':password', $hash);
   $query->execute();
   return true;
 }
  function create_user($new_username, $name, $new_password)
 {
   $db = get_database();
   $sql = "INSERT INTO users(username, name, password, salt) VALUES(:username, :name, :password, :salt)";
   $query = $db->prepare($sql);
   $query->bindValue(':username', $new_username);
   $query->bindValue(':name', $name);
   $salt = sha1(microtime());
   $hash = sha1($salt.$new_password);
   $query->bindValue(':password', $hash);
   $query->bindValue(':salt', $salt);
    try
 {
   $query->execute();
 }
    catch(PDOException $e)
 {
   return false;
 }
   return true;
 }
?>