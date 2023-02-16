<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
</head>
<body class="bg-light">
    <?php
    include "D:/xampp/htdocs/Grocery/app/master/nav.php";
    ?>
    <?php
    include 'D:/xampp/htdocs/Grocery/app/Blogs/insert.php';
    ?>
    <br>
    <div class="container mt-3">
        <h1 class="text-center">Insert Blogs</h1>
        <!--Form-->
        <form action="/Grocery/app/Blogs/insert.php" method="post" enctype="multipart/form-data" id="image">
            <!--Image-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="image" class="form-label">Blog Image</label>
                <input type="file" name="image" id="image" class="form-control" autocomplete="off" required>
            </div>
            <!--Discount-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="cat_discount" class="form-label">date</label>
                <input type="date" name="date" id="date" class="form-control" autocomplete="off" required>
            </div>
            
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="cat_discount" class="form-label">Description</label>
                <input type="textarea" name="description" id="description" class="form-control" autocomplete="off" required>
            </div>
            <!--Submit-->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_blog" class="btn btn-info mb-3 px-3" value="Insert Categories">
            </div>
        </form>
    </div>
    <script src="Grocery/html/Admin/script.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>
</html>