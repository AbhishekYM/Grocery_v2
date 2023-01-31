<?php
include('D:/xampp/htdocs/Grocery/database/connection.php');
$id= $_GET['updateid'];
if(isset($_POST['submit']))
{
    $name=$_POST['title'];
    $image=$_POST['image'];
    $description = $_POST['description'];
    $sql="update 'crud' set id=$id, title=$name, image=$image, discount=$description";
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