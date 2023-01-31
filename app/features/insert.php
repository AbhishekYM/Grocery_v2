<?php
include 'D:\xampp\htdocs\Grocery\database\connection.php';

if (isset($_POST['insert_feature'])) {
    $image = $_POST['image'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $insert_feature = "insert into feature(image,name,description) values('$image','$name','$description')";
    $result_query = mysqli_query($con, $insert_feature);
    if ($result_query) {
        echo "<script> alert ('feature inserted succesfully')</script>)";
    }
}
?>