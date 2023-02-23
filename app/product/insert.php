<?php
include '/var/www/html/Grocery/database/connection.php';

if (isset($_POST['insert_product'])) {
    $code = $_POST['code'];
    $product_category = $_POST['product_category'];
    $product_title = $_POST['product_title'];
    $getCatagoryTitle = "SELECT id FROM  category WHERE title = '$product_category'";
    $result = mysqli_query($con, $getCatagoryTitle);
    while ($row = mysqli_fetch_assoc($result)) {
        $catagory_id = $row['id'];
    }
    $product_price = $_POST['product_price'];
    $description = $_POST['description'];
    $product_image = $_FILES['product_image'];
    $img_loc = $_FILES['product_image']['tmp_name'];
    $img_name = $_FILES['product_image']['name'];
    $img_des = '/Grocery/storage/image/'.$img_name;
     move_uploaded_file($img_loc,'/Grocery/app/product/image'.$img_name);
    $quantity = $_POST['quantity'];
    $status = 'true';
    $insert_product = "INSERT INTO product(code,category,title,price,description,featured_image,qty,status,category_id) values('$code','$product_category',
    ' $product_title','$product_price','$description','$img_name','$quantity','$status','$catagory_id')";
    $result_query = mysqli_query($con, $insert_product);
    if ($result_query) {
        //  echo "<script> alert ('Product inserted succesfully')</script>)";
         header("location:/Grocery/html/Admin/product.php");
    }
}
?>