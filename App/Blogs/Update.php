<?php
// include('/var/www/html/Grocery/Database/Connection.php');
// $id = $_GET['updateid'];
// $sql = "Select * from blog ";
// $result = mysqli_query($con, $sql);
// $row = mysqli_fetch_assoc($result);
// $img_name = $row['image'];
// //  $date = $row['date'];
// $description = $row['description'];

// if (isset($_POST['submit'])) {
//     $image = $_FILES["image"]["name"];
//     $img_loc = $_FILES['image']['tmp_name'];
//     $img_name = $_FILES['image']['name'];
//     $img_des = '/Grocery/storage/image'.$image;
//     // move_uploaded_file($img_loc,'image/'.$img_name);
//      move_uploaded_file($img_loc,'/Grocery/storage/image'.$img_name);
//     //$movefile = move_uploaded_file($img_loc,$img_des);
//     // $date = $_POST['date'];
//     $description = $_POST['description'];
//     $sql = "update blog set id='$id', image='$img_name', description='$description'";
//     $result = mysqli_query($con, $sql);
//     if ($result) {
//         // echo $result;
//     //    echo "updated";
//          header('location:/Grocery/html/Admin/Blog.php');
//     } else {
//         die(mysqli_error($con));
//     }
// }
?>
<?php
include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';
class BlogUpdate
{
    public $id;
    public $image;
    public $description;
    private $con;
    public function __construct($id, $image, $description, $con)
    {
        $this->id = $id;
        $this->image = $image;
        $this->description = $description;
        $this->con = $con;
    }
    public function updateBlog($id)
    {
       
        $img_name = $this->image;
        $sql = "update blog set image='$img_name', description='$this->description' where id='$id'";
        $result = mysqli_query($this->con, $sql);
        if ($result) {
            header('location:/Grocery/html/Admin/Blog/Blog.php');
        }
    }
    public static function getById($id, $con)
    {
        $sql = "select * from blog where id = '$id'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        return new BlogUpdate( $row['id'], $row['image'], $row['description'], $con);
    }
    public function setImage($image)
    {
        $this->image = $image;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
}
$db = new DatabaseConnection();
$con = $db->getConnection();
$id = $_GET['updateid'];
$blogUpdate = BlogUpdate::getById($id, $con);
if (isset($_POST['submit'])) {
    $id = $_POST['updateId'];
    $image = $_FILES["image"]["name"];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    move_uploaded_file($img_loc, '/var/www/html/Grocery/Storage/image/' . $img_name);
    $description = $_POST['description'];
    $blogUpdate->setImage($img_name);
    $blogUpdate->setDescription($description);
    $blogUpdate->updateBlog($id);
    
}
?>