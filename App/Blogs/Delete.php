<?php
// include '/var/www/html/Grocery/Database/Connection.php';
// if(isset($_GET['deleteid']))
// {
//     $id = $_GET['deleteid'];
//     $sql = "delete from blog where id=$id";
//     $result = mysqli_query($con, $sql);
//     if($result)
//     {
//      header('location:/Grocery/html/Admin/Blog.php');
//     }
//     else
//     {
//         die(mysqli_error($con));
//     }
// }
?>

<?php
include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';
class BlogDelete
{
    private $connection;

    public function __construct($con)
    {
        $this->connection = $con;
    }
    public function deleteBlogById($id)
    {
        $sql = "DELETE FROM blog WHERE id=$id";
        $result = mysqli_query($this->connection, $sql);
        if ($result) {
            header('location:/Grocery/html/Admin/Blog/Blog.php');
        }
    }
}
$db = new DatabaseConnection();
$con = $db->getConnection();
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $blogDelete = new BlogDelete($con);
    $blogDelete->deleteBlogById($id);
}
?>