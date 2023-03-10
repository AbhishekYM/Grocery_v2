
<?php

require_once '/var/www/html/Grocery/Database/DatabaseConnection.php';

class ProductTable {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllProducts() {
        $sql = "SELECT * FROM product";
        $result = mysqli_query($this->db, $sql);
        if ($result) {
            $products = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $products[] = $row;
            }
            return $products;
        } else {
            return false;
        }
    }

    public function deleteProduct($id) {
        $sql = "DELETE FROM product WHERE id=$id";
        $result = mysqli_query($this->db, $sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}

$productTable = new ProductTable($con);
$products = $productTable->getAllProducts();
if ($products) {
    foreach ($products as $row) {
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['code']?></td>
            <td><?php echo $row['category']?></td>
            <td><?php echo $row['title']?></td>
            <td><?php echo $row['price']?></td>
            <td><?php echo $row['description']?></td>
            <td><img src='/Grocery/Storage/image/<?php echo $row['featured_image'];?>' style="width=96px;"></td>
            <td><?php echo $row['qty']?></td>
            <td><?php echo $row['status']?></td>
            <td>
                <a class="fa fa-pencil btn btn-outline-primary text-light" href="/Grocery/html/Admin/UpdateProduct.php?updateid=<?php echo $row['id'] ?>" style="color:blue; margin:8px;"></a>
                <a class="fa fa-trash btn btn-outline-danger text-light" href="/Grocery/App/Product/Delete.php?deleteid=<?php echo $row['id'] ?>" style="color:red; margin:8px;"></a>
            </td>
        </tr>
        <?php
    }
}
?>
