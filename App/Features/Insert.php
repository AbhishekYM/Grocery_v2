<?php
// include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';

// if (isset($_POST['insert_feature'])) {
    
//     $image = $_FILES["image"]["name"];
//     $img_loc = $_FILES['image']['tmp_name'];
//     $img_name = $_FILES['image']['name'];
//     $img_des = '/Grocery/storage/image'.$image;
//     // move_uploaded_file($img_loc,'image/'.$img_name);
//      move_uploaded_file($img_loc,'/Grocery/storage/image'.$img_name);
//     //$movefile = move_uploaded_file($img_loc,$img_des);
//     $name = $_POST['name'];
//     $description = $_POST['description'];
//     $insert_feature = "insert into feature(image,name,description) values('$img_name','$name','$description')";
//     $result_query = mysqli_query($con, $insert_feature);
//     if ($result_query) {
//         echo "<script> alert ('feature inserted succesfully')</script>)";
//     }
// }
?>

<?php

include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';

class Feature
{
    private $con;
    public function __construct($con)
    {
        $this->con = $con;
    }

    public function insertFeature($image, $name, $description)
    {
        $img_loc = $_FILES['image']['tmp_name'];
        $img_name = $_FILES['image']['name'];
         $img_des = '/Grocery/Storage/image'.$image;
        move_uploaded_file($img_loc,'/var/www/html/Grocery/Storage/image'.$img_name);
        $insert_feature = "insert into feature(image, name, description) values('$img_name','$name','$description')";
        $result_query = mysqli_query($this->con, $insert_feature);
        if ($result_query) {
            echo "<script> alert ('Feature inserted successfully')</script>";
        } else {
            echo "<script> alert ('Failed to insert feature')</script>";
        }
    }
}
$db = new DatabaseConnection();
$con = $db->getConnection();
if (isset($_POST['insert_feature'])) {
    $feature = new Feature($con);
    $image = $_FILES["image"]["name"];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $feature->insertFeature($image, $name, $description);
}
?>
