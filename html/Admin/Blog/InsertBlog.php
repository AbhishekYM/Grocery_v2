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
    <title>Insert Blogs</title>
</head>
<body class="bg-light">
    <?php
    include "/var/www/html/Grocery/App/Master/Nav.php";

    include '/var/www/html/Grocery/App/Blogs/Insert.php';
    ?>
    <br>
    <div class="container mt-3">
        <br><br>
        <h1 class="text-center" style="color:#2697FF;">Insert Blogs</h1>
        <!--Form-->
        <form action="/Grocery/App/Blogs/Insert.php" method="post" enctype="multipart/form-data" id="Admin">
            <!--Image-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="image" class="form-label">Blog Image</label>
                <input type="file" name="image" id="image" class="form-control" autocomplete="off" required>
            </div>
            <!--Date-->
            <!-- <div class="form-outline mb-4 w-50 m-auto">
                <label for="cat_discount" class="form-label">date</label>
                <input type="date" name="date" id="date" class="form-control" autocomplete="off" required>
            </div> -->
            
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="cat_discount" class="form-label">Description</label>
                <input type="textarea" name="description" id="description" class="form-control" autocomplete="off" required>
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="cat_discount" class="form-label">title</label>
                <input type="text" name="title" id="title" class="form-control" autocomplete="off" required>
            </div>
            <!--Submit-->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_blog" class="btn btn-info mb-3 px-3" value="Insert Blogs">
            </div>
        </form>
    </div>
    <script src="Grocery/html/Admin/script.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>
</html>