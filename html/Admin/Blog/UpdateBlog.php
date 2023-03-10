<!DOCTYPE html>
<?php
include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';
include_once '/var/www/html/Grocery/App/Blogs/Update.php';

session_start();
if (!isset($_SESSION['name'])) {
    header('location:/Grocery/html/Admin/Login/Login.php');
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Products</title>
</head>

<body class="bg-light">
    <?php
    include "/var/www/html/Grocery/App/Master/Nav.php";
    // include '/var/www/html/Grocery/App/Blogs/Update.php';
    ?>
    <br><br>
    <div class="container mt-3">
        <h1 class="text-center">Update Blogs</h1>
        <!--Form-->
        <form action="/Grocery/App/Blogs/Update.php" method="post" enctype="multipart/form-data">
            <!--Image-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="image" class="form-label">Blog Image</label>
                <input type="hidden" name="updateId" value="<?php echo $blogUpdate->id ;?>">

                <input type="file" name="image" id="image" class="form-control" autocomplete="off"
                    value="<?php $img_name; ?>">
                <?php echo $blogUpdate->image; ?>
                <img src='/Grocery/Storage/image/<?php echo $blogUpdate->image; ?>'>
                <div style="width: 92px;margin-left: 656px;margin-top: -39px;">
                </div>
                <br><br>
                <div class="form-outline mb-100 w-500 m-auto">
                    <label for="cat_discount" class="form-label">Description</label>
                    <input type="textarea" name="description" id="description" class="form-control" autocomplete="off"
                        value="<?php echo $blogUpdate->description; ?>">
                </div>
                <!--Submit-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <input type="submit" name="submit" class="btn btn-info mb-3 px-3" value="Update Blogs">
                </div>
        </form>
    </div>
    <script src="Grocery/html/Admin/script.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>
</html>