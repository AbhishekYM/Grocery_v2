<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
</head>
<body class="bg-light">
    <?php
    include "D:/xampp/htdocs/Grocery/app/master/nav.php";
    ?>
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
    <script src="/Final_Project/admin/script.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>
</html>