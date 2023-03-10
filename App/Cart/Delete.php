<?php
// include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';

// if(isset($_GET['cart_id']))
// {
//     $cart_id = $_GET['cart_id'];
//     $sql = "delete from cart where id=$cart_id";
//     $result = mysqli_query($con, $sql);
//     if($result)
//     {
//      header('location:/Grocery/html/AddToCart/AddToCart.php');
//     }
//     else
//     {
//         die(mysqli_error($con));
//     }
// }
?> 

<?php

include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';

class DeleteCart {
    
    private $cartId;
    private $connection;

    public function __construct() {
        $this->cartId = $_GET['cart_id'];
    }

    public function deleteCartItem() {
        global $con;
        $sql = "delete from cart where id=$this->cartId";
        $result = mysqli_query($con, $sql);
        if($result) {
            header('location:/Grocery/html/AddToCart/AddToCart.php');
        } else {
            die(mysqli_error($con));
        }
    }
}
$db = new DatabaseConnection();
$con = $db->getConnection();
$deleteCart = new DeleteCart();
$deleteCart->deleteCartItem();

?>
