<?php
include '/var/www/html/Grocery/database/connection.php';
session_start();
if (isset($_POST['submit'])) {
    $userId = $_SESSION['user_id'];
    $name = $_POST['name'];
    print_r($name);
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $insert = "insert into address(user_id,name,address,city,state,zipcode) values($userId,'$name','$address','$city','$state','$zipcode')";
    $result_query = mysqli_query($con, $insert);
        if ($result_query) 
        {
        // echo "<script> alert ('Address inserted succesfully')</script>";
          header ("location:/Grocery/html/profile/address.php");
        }
}
?>