<?php
include('D:/xampp/htdocs/Grocery/database/connection.php');
include ('D:/xampp/htdocs/Grocery/app/master/nav.php');
$id = $_GET['updateid'];
if (isset($_POST['insert_product'])) {
   
    $code = $_POST['code'];
    $product_category = $_POST['product_category'];
    $product_brand = $_POST['product_brand'];
    $product_title = $_POST['product_title'];
    $product_price = $_POST['product_price'];
    $description = $_POST['description'];
    $product_image = $_POST['product_image'];
    $quantity = $_POST['quantity'];
    $status = 'true';
    $sql = "update product set id=$id ,code='$code',category='$product_category',brand='$product_brand',
    title='$product_title',price='$product_price',description='$description',featured_image='$product_image',
     qty= '$quantity', status='$status'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:/Grocery/html/Admin/product.php');
    } else {
        die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
</head>

<body class="bg-light">
    <div class="container mt-3">

        <h1 class="text-center">Update Products</h1>
        <!--Form-->
        <form action="" method="post" enctype="multipart/form-data">

            <!--Product-Code-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_descrption" class="form-label">Product Code</label>
                <input type="text" name="code" id="code" class="form-control" placeholder="Enter product code"
                    autocomplete="off" >
            </div>
            <!--Product-Title-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product title</label>
                <input type="text" name="product_title" id="product_title" class="form-control"
                    placeholder="Enter product title" autocomplete="off" >
            </div>

            <!--Description-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_descrption" class="form-label">Product description</label>
                <input type="text" name="description" id="description" class="form-control"
                    placeholder="Enter product description" autocomplete="off" >
            </div>

            <!--Category-->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id="" class="form-select">
                    <option value="">Select a Category</option>
                    <!-- <option value="">Category1</option> -->
                    <?php
                    $select_query = "select * from category";
                    $result_query = mysqli_query($con, $select_query);
                    while ($row = mysqli_fetch_assoc($result_query)) {
                        $category_title = $row['title'];

                        $category_id = $row['id'];
                        echo "<option value=' '>$category_title</option>";
                    }
                    ?>

                </select>
            </div>
            <!--Brands-->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brand" id="" class="form-select">
                    <option value="">Select a brand</option>
                    <option value="">Brand1</option>
                    <option value="">Brand2</option>
                    <option value="">Brand3</option>
                </select>
            </div>
            <!--Image-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image" class="form-label">Product Image</label>
                <input type="file" name="product_image" id="product_image" class="form-control" autocomplete="off"
                >
            </div>
            <!--Price-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="product_price" id="product_price" class="form-control"
                    placeholder="Enter product price" autocomplete="off" >
            </div>
            <!--Quantity-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Quantity</label>
                <input type="text" name="quantity" id="quantity" class="form-control"
                    placeholder="Enter product quantity" autocomplete="off">
            </div>
            <!--Status-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Status</label>
                <input type="text" name="status" id="status" class="form-control" placeholder="Enter product quantity"
                    autocomplete="off">
            </div>
            <!--Button-->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Update Products">
            </div>

        </form>
    </div>
    <script src="D:\xampp\htdocs\Grocery\html\Admin\script.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>

</html>