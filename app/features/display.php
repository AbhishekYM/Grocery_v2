<?php
include 'D:\xampp\htdocs\Grocery\database\connection.php';
$sql = "select * from feature";
$result = mysqli_query($con, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
         ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['image']?></td>
            <td><?php echo $row['description']?></td>
            <td>
                <button class="btn btn-primary"><a class="text-light" href="/Grocery/html/Admin/update_feature.php?updateid=<?php echo $row['id'] ?>">
                Update</a></button>
                <button class="btn btn-danger"><a class="text-light" href="\Grocery\app\features\delete.php?deleteid=<?php echo $row['id'] ?>">Delete</a></button>
            </td>
        </tr>
        <?php
    }
}
?>