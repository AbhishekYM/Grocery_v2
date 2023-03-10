<?php
include '/var/www/html/Grocery/Database/Connection.php';
$id = $_GET['deleteid'];
if(isset($id))
{
    $show = 0;
    $sql = "UPDATE `review` SET `role`='0' WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if($result)
    {
     header('location:/Grocery/html/Admin/Review.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}
?>