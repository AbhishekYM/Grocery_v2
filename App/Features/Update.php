<?php
// include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';


// $id = $_GET['updateid'];
// $sql = "Select * from feature where id=$id";
// $result = mysqli_query($con, $sql);
// $row = mysqli_fetch_assoc($result);
// $name = $row['name'];
// $image = $row['image'];
// $description = $row['description'];

// if (isset($_POST['submit'])) {
//     $name = $_POST['name'];
//     $image = $_POST['image'];
//     $description = $_POST['description'];
//     $sql = "update feature set id=$id, name='$name', image='$image', description='$description' where id=$id";
//     $result = mysqli_query($con, $sql);
//     if ($result) {
//        header('location:/Grocery/html/Admin/Feature.php');
//     } else {
//         die(mysqli_error($con));
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

    public function getFeatureById($id)
    {
        $sql = "SELECT * FROM feature WHERE id = $id";
        $result = mysqli_query($this->con, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    public function updateFeature($id, $name, $image, $description)
    {
        $sql = "UPDATE feature SET name = '$name', image = '$image', description = '$description' WHERE id = $id";
        $result = mysqli_query($this->con, $sql);
        if ($result) {
            header('Location: /Grocery/html/Admin/Feature.php');
        } else {
            die(mysqli_error($this->con));
        }
    }
}
$db = new DatabaseConnection();
$con = $db->getConnection();
$id = $_GET['updateid'];
$feature = new Feature($con);


$row = $feature->getFeatureById($id);
$name = $row['name'];
$image = $row['image'];
$description = $row['description'];

if (isset($_POST['submit'])) {
    $id = $_POST['updateid'];
    $name = $_POST['name'];
    $image = $_FILES['image'];
    $description = $_POST['description'];
    print_r($feature->updateFeature($id, $name, $image, $description));
}
?>