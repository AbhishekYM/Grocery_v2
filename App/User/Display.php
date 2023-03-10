<?php
include '/var/www/html/Grocery/Database/Connection.php';
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
                
                <a class="fa fa-trash" class="btn btn-outline-danger" class="text-light" href="/Grocery/App/User/Delete.php?deleteid=<?php echo $row['id'] ?>" style="color:red;"></a>
            </td>
        </tr>
        <?php
    }
}
?>