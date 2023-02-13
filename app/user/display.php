<?php
include 'D:\xampp\htdocs\Grocery\database\connection.php';
$sql = "select * from user where type='user'" ;
$result = mysqli_query($con, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
         ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['full_name']?></td>
            <td><?php echo $row['username']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['password']?></td>
            <td><?php echo $row['type']?></td>
            <td><?php echo $row['mobile']?></td>
            <td>
                
                <button class="btn btn-danger"><a class="text-light" href="/Grocery/app/user/delete.php?deleteid=<?php echo $row['id'] ?>">Delete</a></button>
            </td>
        </tr>
        <?php
    }
}
?>