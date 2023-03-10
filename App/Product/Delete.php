<?php
// include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';

// if(isset($_GET['deleteid']))
// {
//     $id = $_GET['deleteid'];
//     $sql = "delete from product where id=$id";
//     $result = mysqli_query($con, $sql);
//     if($result)
//     {
//      header('location:/Grocery/html/Admin/Product.php');
//     }
//     else
//     {
//         die(mysqli_error($con));
//     }
// }
?>

<?php

// Import the database connection class
require_once '/var/www/html/Grocery/Database/DatabaseConnection.php';

class Product {
    private $con;

    public function __construct() {
        $db = new DatabaseConnection();
        $this->con = $db->getConnection();
    }

    public function deleteProduct($id) {
        $sql = "DELETE FROM product WHERE id=$id";
        $result = mysqli_query($this->con, $sql);
        if ($result) {
            header('location:/Grocery/html/Admin/Product/Product.php');
        } else {
            die(mysqli_error($this->con));
        }
    }
}

// Instantiate the Product class
$product = new Product();

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $product->deleteProduct($id);
}

?>
