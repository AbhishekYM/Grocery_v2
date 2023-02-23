<?php
include '/var/www/html/Grocery/database/connection.php';
if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];
    $sql = "delete from user where id=$id";
    $result = mysqli_query($con, $sql);
    if($result)
    {
     header('location:/Grocery/html/Admin/user.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}
?>