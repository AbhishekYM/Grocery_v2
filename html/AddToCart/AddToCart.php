<?php
include "/var/www/html/Grocery/html/Master/Nav.php";
// include('/var/www/html/Grocery/Database/DatabaseConnection.php');
// $db = new DatabaseConnection();
// $con = $db->getConnection();
session_start();
// error_reporting(0);
?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/Grocery/CSS/bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css">
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

        .item-settle {

            height: 40px;
            margin-top: 0;
            width: 114px;
        }
    </style>

    <!-- <link rel="stylesheet" href="/Grocery/bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
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
                        <div class="col-md-12 col-lg-8 acol-11 mx-auto main_cart mb-lg-0 mb-5 shadow">
                            <div class="card p-4" style="padding: 6rem !important;">
                                <h1 class="heading"
                                    style="font-size: 25px; margin-top: -45px; color:green; font-weight:bold;"> Hello
                                    <?php
                                    if (!isset($_SESSION['name'])) {
                                        echo "User";
                                    }
                                    if (isset($_SESSION['name'])) {
                                        echo $_SESSION['name'];
                                    }
                                    ?>
                                    <hr>
                                    <?php
                                    $sql = "SELECT COUNT(id) AS total from cart;";
                                    $execute = mysqli_query($con, $sql);
                                    $rowsselectCount = mysqli_fetch_array($execute);
                                    ?>
                                    <h2 class="py-4 font-weight-bold" style="color:green; margin-top:-43px;">Total items
                                        (
                                        <?php echo $rowsselectCount['total']; ?>
                                        items)
                                    </h2>
                                    <hr>
                                    <!-- cart product details -->
                                    <div class="col-md-7 col-11 mx-auto px-4 mt-2">
                                        <div class="shopping-cart">
                                            <div class="row" style="margin-left: -231px;">
                                                <?php
                                                $select_cart = "SELECT `cart`.*,cart.id as cart_id,product.id as productId ,`product`.*, `cart`.`product_id`, `cart`.`user_id` FROM `cart` , `product` WHERE `cart`.`product_id` = `product`.`id` AND `cart`.`user_id` = '$_SESSION[user_id]'";
                                                $executeSelectCart = mysqli_query($con, $select_cart);
                                                while ($carts = mysqli_fetch_assoc($executeSelectCart)) {
                                                    ?>
                                                    <div class="row">
                                                        <!-- cart images div -->
                                                        <div
                                                            class="col-md-5 col-11 mx-auto bg-light d-flex justify-content-center align-items-center shadow product_img">

                                                            <img src="/Grocery/Storage/image/<?php echo $carts['featured_image']; ?>"
                                                                alt="s">
                                                        </div>
                                                        <!-- product name  -->
                                                        <div class="col-6 card-title">
                                                            <h1 class="mb-4 product_name" style="font-size: 3rem;">
                                                                <?php echo $carts['title']; ?>
                                                            </h1>
                                                            <!-- <p class="mb-2">SHIRT - BLUE</p> -->
                                                            <p class="mb-2" style="font-size:1.5rem;color: black;">QTY:
                                                                <?php echo $carts['quantity']; ?>
                                                            </p>
                                                            <p class="mb-3" style="font-size:1.5rem;color: black;">Price :
                                                                <?php echo $carts['price']; ?>/kg
                                                            </p>
                                                            <span class="quantity" style="font-size:2rem;">₹
                                                                <span>
                                                                    <?php echo $carts['price'] * $carts['quantity']; ?>
                                                                </span></span>
                                                            &nbsp;
                                                            <a href="/Grocery/App/Cart/Delete.php?cart_id=<?php echo $carts['cart_id'] ?>"
                                                                style="color:red;text-decoration: auto;font-size: 1.3rem;">Remove</a>
                                                        </div>
                                                        <form action="/Grocery/App/Cart/Update.php" method="post"
                                                            id="quantity">
                                                            <input type="hidden" name="productId"
                                                                value="<?php echo $updateCart->productId; ?>">
                                                            <!-- <input type="text" placeholder="Maximum 5 items" name="quantity"
                                                                                                        id="updatedQuantity" min="1" max="10"
                                                                                                        style=" border: 1px solid;width: 21rem;margin-left: 2rem;"
                                                                                                        max="5" min="0"> -->
                                                            <div class="d-flex justify-content" style="margin-left:346px">
                                                                <select class="form-select item-settle me-4"
                                                                    style="width:114px; font-size:1.5rem;"
                                                                    aria-label="Default select example" name="quantity">
                                                                    <option>Select Quantity</option>
                                                                    <option value="1" selected>1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                                <input type="submit" class="item-settle" value="Add"
                                                                    style="color: green;background: white;font-size: 1.5rem;font-weight: bolder;border: 1px solid;">
                                                            </div>
                                                        </form>
                                                        <hr />
                                                        <?php
                                                }
                                                $select_price_total = "SELECT SUM(product.price * cart.quantity) total
                                                FROM cart
                                                INNER JOIN product ON cart.product_id = product.Id
                                                WHERE user_id = $_SESSION[user_id];";
                                                $executeselectPriceTotal = mysqli_query($con, $select_price_total);
                                                $fetchTotalPrice = mysqli_fetch_assoc($executeselectPriceTotal);
                                                ?>
                                                    <div class="total"
                                                        style="margin-left:60rem; font-size:2rem; font-weight:bold;">
                                                        total
                                                        : ₹
                                                        <?php echo $fetchTotalPrice['total']; ?>/-
                                                    </div>
                                                    <a href="/Grocery/html/Payment/SelectPaymentOptions.php" class="btn"
                                                        id="cart-btn"
                                                        style="padding: 1rem;border: 1px solid;width: 119px;margin-left: 30rem;">Checkout</a>
                                                </div>
                                                <?php
                                                ?>
                                                <script></script>
</body>

</html>