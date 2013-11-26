<?php
require_once(dirname(__FILE__) . '/zincludethis.php');
function forceUserLogin($role=false)
{
    if (!session_id()){
        session_start();
    }
    if (empty($_SESSION['user_id'])){
        header ('Location: login.php');
        exit;
    }
	if ($role && isset($_SESSION['user_role']) && $_SESSION['user_role']!=$role ){
		header ('Location: login.php');
        exit;
	}
	
}