<?php
// include '/var/www/html/Grocery/Database/Connection.php';
// if(isset($_GET['deleteid']))
// {
//     $id = $_GET['deleteid'];
//     $sql = "delete from category where id=$id";
//     $result = mysqli_query($con, $sql);
//     if($result)
//     {
//         header('location:/Grocery/html/Admin/categories.php');
//     }
//     else
//     {
//         die(mysqli_error($con));
//     }
// }
?>

<?php

include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';

class CategoryDeleter
{
    private $databaseConnection;

    public function __construct(DatabaseConnection $databaseConnection)
    {
        $this->databaseConnection = $databaseConnection;
    }

    public function deleteCategory($categoryId)
    {
        $update = "update product set category_id = NULL";
        $result2 = mysqli_query($this->databaseConnection->getConnection(), $update);

        $sql = "DELETE FROM category WHERE id=$categoryId ";
        // $sql="DELETE c, p FROM category c INNER JOIN product p ON c.id = p.category_id WHERE c.id = $categoryId; 
        $result = mysqli_query($this->databaseConnection->getConnection(), $sql);
 
        if ($result) {
            header('location:/Grocery/html/Admin/Category/Categories.php');
        } else {
            die(mysqli_error($this->databaseConnection->getConnection()));
        }
    }
}

if (isset($_GET['deleteid'])) {
    $categoryId = $_GET['deleteid'];
    $categoryDeleter = new CategoryDeleter(new DatabaseConnection());
    $categoryDeleter->deleteCategory($categoryId);
}


?>
