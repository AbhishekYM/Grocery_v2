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
    <title>Update Feature</title>
</head>
<body class="bg-light">
    <?php
     include "/var/www/html/Grocery/App/Master/Nav.php";
    ?>
    <?php
    include '/var/www/html/Grocery/App/Features/Update.php';
    ?>
    <br>
    <br>
    <br>
    <div class="container mt-3">
        <h1 class="text-center">Update Features</h1>
        <!--Form-->
        <form action="/Grocery/App/Features/Update.php" method="post" enctype="multipart/form-data" id="image">
        <input type="hidden" name="updateId" value="<?php $feature -> $id ;?>">
            <div class="form-outline mb-4 w-50 m-auto">
                <!--Update - Category-->
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter name"
                value="<?php echo $name;?>">
            </div>
            <!--Image-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="cat_image" class="form-label">Feature Image</label>
                <input type="file" name="image" id="image" class="form-control"  value="">
                <img src='/Grocery/Storage/image/<?php echo $row['image'];?>' </div style="
    width: 92px;
    margin-left: 656px;
    margin-top: -39px;
">
            </div>
            <!--Description-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="cat_discount" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control" autocomplete="off" value="<?php echo $description;?>">
            </div>
            <!--Submit-->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="submit" class="btn btn-info mb-3 px-3" value="Update Feature">
            </div>
        </form>
    </div>
    <script src="Grocery/html/Admin/script.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>
</html>