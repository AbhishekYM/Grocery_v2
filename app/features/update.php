<?php
include('D:/xampp/htdocs/Grocery/database/connection.php');

$id = $_GET['updateid'];
$sql = "Select * from feature where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$image = $row['image'];
$description = $row['description'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    $sql = "update feature set id=$id, name='$name', image='$image', description='$description' where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
       header('location:/Grocery/html/Admin/feature.php');
    } else {
        die(mysqli_error($con));
    }
}
?>