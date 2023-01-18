<?php
include 'D:/xampp/htdocs/Grocery/database/connection.php';
if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];
    $sql = "delete from category where id=$id";
    $result = mysqli_query($con, $sql);
    if($result)
    {
     header('location:/Grocery/html/admin/categories.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}
?>