<?php
// include('/var/www/html/Grocery/Database/Connection.php');
// include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';
// $db = new DatabaseConnection();
// $con = $db->getConnection();
// $id = $_GET['updateid'];

// $sql = "Select * from category where id=$id";
// $result = mysqli_query($con, $sql);
// $row = mysqli_fetch_assoc($result);
// $cat_title = $row['title'];
// $cat_image = $row['image'];
// $cat_discount = $row['discount'];

// if (isset($_POST['submit'])) {
//     $cat_title = $_POST['cat_title'];
//     $cat_image = $_POST['cat_image'];
//     $date = date('Y-m-d H:i:s');
//     $cat_discount = $_POST['cat_discount'];

//     $sql = "update category set id=$id, title='$cat_title', image='$cat_image', discount='$cat_discount'where id=$id";
//     $result = mysqli_query($con, $sql);
//     if ($result) {
//        // echo "updated";
//         header('location:/Grocery/html/Admin/Categories.php');
//     } else {
//         die(mysqli_error($con));
//     }
// }
?>
<?php
include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';
class CategoryUpdate
{
    public $id;
    public $title;
    public $image;
    public $discount;
    private $con;
    public function __construct($id,$title, $image, $discount, $con)
    {
        $this->id = $id;
        $this->title = $title;
        $this->image = $image;
        $this->discount = $discount;
        $this->con = $con;
    }
    public function updateCategory($id)
    {
       
        $img_name = $this->image;
        $sql = "update category set title='$this->title', image='$img_name', description='$this->discount' where id='$id'";
        $result = mysqli_query($this->con, $sql);
        if ($result) {
            header('location:/Grocery/html/Admin/Category/Categories.php');
        }
    }
    public static function getById($id, $con)
    {
        $sql = "select * from category where id = '$id'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        return new CategoryUpdate( $row['id'],$row['title'], $row['image'], $row['discount'], $con);
    }
    
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setImage($image)
    {
        $this->image = $image;
    }
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
}
$db = new DatabaseConnection();
$con = $db->getConnection();
$id = $_GET['updateid'];
$CategoryUpdate = CategoryUpdate::getById($id, $con);
if (isset($_POST['submit'])) {
        $id = $_POST['updateId'];
        $cat_title = $_POST['cat_title'];
        $cat_image = $_FILES['cat_image'];
        $date = date('Y-m-d H:i:s');
        $cat_discount = $_POST['cat_discount'];
    
    $CategoryUpdate->setImage($cat_title);
    $CategoryUpdate->setDiscount($cat_discount);
    $CategoryUpdate->updateCategory($id);
    
}
?>