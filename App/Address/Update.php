<?php
// include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';
// // session_start();
// $id = $_GET['updateid'];
// $sql = "SELECT * from address where id='$id'";     
// $result = mysqli_query($con, $sql);
// // print_r($result);
// $row = mysqli_fetch_assoc($result);
// // $userId = $_SESSION['user_id'];
//     $name = $row['name'];
//     $address = $row['address'];
//     $city = $row['city'];
//     $state = $row['state'];
//     $zipcode = $row['zipcode'];
// if (isset($_POST['submit'])) {
//     $id = $_POST['id'];
//     // $userId = $_SESSION['user_id'];
//     $name = $_POST['name'];
//     $address = $_POST['address'];   
//     $city = $_POST['city'];
//     $state = $_POST['state'];
//     $zipcode = $_POST['zipcode'];
//     $sql = "update address set  name='$name',address='$address',city='$city',state='$state',zipcode='$zipcode' where id='$id'";
//     $result = mysqli_query($con, $sql);
//     if ($result) {
//          echo $result;
//     //  echo "updated";
//         //  header('location:/Grocery/html/profile/address.php');
//     } else {
//         die(mysqli_error($con));
//     }
// }
?>


<?php
include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';

class Address
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAddress($id)
    {
        $sql = "SELECT * from address where id='$id'";
        $result = mysqli_query($this->connection, $sql);
        return mysqli_fetch_assoc($result);
    }

    public function updateAddress($id, $name, $address, $city, $state, $zipcode)
    {
        $sql = "update address set  name='$name',address='$address',city='$city',state='$state',zipcode='$zipcode' where id='$id'";
        $result = mysqli_query($this->connection, $sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
$id = $_GET['updateid'];
$addressObj = new Address($con);
$row = $addressObj->getAddress($id);
$name = $row['name'];
$address = $row['address'];
$city = $row['city'];
$state = $row['state'];
$zipcode = $row['zipcode'];
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $addressUpdated = $addressObj->updateAddress($id, $name, $address, $city, $state, $zipcode);
    if ($addressUpdated) {
        // echo "updated";
         header('location:/Grocery/html/Profile/Address.php');
    } else {
        die(mysqli_error($con));
    }
}
?>