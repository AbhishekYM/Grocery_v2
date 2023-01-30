<?php
include 'D:\xampp\htdocs\Grocery\database\connection.php';
session_start();
session_unset();
session_destroy();
header('location: login.php');
?>