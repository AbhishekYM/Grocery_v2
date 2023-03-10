<?php
// include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';
// session_start();
// if (isset($_POST['quantity'])) {
//     $updateQuantity = "UPDATE cart SET quantity='$_POST[quantity]' WHERE user_id = '$_SESSION[user_id]' AND product_id= '$_POST[productId]'";
//     $executeUpdate = mysqli_query($con,$updateQuantity);
//     if ($executeUpdate) {
//         header("location:/Grocery/html/AddToCart/AddToCart.php");
//     }
// }
?>
<?php
include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';
class UpdateCart
{
    public $quantity;
    public $productId;
    public $userId;
    private $connection;
    // public $productId;
    public function __construct($con)
    {
        session_start();
        $this->connection = $con;
        $this->quantity = $_POST['quantity'];
        $this->productId = $_POST['productId'];
        $this->userId = $_SESSION['user_id'];
    }
    public function updateQuantity()
    {
        if (isset($_POST['quantity'])) {
            global $con;
            $updateQuantity = "UPDATE cart SET quantity='$this->quantity' WHERE user_id = '$this->userId' AND product_id= '$this->productId'";
            $executeUpdate = mysqli_query($con, $updateQuantity);
            if ($executeUpdate) {
                echo "updated";
                // header("location:/Grocery/html/AddToCart/AddToCart.php");
            }
        }
    }
    public function setProductid($product_id)
    {
        $this->productId = $product_id;
    }
}
$db = new DatabaseConnection();
$con = $db->getConnection();
// $updateCart = $updateCart::updateQuantity();
$updateCart = new UpdateCart($con);
$updateCart->setProductid($product_id);
$updateCart->updateQuantity();
?>