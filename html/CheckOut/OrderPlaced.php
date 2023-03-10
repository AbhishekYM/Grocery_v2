<?php
include "/var/www/html/Grocery/html/master/nav.php";
include('/var/www/html/Grocery/database/connection.php');
session_start();
// error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Placed</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.3);
        }
        h1 {
            text-align: center;
            margin-top: 0;
        }
        p {
            margin-bottom: 0;
        }
        .order-summary {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
        }
        .order-summary h2 {
            margin-top: 0;
        }
        .order-summary table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .order-summary th,
        .order-summary td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        .order-summary th {
            background-color: #f5f5f5;
        }
        .order-total {
            text-align: right;
            margin-top: 20px;
        }
        .order-total h3 {
            margin-top: 0;
        }
        .order-total p {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="container">
        <?php
        if (!isset($_SESSION['name'])) {
            echo "User";
        }
        if (isset($_SESSION['name'])) {
            echo $_SESSION['name'];
        }
        ?>
        <hr>
        <h1>Order Placed</h1>
        <div class="order-summary">
            <h2>Order Summary</h2>
            <table>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <?php
                $select_cart = "SELECT `cart`.*,cart.id as cart_id,product.id as productId ,`product`.*, `cart`.`product_id`, `cart`.`user_id` FROM `cart` , `product` WHERE `cart`.`product_id` = `product`.`id` AND `cart`.`user_id` = '$_SESSION[user_id]'";
                $executeSelectCart = mysqli_query($con, $select_cart);
                while ($carts = mysqli_fetch_assoc($executeSelectCart)) {
                    ?>
                    <tbody>
                        <tr>
                            <td>
                                <?php echo $carts['title']; ?>
                            </td>
                            <td>
                                <?php echo $carts['quantity']; ?>
                            </td>
                            <td>
                                <?php echo $carts['price']; ?>/kg
                            </td>
                        </tr>

                    </tbody>
                    <?php
                }
                ?>
            </table>
            <?php
            $select_price_total = "SELECT SUM(product.price * cart.quantity) total FROM cart INNER JOIN product ON cart.product_id = product.Id WHERE user_id = $_SESSION[user_id];";
            $executeselectPriceTotal = mysqli_query($con, $select_price_total);
            $fetchTotalPrice = mysqli_fetch_assoc($executeselectPriceTotal);
            ?>
            <div class="order-total">
                <p>total:₹<?php echo $fetchTotalPrice['total'];?>/-
                </p>
            </div>
        </div>
        <p>Thank you for your order. Your order will be processed and shipped within 1-2 business days.</p>
    </div>
</body>
</html>
