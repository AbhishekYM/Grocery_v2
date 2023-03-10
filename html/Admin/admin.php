<?php
// include('/var/www/html/Grocery/Database/Connection.php');
include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';
// Create a new instance of the DatabaseConnection class
$db = new DatabaseConnection();
// Get the mysqli connection object
$con = $db->getConnection();
 include "/var/www/html/Grocery/App/Master/Nav.php";
 error_reporting(0);
session_start();
if (!isset($_SESSION['name'])) {
    header('location:/Grocery/html/Admin/Login/Login.php');
}
?>  
<!DOCTYPE html>
==
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>


    <div class="home-content">
        <div class="overview-boxes">
            <div class="box">
                <div class="right-side">
                    <?php
                    $sql = "SELECT COUNT(id) AS total from product;";
                    $execute = mysqli_query($con, $sql);
                    $rowsselectCount = mysqli_fetch_array($execute);
                    ?>
                    <div class="box-topic"><a href="/Grocery/html/Admin/Product/Product.php" class="text" style="
                            text-decoration: auto;color:black;
                        ">Product</a></div>
                    <div class="number">
                        <?php echo $rowsselectCount['total']; ?>
                    </div>
                    <div class="indicator">
                        <i class='bx bx-up-arrow-alt'></i>
                        <span class="text">Up from yesterday</span>
                    </div>
                </div>
                <i class='bx bx-cart-alt cart'></i>
            </div>
            <div class="box">
                <div class="right-side">
                    <?php
                    $sql = "SELECT COUNT(type) AS total from user where type='user';";
                    $execute = mysqli_query($con, $sql);
                    $rowsselectCount = mysqli_fetch_array($execute);
                    ?>
                    <div class="box-topic"><a href="User.php" class="" style="
    text-decoration: auto;color:black;">Customer</a></div>
                    <div class="number"><?php echo $rowsselectCount['total']; ?></div>
                    <div class="indicator">
                        <i class='bx bx-up-arrow-alt'></i>
                        <span class="text">Up from yesterday</span>
                    </div>
                </div>
                <i class='bx bxs-cart-add cart two'></i>
            </div>

            <div class="box">
                <div class="right-side">
                    <div class="box-topic">Total Orders</div>
                    <div class="number">0</div>
                    <div class="indicator">
                        <i class='bx bx-up-arrow-alt'></i>
                        <span class="text">Up from yesterday</span>
                    </div>
                </div>
                <i class='bx bx-cart cart three'></i>
            </div>
            <div class="box">
                <div class="right-side">
                    <?php
                    $sql = "SELECT COUNT(id) AS total from category;";
                    $execute = mysqli_query($con, $sql);
                    $rowsselectCount = mysqli_fetch_array($execute);
                    ?>
                    <div class="box-topic"><a href="/Grocery/html/Admin/Category/Categories.php" class="text" style="
    text-decoration: auto;color:black;
">Categories</a></div>
                    <div class="number">
                        <?php echo $rowsselectCount['total']; ?>
                    </div>
                    <div class="indicator">
                        <i class='bx bx-down-arrow-alt down'></i>
                        <span class="text">Down From Today</span>
                    </div>
                </div>
                <i class='bx bxs-cart-download cart four'></i>
            </div>
            <div class="box">
                <div class="right-side">
                    <?php
                    $sql = "SELECT COUNT(id) AS total from feature;";
                    $execute = mysqli_query($con, $sql);
                    $rowsselectCount = mysqli_fetch_array($execute);
                    ?>
                    <div class="box-topic"><a href="/Grocery/html/Admin/Feature/Feature.php" class="text" style="
    text-decoration: auto;color:black;
">Features</a></div>
                    <div class="number">
                        <?php echo $rowsselectCount['total']; ?>
                    </div>
                    <div class="indicator">
                        <i class='bx bx-down-arrow-alt down'></i>
                        <span class="text">Down From Today</span>
                    </div>
                </div>
                <i class='bx bxs-cart-download cart four'></i>
            </div>
            <div class="box" >
                <div class="right-side">
                    <?php
                    $sql = "SELECT COUNT(id) AS total from review;";
                    $execute = mysqli_query($con, $sql);
                    $rowsselectCount = mysqli_fetch_array($execute);
                    ?>
                    <div class="box-topic"><a href="Review.php" class="text" style="
                        text-decoration: auto;color:black;
                    ">Reviews</a></div>
                    <div class="number">
                        <?php echo $rowsselectCount['total']; ?>
                    </div>
                    <div class="indicator">
                        <i class='bx bx-up-arrow-alt'></i>
                        <span class="text">Up from yesterday</span>
                    </div>
                </div>
                <i class='bx bx-cart cart three'></i>
            </div>
            <div class="box">
                <div class="left-side">
                    <?php
                    $sql = "SELECT COUNT(id) AS total from blog;";
                    $execute = mysqli_query($con, $sql);
                    $rowsselectCount = mysqli_fetch_array($execute);
                    ?>
                    <div class="box-topic"><a href="/Grocery/html/Admin/Blog/Blog.php" class="text" style="
                        text-decoration: auto; color:black;
                    ">Blogs</a></div>
                    <div class="number"><?php echo $rowsselectCount['total']; ?></div>
                    <div class="indicator">
                        <i class='bx bx-up-arrow-alt'></i>
                        <span class="text">Up from yesterday</span>
                    </div>
                </div>
                <i class='bx bxs-cart-add cart two'></i>
            </div>
            <div class="box">
                <div class="left-side">
                    <?php
                    $sql = "SELECT COUNT(id) AS total from blog;";
                    $execute = mysqli_query($con, $sql);
                    $rowsselectCount = mysqli_fetch_array($execute);
                    ?>
                    <div class="box-topic"><a href="Blog.php" class="text" style="
                        text-decoration: auto; color:black;
                    ">Blogs</a></div>
                    <div class="number"><?php echo $rowsselectCount['total']; ?></div>
                    <div class="indicator">
                        <i class='bx bx-up-arrow-alt'></i>
                        <span class="text">Up from yesterday</span>
                    </div>
                </div>
                <i class='bx bxs-cart-add cart two'></i>
            </div>
        </div>

        </section>

        <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
        </script>

</body>

</html>