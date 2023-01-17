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
        <br>
        <br>
        <div class="container mt-3">
            <h1 class="text-center">Insert Products</h1>
            <!--Form-->
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="product_title" class="form-label">Product title</label>
                    <input type="text" name="product_title" id="product_title" class="form-control"
                        placeholder="Enter product title" autocomplete="off" required>
                </div>
                <!--Description-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="product_title" class="form-label">Product description</label>
                    <input type="text" name="description" id="description" class="form-control"
                        placeholder="Enter product description" autocomplete="off" required>
                </div>
                <!--keywords-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="product_keywords" class="form-label">Product description</label>
                    <input type="text" name="product_keywords" id="product_keywords" class="form-control"
                        placeholder="Enter product keywords" autocomplete="off" required>
                </div>
                <!--Category-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <select name="product_categories" id="" class="form-select">
                        <option value="">Select a Category</option>
                        <option value="">Category1</option>
                        <option value="">Category2</option>
                        <option value="">Category3</option>
                    </select>
                </div>
                <!--Brands-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <select name="product_brands" id="" class="form-select">
                        <option value="">Select a brand</option>
                        <option value="">Brand1</option>
                        <option value="">Brand2</option>
                        <option value="">Brand3</option>
                    </select>
                </div>
                <!--Image-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="product_image" class="form-label">Product Image</label>
                    <input type="file" name="product_image" id="product_image" class="form-control" autocomplete="off"
                        required>
                </div>
                <!--Price-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="product_price" class="form-label">Product Price</label>
                    <input type="text" name="product_price" id="product_price" class="form-control"
                        placeholder="Enter product price" autocomplete="off" required>
                </div>
                <!--Price-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Products">
                </div>

            </form>
        </div>
        <?php
        include('../include/connect.php');
        
        ?>
        <script src="/Final_Project/admin/script.js"></script>
        <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>

</html>