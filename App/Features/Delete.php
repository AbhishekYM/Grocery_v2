<?php
// include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';
// $db = new DatabaseConnection();
// $con = $db->getConnection();
// if(isset($_GET['deleteid']))
// {
//     $id = $_GET['deleteid'];
//     $sql = "delete from feature where id=$id";
//     $result = mysqli_query($con, $sql);
//     if($result)
//     {
//      header('location:/Grocery/html/Admin/Feature.php');
//     }
//     else
//     {
//         die(mysqli_error($con));
//     }
// }
?>
<?php
include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';

class Feature {
    private $db;

    public function __construct() {
        $this->db = new DatabaseConnection();
    }

    public function deleteFeature($id) {
        $con = $this->db->getConnection();

        $sql = "DELETE FROM feature WHERE id=$id";
        $result = mysqli_query($con, $sql);

        if($result) {
            header('Location:/Grocery/html/Admin/Feature/Feature.php');
        } else {
            die(mysqli_error($con));
        }
    }
}

if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $feature = new Feature();
    $feature->deleteFeature($id);
}
?>
