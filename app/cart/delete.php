<?php
include '/var/www/html/Grocery/database/connection.php';
if(isset($_GET['cart_id']))
{
    $cart_id = $_GET['cart_id'];
    $sql = "delete from cart where id=$cart_id";
    $result = mysqli_query($con, $sql);
    if($result)
    {
     header('location: /Grocery/html/add to cart/addtocart.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}
?> 