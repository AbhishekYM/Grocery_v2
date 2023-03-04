<?php
include('/var/www/html/Grocery/database/connection.php');
// session_start();
$id = $_GET['updateid'];
$sql = "SELECT * from address where id='$id'";     
$result = mysqli_query($con, $sql);
// print_r($result);
$row = mysqli_fetch_assoc($result);
// $userId = $_SESSION['user_id'];
    $name = $row['name'];
    $address = $row['address'];
    $city = $row['city'];
    $state = $row['state'];
    $zipcode = $row['zipcode'];
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    // $userId = $_SESSION['user_id'];
    $name = $_POST['name'];
    $address = $_POST['address'];   
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $sql = "update address set  name='$name',address='$address',city='$city',state='$state',zipcode='$zipcode' where id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
         echo $result;
    //  echo "updated";
        //  header('location:/Grocery/html/profile/address.php');
    } else {
        die(mysqli_error($con));
    }
}
?>
