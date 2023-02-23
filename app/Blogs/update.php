<?php
include('/var/www/html/Grocery/database/connection.php');
$id = $_GET['updateid'];
$sql = "Select * from blog ";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$img_name = $row['image'];
//  $date = $row['date'];
$description = $row['description'];

if (isset($_POST['submit'])) {
    $image = $_FILES["image"]["name"];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = '/Grocery/storage/image'.$image;
    // move_uploaded_file($img_loc,'image/'.$img_name);
     move_uploaded_file($img_loc,'/Grocery/storage/image'.$img_name);
    //$movefile = move_uploaded_file($img_loc,$img_des);
    // $date = $_POST['date'];
    $description = $_POST['description'];
    $sql = "update blog set id='$id', image='$img_name', description='$description'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo $result;
    //    echo "updated";
         header('location:/Grocery/html/Admin/blog.php');
    } else {
        die(mysqli_error($con));
    }
}
?>
