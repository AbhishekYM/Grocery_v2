<?php
include('../include/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
    <div class="activity-data">
        <nav>
            <div class="logo-name">
                <div class="logo-image">
                    <!--<img src="images/logo.png" alt="">-->
                </div>

                <span class="logo_name">Grocery</span>
            </div>

            <div class="menu-items">
                <ul class="nav-links">
                    <li><a href="admin.php">
                            <i class="uil uil-estate"></i>
                            <span class="link-name">Dashboard</span>
                        </a></li>
                    <li><a href="insert_product.php">
                            <i class="uil uil-files-landscapes"></i>
                            <span class="link-name">Products</span>
                        </a></li>
                    <li><a href="#">
                            <i class="uil uil-chart"></i>
                            <span class="link-name">Category</span>
                        </a></li>
                    <li><a href="#">
                            <i class="uil uil-thumbs-up"></i>
                            <span class="link-name">Brands</span>
                        </a></li>
                    <li><a href="#">
                            <i class="uil uil-comments"></i>
                            <span class="link-name">Comment</span>
                        </a></li>
                    <li><a href="#">
                            <i class="uil uil-share"></i>
                            <span class="link-name">Share</span>
                        </a></li>
                </ul>
                <ul class="logout-mode">
                    <li><a href="#">
                            <i class="uil uil-signout"></i>
                            <span class="link-name">Logout</span>
                        </a></li>
                    <li class="mode">
                        <a href="#">
                            <i class="uil uil-moon"></i>
                            <span class="link-name">Dark Mode</span>
                        </a>
                        <div class="mode-toggle">
                            <span class="switch"></span>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <section class="dashboard">
            <div class="top">
                <i class="uil uil-bars sidebar-toggle"></i>

                <div class="search-box">
                    <i class="uil uil-search"></i>
                    <input type="text" placeholder="Search here...">
                </div>

                <img src="image/image/logo.png" alt="">
            </div>
            <br>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">title</th>
                        <th scope="col">image</th>
                        <th scope="col">discount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from category";
                    $result = mysqli_query($con, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td> <?php  echo $row['id'] ?></td>
                                <td> <?php  echo $row['title'] ?></td>
                                <td> <?php  echo $row['image'] ?></td>
                                <td> <?php  echo $row['discount'] ?></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
            <script src="/Final_Project/admin/script.js"></script>
            <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>

</html>