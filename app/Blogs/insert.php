<?php
include '/var/www/html/Grocery/database/connection.php';
if (isset($_POST['insert_blog'])) {
   
    $image = $_FILES["image"]["name"];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = '/Grocery/storage/image/'.$image;
    // move_uploaded_file($img_loc,'image/'.$img_name);
     move_uploaded_file($img_loc,'/Grocery/storage/image/'.$img_name);
    //$movefile = move_uploaded_file($img_loc,$img_des);
    $title = $_POST['title'];
    $date = date('Y-m-d H:i:s');
    $description = $_POST['description'];
    $insert_feature = "insert into blog(image,date,description,title) values('$img_name','$date','$description','$title')";
    $result_query = mysqli_query($con, $insert_feature);
        if ($result_query) 
        {
        // echo "<script> alert ('blog inserted succesfully')</script>";
        header ("location:/Grocery/html/Admin/blog.php");
        }
}
?>