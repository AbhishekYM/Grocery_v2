<?php
include '/var/www/html/Grocery/database/connection.php';
session_start();
session_destroy();
header("Location:/Grocery/index.php");
exit();
?>