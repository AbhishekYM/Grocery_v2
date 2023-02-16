<?php
include('D:/xampp/htdocs/Grocery/database/connection.php');
$id = $_GET['updateid'];

$sql = "Select * from blog where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$image = $row['image'];
$date = $row['date'];
$description = $row['description'];

if (isset($_POST['submit'])) {
    $image = $_POST['image'];
    $date = $_POST['date'];
    $description = $_POST['description'];

    $sql = "update blog set id=$id, title='$image', image='$date', discount='$description'where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
       // echo "updated";
        header('location:/Grocery/html/Admin/categories.php');
    } else {
        die(mysqli_error($con));
    }
}
?>
