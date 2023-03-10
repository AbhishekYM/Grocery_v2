<?php 
// session_start();
// include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';

// $productId = $_POST['productId'];
// $userId = $_SESSION['user_id'];
// $quantity = $_POST['quantity'];
// $_SESSION['product'] = $_POST['productId'];

 
// if (isset($_POST['addCart'])) {
//     $insert_feature = "insert into cart(user_id,product_id,quantity) values($userId,$productId,$quantity)";
//     $result_query = mysqli_query($con, $insert_feature);
//     if ($result_query) {
//         header("location:/Grocery/html/AddToCart/AddToCart.php");
//     }
// }
?>

<?php

session_start();
include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';

class AddToCart {
    
    private $productId;
    private $userId;
    private $quantity;
    private $connection;

    public function __construct($con) {
        $this->connection = $con;
        $this->productId = $_POST['productId'];
        $this->userId = $_SESSION['user_id'];
        $this->quantity = $_POST['quantity'];
        $_SESSION['product'] = $_POST['productId'];
    }

    public function addToCart() {
        if (isset($_POST['addCart'])) {
            global $con;
            $insert_feature = "insert into cart(user_id,product_id,quantity) values($this->userId,$this->productId,$this->quantity)";
            $result_query = mysqli_query($con, $insert_feature);
            if ($result_query) {
                header("location:/Grocery/html/AddToCart/AddToCart.php");
            }
        }
    }
}
$db = new DatabaseConnection();
$con = $db->getConnection();
$addToCart = new AddToCart($con);
$addToCart->addToCart();

?>
