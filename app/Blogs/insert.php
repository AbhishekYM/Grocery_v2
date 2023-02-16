<?php
include 'D:\xampp\htdocs\Grocery\database\connection.php';

if (isset($_POST['insert_blog'])) {
    $image = $_POST['image'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $insert_feature = "insert into blog(image,date,description) values('$image','$date','$description')";
    $result_query = mysqli_query($con, $insert_feature);
    if ($result_query) {
        echo "<script> alert ('blog inserted succesfully')</script>)";
    }
}
?>