<?php
require_once(dirname(__FILE__) . '/zincludethis.php');
function forceUserLogin()
{
    if (!session_id()){
        session_start();
    }
    if (empty($_SESSION['user_id'])){
        header ('Location: login.php');
        exit;
    }
}