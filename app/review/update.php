<?php
include '/var/www/html/Grocery/database/connection.php';
$id = $_GET['updateid'];
if(isset($id))
{
    $show = 0;
    $sql = "UPDATE `review` SET `role`='1' WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if($result)
    {
     header('location:/Grocery/html/Admin/review.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}
?>