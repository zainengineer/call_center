<?php
$GLOBALS['ZDBHost'] = "localhost";
$GLOBALS['ZDBUser'] = "root";
$GLOBALS['ZDBPassword'] = "";
$GLOBALS['ZDBSelect'] = "contactcentre";
$HostName = $_SERVER["HTTP_HOST"];

$db_connection = mysql_connect($GLOBALS['ZDBHost'], $GLOBALS['ZDBUser'], $GLOBALS['ZDBPassword']) or trigger_error("Unable To connect using $GLOBALS[ZDBHost]", E_USER_ERROR);
mysql_select_db($GLOBALS['ZDBSelect'], $db_connection) or trigger_error("Unable To Select DB $GLOBALS[ZDBSelect]", E_USER_ERROR);

$GLOBALS['db_connection'] = $db_connection;

?>