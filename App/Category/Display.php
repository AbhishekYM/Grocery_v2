<?php
class Category
{
    private $connection;
    public function __construct($con)
    {
        $this->connection = $con;
        include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';
        $db = new DatabaseConnection();
        $con = $db->getConnection();
    }
    public function getAllCategory()
    {
        // $con = $this->db->getConnection();
        $sql = "SELECT * FROM category";
        $result = mysqli_query($this->connection, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['title']}</td>";
                echo "<td><img src='/Grocery/Storage/image/{$row['image']}' </td style='width:96px'>";
                echo "<td>{$row['discount']}</td>";
                echo "<td>
            <a class='fa fa-pencil btn btn-outline-primary text-light' href='/Grocery/html/Admin/Category/UpdateCategories.php?updateid={$row['id']}' style='color:blue; margin:8px;'></a>
            <a class='fa fa-trash btn btn-outline-danger text-light' href='/Grocery/App/Category/Delete.php?deleteid={$row['id']}' style='color:red; margin:8px;'></a>
          </td>";
                echo "</tr>";
            }
        }
    }
}
$Category = new Category($con);
$Category->getAllCategory();
?>