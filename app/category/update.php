<?php
include('connection.php');
$id= $_GET['updateid'];
if(isset($_POST['submit']))
{
    $category_title=$_POST['title'];
    $category_image=$_POST['image'];
    $category_discount = $_POST['discount'];
    $sql="update 'crud' set id=$id, title=$category_title, image=$category_image, discount=$category_discount";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        header('location:display.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}
?>