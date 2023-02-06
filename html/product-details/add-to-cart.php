<?php 
include 'D:\xampp\htdocs\Grocery\database\connection.php';
$productId = $_POST['productId'];
$userId = $_POST['userId'];
$quantity = $_POST['quantity'];
$details = $_POST['details'];
$added = $_POST['added'];

//echo json_encode(array("abc"=>'AJAX success'));

// add product to cart 


$insert_feature = "insert into cart(user_id,product_id,quantity,details,added) values($userId,$productId,$quantity,'$details','$added')";
$result_query = mysqli_query($con, $insert_feature);
echo json_encode($result_query);
?>

