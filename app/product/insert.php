<?php
include 'D:\xampp\htdocs\Grocery\database\connection.php';
?>

<?php
if(isset($_POST['insert_product'])){
    $code = $_POST['code'];
    $product_category = $_POST['product_category'];
    $product_brand = $_POST['product_brand'];
    $product_title = $_POST['product_title'];
    $product_price = $_POST['product_price'];
    $description = $_POST['description'];
    $product_image = $_FILES['product_image']['name'];
    $temp_image = $_FILES['product_image']['tmp_name'];
    $quantity = $_POST['quantity'];
    $status = 'true';

    if($code=='' or $product_category=='' or $product_brand=='' or $product_title=='' or $product_price=='' or
    $description=='' or $product_image=='' or $quantity=='' or $status=='' )
    {
        echo "<script>alert('Please fill all the avalaible fields'); </script>";
        exit();
    }else{
        move_uploaded_file($temp_image, "D:/xampp/htdocs/Grocery/storage/image/$product_image");
    }

    $insert_product = "insert into product(code,category,brand,title,price,description,featured_image,qty,status) values('$code','$product_category','$product_brand',' $product_title','$product_price','$description','$product_image','$quantity','$status')";
    $result_query= mysqli_query($con,$insert_product);
        if ($result_query) {
             echo "<script> alert ('Product inserted succesfully')</script>)";
        }
}
?>