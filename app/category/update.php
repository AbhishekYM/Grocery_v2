<?php
include('D:/xampp/htdocs/Grocery/database/connection.php');
$id = $_GET['updateid'];

$sql = "Select * from category where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$cat_title = $row['title'];
$cat_image = $row['image'];
$cat_discount = $row['discount'];

if (isset($_POST['submit'])) {
    $cat_title = $_POST['cat_title'];
    $cat_image = $_POST['cat_image'];
    $cat_discount = $_POST['cat_discount'];

    $sql = "update category set id=$id, title='$cat_title', image='$cat_image', discount='$cat_discount'where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
       // echo "updated";
        header('location:/Grocery/html/Admin/categories.php');
    } else {
        die(mysqli_error($con));
    }
}
?>