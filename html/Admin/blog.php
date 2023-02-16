<?php
include('D:/xampp/htdocs/Grocery/database/connection.php');
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
    include "D:/xampp/htdocs/Grocery/app/master/nav.php";
    
    ?>
   
    <img src="image/image/logo.png" alt="">
    </div>
    <br>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">image</th>
                <th scope="col">date</th>
                <th scope="col">description</th>
                <th scope="col">operations</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'D:/xampp/htdocs/Grocery/app/Blogs/display.php';
            ?>
          
        </tbody>
    </table>
    <script src="/Final_Project/admin/script.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>

</html>