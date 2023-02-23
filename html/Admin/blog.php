<?php
include('/var/www/html/Grocery/database/connection.php');
?>
<?php
session_start();
if (!isset($_SESSION['name'])) {
    header('location:/Grocery/html/Admin/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "/var/www/html/Grocery/app/master/nav.php";
    
    ?>
   
    <img src="image/image/logo.png" alt="">
    </div>
    <br>
    <br>
    <center><h1 style="color:green;">Blogs</h1></center>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">IMAGE</th>
                <th scope="col">DATE</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">TITLE</th>
                <th scope="col">OPERATIONS</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '/var/www/html/Grocery/app/Blogs/display.php';
            ?>
          
        </tbody>
    </table>
   
    <!-- <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script> -->
</body>

</html>