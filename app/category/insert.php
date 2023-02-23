
<?php
include('/var/www/html/Grocery/database/connection.php');
if (isset($_POST['insert_cart'])) {
    $category_title = $_POST['cat_title'];
    $category_image = $_FILES['cat_image']['name'];
    $img_loc = $_FILES['cat_image']['tmp_name'];
    $img_name = $_FILES['cat_image']['name'];
    $img_des = '/Grocery/storage/image'.$category_image;
     move_uploaded_file($img_loc,'/Grocery/storage/image/'.$img_name);
    $category_discount = $_POST['cat_discount'];
    // select data from database
    $select_query = "select * from category where title='$category_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);
    if ($number > 0) {
        echo "<script> alert ('Category already present')</script>)";
    } else {
        $insert_query = "insert into category (title,image,discount) values ('$category_title','$img_name','$category_discount')";
        $result = mysqli_query($con, $insert_query);
        if ($result) {
        //    echo "<script> alert ('Category inserted succesfully')</script>";
            // header('location:/Grocery/html/Admin/categories.php');
        }
    }
}
?> 