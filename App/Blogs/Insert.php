<?php
// include '/var/www/html/Grocery/Database/Connection.php';
// if (isset($_POST['insert_blog'])) {

//     $image = $_FILES["image"]["name"];
//     $img_loc = $_FILES['image']['tmp_name'];
//     $img_name = $_FILES['image']['name'];
//     $img_des = '/Grocery/storage/image/'.$image;
//     // move_uploaded_file($img_loc,'image/'.$img_name);
//      move_uploaded_file($img_loc,'/Grocery/storage/image/'.$img_name);
//     //$movefile = move_uploaded_file($img_loc,$img_des);
//     $title = $_POST['title'];
//     $date = date('Y-m-d H:i:s');
//     $description = $_POST['description'];
//     $insert_feature = "insert into blog(image,date,description,title) values('$img_name','$date','$description','$title')";
//     $result_query = mysqli_query($con, $insert_feature);
//         if ($result_query) 
//         {
//         // echo "<script> alert ('blog inserted succesfully')</script>";
//         header ("location:/Grocery/html/Admin/Blog.php");
//         }
// }
?>
<?php
include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';
class Blog
{
    private $connection;
    public function __construct($con)
    {
        $this->connection = $con;
       
    }
    public function insertBlog($image, $title, $description)
    {
        $img_name = $image['name'];
        $img_loc = $image['tmp_name'];
        $img_des = '/var/www/html/Grocery/Storage/image' . $img_name;
        move_uploaded_file($img_loc, '/var/www/html/Grocery/Storage/image' . $img_name);
        $date = date('Y-m-d H:i:s');
        $insert_feature = "INSERT INTO blog(image, date, description, title) VALUES('$img_name', '$date', '$description', '$title')";
        $result_query = mysqli_query($this->connection, $insert_feature);
        if ($result_query) {
            header("location:/Grocery/html/Admin/Blog/Blog.php");
        }
    }
}
$db = new DatabaseConnection();
$con = $db->getConnection();
if (isset($_POST['insert_blog'])) {
    $blog = new Blog($con);
    $blog->insertBlog($_FILES['image'], $_POST['title'], $_POST['description']);
}
?>