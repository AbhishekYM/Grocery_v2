<?php
include '/var/www/html/Grocery/Database/Connection.php';
if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];
    $sql = "delete from user where id=$id";
    $result = mysqli_query($con, $sql);
    if($result)
    {
     header('location:/Grocery/html/Admin/User.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}
?>