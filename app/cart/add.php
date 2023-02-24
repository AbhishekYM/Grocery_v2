<?php 
session_start();
include '/var/www/html/Grocery/database/connection.php';

$productId = $_POST['productId'];
$userId = $_SESSION['user_id'];
$quantity = $_POST['quantity'];

 
if (isset($_POST['addCart'])) {
    $insert_feature = "insert into cart(user_id,product_id,quantity) values($userId,$productId,$quantity)";
    $result_query = mysqli_query($con, $insert_feature);
    if ($result_query) {
        header("location: /Grocery/#products");
    }
}
?>

