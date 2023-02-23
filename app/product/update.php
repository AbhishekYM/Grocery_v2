<?php
include('/var/www/html/Grocery/database/connection.php');

$id = $_GET['updateid'];

$sql = "Select * from product where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$code = $row['code'];
$product_category = $row['category'];
$product_brand = $row['brand'];
$product_title = $row['title'];
$product_price = $row['price'];
$description = $row['description'];
$img_name = $row['featured_image'];
$quantity = $row['qty'];
$status = $row['status'];

if (isset($_POST['submit'])) {
   
    $code = $_POST['code'];
    $product_category = $_POST['product_category'];
    $product_brand = $_POST['product_brand'];
    $product_title = $_POST['product_title'];
    $product_price = $_POST['product_price'];
    $description = $_POST['description'];
    $product_image = $_POST['product_image'];
    $img_loc = $_FILES['product_image']['tmp_name'];
    $img_name = $_FILES['product_image']['name'];
    $img_des = '/Grocery/storage/image//'.$product_image;
    // move_uploaded_file($img_loc,'image/'.$img_name);
     move_uploaded_file($img_loc,'/Grocery/storage/image'.$img_name);
    //$movefile = move_uploaded_file($img_loc,$img_des);
    $quantity = $_POST['quantity'];
    $status = 'true';
    $sql = "update product set id=$id ,code='$code',category='$product_category',brand='$product_brand',
    title='$product_title',price='$product_price',description='$description',featured_image='$img_name',
     qty= '$quantity', status='$status' where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        
        header('location:/Grocery/html/Admin/product.php');
    } else {
        die(mysqli_error($con));
    }
}
?>