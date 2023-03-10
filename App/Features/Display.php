<?php

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
    
    public function getAllFeatures()
    {
        $sql = "select * from feature";
        $result = mysqli_query($this->con, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                          <td>{$row['id']}</td>
                          <td>{$row['name']}</td>
                          <td><img src='/Grocery/Storage/image/{$row['image']}' style='width:96px'></td>
                          <td>{$row['description']}</td>
                          <td>
                              <a class='fa fa-pencil btn btn-outline-primary text-light' href='/Grocery/html/Admin/Feature/UpdateFeature.php?updateid={$row['id']}' style='color:blue; margin:8px;'></a>
                              <a class='fa fa-trash btn btn-outline-danger text-light' href='/Grocery/App/Features/Delete.php?deleteid={$row['id']}' style='color:red; margin:8px;'></a>
                          </td>
                      </tr>";
            }
        }
    }
}

$feature = new Feature($con);
$feature->getAllFeatures();
