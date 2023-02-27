<?php
include "/var/www/html/Grocery/html/master/nav.php";
include('/var/www/html/Grocery/database/connection.php');
session_start();
error_reporting(0);
?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Mulish', sans-serif;
        }

        :root {
            --text-clr: #4f4f4f;
        }

        p {
            color: #6c757d;
        }

        a {
            text-decoration: none;
            color: var(--text-clr);
        }

        a:hover {
            text-decoration: none;
            color: var(--text-clr);
        }

        h2 {
            color: var(--text-clr);
            font-size: 1.5rem;
        }

        .main_cart {
            background: #fff;
        }

        .card {
            border: none;
        }

        .product_img img {
            min-width: 200px;
            max-height: 200px;
        }

        .product_name {
            color: black;
            font-size: 1.4rem;
            text-transform: capitalize;
            font-weight: 500;
        }

        .card-title p {
            font-size: 0.9rem;
            font-weight: 500;
        }

        .remove-and-wish p {
            font-size: 0.8rem;
            margin-bottom: 0;
        }

        .price-money h3 {
            font-size: 1rem;
            font-weight: 600;
        }

        .set_quantity {
            position: relative;
        }

        .set_quantity::after {
            content: "(Note, 1 piece)";
            width: auto;
            height: auto;
            text-align: center;
            position: absolute;
            bottom: -20px;
            right: 1.5rem;
            font-size: 0.8rem;
        }

        .page-link {
            line-height: 16px;
            width: 45px;
            font-size: 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #495057;
        }

        .page-item input {
            line-height: 22px;
            padding: 3px;
            font-size: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .page-link:hover {
            text-decoration: none;
            color: #495057;
            outline: none !important;
        }

        .page-link:focus {
            box-shadow: none;
        }

        .price_indiv p {
            font-size: 1.1rem;
        }

        .fa-heart:hover {
            color: red;
        }
    </style>

    <link rel="stylesheet" href="/Grocery/bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Shopping Cart</title>
</head>
<br><br><br><br><br>

<body class="bg-light">
    <h1 class="heading"> Added <span>products</span> </h1>
    <div class="container-fluid">
        <div class="row">
            <div class="title">

                <div class="col-md-10 col-11 mx-auto">
                    <div class="row mt-5 gx-3">

                        <!-- left side div -->
                        <div class="col-md-12 col-lg-8 acol-11 mx-auto main_cart mb-lg-0 mb-5 shadow">
                            <div class="card p-4" style="padding: 6rem !important;">
                                <h1 class="heading" style="font-size: 25px; margin-top: -45px;"> Hello
                                    <?php
                                    if (!isset($_SESSION['name'])) {
                                        echo "User";
                                    }
                                    if (isset($_SESSION['name'])) {
                                        echo $_SESSION['name'];
                                    }
                                    ?>
                                    <?php
                                    $sql = "SELECT COUNT(id) AS total from cart;";
                                    $execute = mysqli_query($con, $sql);
                                    $rowsselectCount = mysqli_fetch_array($execute);
                                    ?>
                                    <h2 class="py-4 font-weight-bold">Cart (
                                        <?php echo $rowsselectCount['total']; ?>
                                        items)
                                    </h2>
                                    <!-- cart product details -->
                                    <div class="col-md-7 col-11 mx-auto px-4 mt-2">
                                        <div class="shopping-cart">
                                            <div class="row">
                                                <?php
                                                $select_cart = "SELECT `cart`.*,cart.id as cart_id,product.id as productId ,`product`.*, `cart`.`product_id`, `cart`.`user_id` FROM `cart` , `product` WHERE `cart`.`product_id` = `product`.`id` AND `cart`.`user_id` = '$_SESSION[user_id]'";
                                                $executeSelectCart = mysqli_query($con, $select_cart);
                                                while ($carts = mysqli_fetch_assoc($executeSelectCart)) {
                                                    ?>
                                                    <div class="row">

                                                        <!-- cart images div -->
                                                        <div
                                                            class="col-md-5 col-11 mx-auto bg-light d-flex justify-content-center align-items-center shadow product_img">

                                                            <img src="/Grocery/storage/image/<?php echo $carts['featured_image']; ?>"
                                                                alt="s">
                                                        </div>
                                                        <!-- product name  -->
                                                        <div class="col-6 card-title">
                                                            <h1 class="mb-4 product_name">
                                                                <?php echo $carts['title']; ?>
                                                            </h1>
                                                            <!-- <p class="mb-2">SHIRT - BLUE</p> -->
                                                            <p class="mb-2" style="font-size:1.5rem;">QTY:
                                                                <?php echo $carts['quantity']; ?>
                                                            </p>
                                                            <p class="mb-3" style="font-size:1.5rem;">Price :
                                                                <?php echo $carts['price']; ?>/kg
                                                            </p>


                                                            <span class="quantity" style="font-size:2rem;">Total :
                                                                <span>
                                                                    <?php echo $carts['price'] * $carts['quantity']; ?>
                                                                </span></span>
                                                            &nbsp;
                                                            <a href="/Grocery/app/cart/delete.php?cart_id=<?php echo $carts['cart_id'] ?>"
                                                                class="fa fa-trash"></a>
                                                        </div>
                                                        <form action="/Grocery/app/cart/update.php" method="post"
                                                            id="quantity">
                                                            <input type="hidden" name="productId"
                                                                value="<?php echo $carts['productId']; ?>">
                                                            <input type="text" placeholder="Enter Quantity to purchase"
                                                                name="quantity" id="updatedQuantity" maxlenght="5">
                                                            <input type="submit" value="Add">
                                                        </form>
                                                        <hr />
                                                    <?php
                                                }
                                                $select_price_total = "SELECT SUM(product.price) as total FROM `cart` , `product` WHERE `cart`.`product_id` = `product`.`id` AND `cart`.`user_id` = '$_SESSION[user_id]'";
                                                $executeselectPriceTotal = mysqli_query($con, $select_price_total);
                                                $fetchTotalPrice = mysqli_fetch_assoc($executeselectPriceTotal);
                                                ?>
                                                    <div class="total" style="margin-left:24rem; font-size:2rem;"> total
                                                        :
                                                        <?php echo $fetchTotalPrice['total']; ?> -
                                                    </div>
                                                    <a href="#" class="btn" id="cart-btn">Checkout</a>
                                                </div>
                                                <?php
                                                ?>
</body>

</html>