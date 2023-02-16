<?php
include('D:/xampp/htdocs/Grocery/database/connection.php');
session_start();
if (!isset($_SESSION['name'])) {
    header('location: /Grocery/index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard Panel</title>
</head>
<body>
    <?php
    include "D:/xampp/htdocs/Grocery/app/master/nav.php";
    ?>
    <div class="dash-content">
        <div class="overview">
            <div class="title" style="margin: 8px;">
                <h3>hi, <span>
                        <?php echo $_SESSION['name'] ?>
                    </span></h3>
                &nbsp;
                <h3>welcome </h3>
                </span> </h1>
            </div>
            <div class="title" style="margin:8px;">
                <span class="text">Dashboard</span>
            </div>
            <div class="boxes">
                <div class="box box1">
                    <?php
                    $sql = "SELECT COUNT(id) AS total from product;";
                    $execute = mysqli_query($con, $sql);
                    $rowsselectCount = mysqli_fetch_array($execute);
                    ?>
                    <a href="product.php" class="text">Product</a>
                    <span class="number">
                        <?php echo $rowsselectCount['total']; ?>
                    </span>
                </div>
                <div class="box box2">
                    <?php
                    $sql = "SELECT COUNT(type) AS total from user where type='user';";
                    $execute = mysqli_query($con, $sql);
                    $rowsselectCount = mysqli_fetch_array($execute);
                    ?>
                    <a href="user.php" class="text">Customer</a>
                    <span class="number">
                        <?php echo $rowsselectCount['total']; ?>
                    </span>
                    <!-- <span class="text">customers</span>
                    <span class="number">20,120</span> -->
                </div>
                <div class="box box3">
                    <a class="text">Total orders</a>
                    <span class="number">1000
                    </span>
                </div>
            </div>
            <br>
            <div class="boxes">
                <div class="box box3">
                    <?php
                    $sql = "SELECT COUNT(id) AS total from category;";
                    $execute = mysqli_query($con, $sql);
                    $rowsselectCount = mysqli_fetch_array($execute);
                    ?>
                    <a href="categories.php" class="text">Categories</a>
                    <span class="number">
                        <?php echo $rowsselectCount['total']; ?>
                    </span>
                </div>
                <div class="box box3">
                    <?php
                    $sql = "SELECT COUNT(id) AS total from feature;";
                    $execute = mysqli_query($con, $sql);
                    $rowsselectCount = mysqli_fetch_array($execute);
                    ?>
                    <a href="feature.php" class="text">Features</a>
                    <span class="number">
                        <?php echo $rowsselectCount['total']; ?>
                    </span>
                </div>
                <div class="box box3">
                    <?php
                    $sql = "SELECT COUNT(id) AS total from category;";
                    $execute = mysqli_query($con, $sql);
                    $rowsselectCount = mysqli_fetch_array($execute);
                    ?>
                    <a class="text" href="review.php">Reviews</a>
                    <span class="number">
                        <?php echo $rowsselectCount['total']; ?>
                    </span>
                </div>
                &nbsp;
            </div>
            <br>
            <div class="boxes">
                <div class="box box3">
                    <?php
                    $sql = "SELECT COUNT(id) AS total from blog;";
                    $execute = mysqli_query($con, $sql);
                    $rowsselectCount = mysqli_fetch_array($execute);
                    ?>
                    <a href="blog.php" class="text">Blogs</a>
                    <span class="number">
                        <?php echo $rowsselectCount['total']; ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="activity">
            <div class="title">
                <span class="text">Recent Activity</span>
            </div>
            <div class="activity-data">
                <div class="data names">
                    <span class="data-title">Name</span>
                    <span class="data-list">Prem Shahi</span>
                    <span class="data-list">Deepa Chand</span>
                    <span class="data-list">Manisha Chand</span>
                    <span class="data-list">Pratima Shahi</span>
                    <span class="data-list">Man Shahi</span>
                    <span class="data-list">Ganesh Chand</span>
                    <span class="data-list">Bikash Chand</span>
                </div>
                <div class="data email">
                    <span class="data-title">Email</span>
                    <span class="data-list">premshahi@gmail.com</span>
                    <span class="data-list">deepachand@gmail.com</span>
                    <span class="data-list">prakashhai@gmail.com</span>
                    <span class="data-list">manishachand@gmail.com</span>
                    <span class="data-list">pratimashhai@gmail.com</span>
                    <span class="data-list">manshahi@gmail.com</span>
                    <span class="data-list">ganeshchand@gmail.com</span>
                </div>
                <div class="data joined">
                    <span class="data-title">Joined</span>
                    <span class="data-list">2022-02-12</span>
                    <span class="data-list">2022-02-12</span>
                    <span class="data-list">2022-02-13</span>
                    <span class="data-list">2022-02-13</span>
                    <span class="data-list">2022-02-14</span>
                    <span class="data-list">2022-02-14</span>
                    <span class="data-list">2022-02-15</span>
                </div>
                <div class="data type">
                    <span class="data-title">Type</span>
                    <span class="data-list">Admin</span>
                    <span class="data-list">Admin</span>
                    <span class="data-list">Customer</span>
                    <span class="data-list">Customer</span>
                    <span class="data-list">Customer</span>
                    <span class="data-list">Customer</span>
                    <span class="data-list">Customer</span>
                </div>
                <div class="data status">
                    <span class="data-title">Status</span>
                    <span class="data-list">Active</span>
                    <span class="data-list">Active</span>
                    <span class="data-list">Active</span>
                    <span class="data-list">Active</span>
                    <span class="data-list">Active</span>
                    <span class="data-list">Active</span>
                    <span class="data-list">Active</span>
                </div>
            </div>
        </div>
    </div>
    </section>
    <div class="container">
        <?php
        if (isset($_GET['insert_category']))
            include('insert_categories.php')
                ?>
        </div>
        </form>
        <script src="/Grocery/html/Admin/script.js"></script>
    </body>
    </html>