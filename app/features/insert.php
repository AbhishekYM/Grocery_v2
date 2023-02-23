<?php
include '/var/www/html/Grocery/database/connection.php';

if (isset($_POST['insert_feature'])) {
    
    $image = $_FILES["image"]["name"];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = '/Grocery/storage/image'.$image;
    // move_uploaded_file($img_loc,'image/'.$img_name);
     move_uploaded_file($img_loc,'/Grocery/storage/image'.$img_name);
    //$movefile = move_uploaded_file($img_loc,$img_des);
    $name = $_POST['name'];
    $description = $_POST['description'];
    $insert_feature = "insert into feature(image,name,description) values('$img_name','$name','$description')";
    $result_query = mysqli_query($con, $insert_feature);
    if ($result_query) {
        echo "<script> alert ('feature inserted succesfully')</script>)";
    }
}
?>