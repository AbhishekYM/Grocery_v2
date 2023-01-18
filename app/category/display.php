<?php
include 'D:\xampp\htdocs\Grocery\database\connection.php';
$sql = "select * from category";
$result = mysqli_query($con, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
         ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['title']?></td>
            <td><?php echo $row['image']?></td>
            <td><?php echo $row['discount']?></td>
            <td>
                <button class="btn btn-primary"><a class="text-light" href="display.php?updateid=<?php echo $row['id'] ?>">
                Update</a></button>
                <button class="btn btn-danger"><a class="text-light" href="/Grocery/app/category/delete.php?deleteid=<?php echo $row['id'] ?>">Delete</a></button>
            </td>
        </tr>
        <?php
    }
}
?>