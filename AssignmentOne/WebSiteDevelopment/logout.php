<?php
include('scripts/userfunctions.php');
if(!session_id())
{
session_start();
}
session_destroy();
header('Location: index.php');
exit;