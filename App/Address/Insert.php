<?php
// include '/var/www/html/Grocery/Database/Connection.php';
// include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';
// session_start();
// if (isset($_POST['submit'])) {
//     $userId = $_SESSION['user_id'];
//     $name = $_POST['name'];
//     print_r($name);
//     $address = $_POST['address'];
//     $city = $_POST['city'];
//     $state = $_POST['state'];
//     $zipcode = $_POST['zipcode'];
//     $insert = "insert into address(user_id,name,address,city,state,zipcode) values($userId,'$name','$address','$city','$state','$zipcode')";
//     $result_query = mysqli_query($con, $insert);
//         if ($result_query) 
//         {
//         // echo "<script> alert ('Address inserted succesfully')</script>";
//           header ("location:/Grocery/html/Profile/Address.php");
//         }
// }
?>

<?php
include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';

class Address {
    private $connection;

    public function __construct($con) {
        $this->connection = $con;
    }

    public function addAddress($userId, $name, $address, $city, $state, $zipcode) {
        $insert = "insert into address(user_id,name,address,city,state,zipcode) values($userId,'$name','$address','$city','$state','$zipcode')";
        $result_query = mysqli_query($this->connection, $insert);
        if ($result_query) {
            header ("location:/Grocery/html/Profile/Address.php");
        }
    }
}
session_start();
$db = new DatabaseConnection();
$con = $db->getConnection();
if (isset($_POST['submit'])) {
    $userId = $_SESSION['user_id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    
    $addressObj = new Address($con);
    $addressObj->addAddress($userId, $name, $address, $city, $state, $zipcode);
}
?>



