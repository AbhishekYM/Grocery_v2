<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['name'])) {
    header('location:/Grocery/html/Admin/login.php');
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
</head>

<body class="bg-light">
    <?php
    include "/var/www/html/Grocery/App/Master/Nav.php";
    include '/var/www/html/Grocery/App/Category/Insert.php';
    ?>
    <br>
    <form action="/Grocery/App/Category/Insert.php" method="post" enctype="multipart/form-data" id="Admin">
        <div class="container mt-3">
            <br><br>
            <h1 class="text-center" style="color:#2697FF;">Insert Categories</h1>
            <!--Form-->

            <div class="form-outline mb-4 w-50 m-auto">
                <!--Insert - Category-->
                <input type="text" name="cat_title" id="cat_title" class="form-control" placeholder="Enter category"
                    autocomplete="off" required>
            </div>
            <!--Image-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="cat_image" class="form-label">Category Image</label>
                <input type="file" name="cat_image" id="cat_image" class="form-control" autocomplete="off" required>
            </div>
            <!--Discount-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="cat_discount" class="form-label">Discount</label>
                <input type="text" name="cat_discount" id="cat_discount" class="form-control" autocomplete="off"
                    required>
            </div>
            <!--Submit-->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_cart" class="btn btn-info mb-3 px-3" value="Insert Categories">
            </div>
    </form>
    </div>
    <script src="Grocery/html/Admin/script.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>

</html>