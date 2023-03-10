<?php
include '/var/www/html/Grocery/Database/Connection.php';
session_start();
session_destroy();
header("Location:/Grocery/index.php");
exit();
?>