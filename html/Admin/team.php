<?php
include('/var/www/html/Grocery/database/connection.php');
// error_reporting(0);
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
    <title>Admin</title>
</head>
<body>

    <?php
    include "/var/www/html/Grocery/app/master/nav.php";
    
    ?>
    <img src="image/image/logo.png" alt="">
    </div>
    <br>
    <br><br><br>
    <center><h1 style="color:#2697FF;">Admin</h1></center>
    <table class="table">
    <a href="/Grocery/html/Admin/signup.php" class="btn btn-primary btn-xs" style="margin-left: 1509px;">  
    <i class="fa fa-plus-circle fw-fa"></i> Add Admin</a>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">FULL_NAME</th>
                <th scope="col">USERNAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">PASSWORD</th>
                <th scope="col">TYPE</th>
                <th scope="col">MOBILE</th>
                <th scope="col">OPERATIONS</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '/var/www/html/Grocery/app/Add Admin/display.php';
            ?>
          
        </tbody>
    </table>
    <script src="/Final_Project/admin/script.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>

</html>