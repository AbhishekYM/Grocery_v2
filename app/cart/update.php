<?php
include('/var/www/html/Grocery/database/connection.php');
session_start();
if (isset($_POST['quantity'])) {
    $updateQuantity = "UPDATE cart SET quantity='$_POST[quantity]' WHERE user_id = '$_SESSION[user_id]' AND product_id= '$_POST[productId]'";
    $executeUpdate = mysqli_query($con,$updateQuantity);
    if ($executeUpdate) {
        header("location:/Grocery/html/add to cart/addtocart.php");
    }
}
?>