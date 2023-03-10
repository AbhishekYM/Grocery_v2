<?php
// include '/var/www/html/Grocery/Database/Connection.php';
include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';
session_start();
session_destroy();
header("Location:/Grocery/html/Admin/Login/Login.php");
exit();
?>