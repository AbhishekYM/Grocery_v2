<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body class="bg-light">
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






        <?php
        include('../include/connect.php');
        if (isset($_POST['insert_cart'])) {
            $category_title = $_POST['cat_title'];
            $category_image = $_FILES['cat_image']['name'];
            $category_discount = $_POST['cat_discount'];
            // select data from database
            $select_query = "select * from category where title='$category_title'";
            $result_select = mysqli_query($con, $select_query);
            $number = mysqli_num_rows($result_select);
            if ($number > 0) {
                echo "<script> alert ('Category already present')</script>)";
            } else {
                $insert_query = "insert into category (title,image,discount) values ('$category_title','$category_image','$category_discount');";
                $result = mysqli_query($con, $insert_query);
                if ($result) {
                    echo "<script> alert ('Category inserted succesfully')</script>)";
                }
            }
        }
        ?>





<br>
        <br>
        <div class="container mt-3">
            <h1 class="text-center">Insert Categories</h1>
            <!--Form-->
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-outline mb-4 w-50 m-auto">
                    <!--Insert - Category-->
                    <input type="text" name="cat_title" id="cat_title" class="form-control" placeholder="Enter category"
                        autocomplete="off" required>
                </div>
                <!--Image-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="cat_image" class="form-label">Category Image</label>
                    <input type="file" name="cat_image" id="cat_image" class="form-control" autocomplete="off" required>
                </div>
                <!--Discount-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="cat_discount" class="form-label">Discount</label>
                    <input type="text"  name="cat_discount" id="cat_discount" class="form-control" autocomplete="off"
                        required>
                </div>
                <!--Submit-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <input type="submit" name="insert_cart" class="btn btn-info mb-3 px-3" value="Insert Categories">
                </div>
            </form>
        </div>
        <script src="/Final_Project/admin/script.js"></script>
        <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>

</html>