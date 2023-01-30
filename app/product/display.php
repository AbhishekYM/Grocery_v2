<?php
include 'D:\xampp\htdocs\Grocery\database\connection.php';
$sql = "select * from product";
$result = mysqli_query($con, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
         ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['code']?></td>
            <td><?php echo $row['category']?></td>
            <td><?php echo $row['brand']?></td>
            <td><?php echo $row['title']?></td>
            <td><?php echo $row['price']?></td>
            <td><?php echo $row['description']?></td>
            <td><?php echo $row['featured_image']?></td>
            <td><?php echo $row['qty']?></td>
            <td><?php echo $row['status']?></td>
            <td>
                <button class="btn btn-primary"><a class="text-light" href="\Grocery\app\product\update.php?updateid=<?php echo $row['id'] ?>">
                Update</a></button>
                <button class="btn btn-danger"><a class="text-light" href="\Grocery\app\product\delete.php?deleteid=<?php echo $row['id'] ?>">
                Delete</a></button>
            </td>
        </tr>
        <?php
    }
}
?>