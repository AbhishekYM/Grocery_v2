<?php
include 'D:\xampp\htdocs\Grocery\database\connection.php';
session_start();
session_destroy();
header("Location:/Grocery/index.php");
exit();
?>