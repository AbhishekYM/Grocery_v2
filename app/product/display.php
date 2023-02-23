<?php
include '/var/www/html/Grocery/database/connection.php';
$sql = "select * from product";
$result = mysqli_query($con, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
         ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['code']?></td>
            <td><?php echo $row['category']?></td>
           
            <td><?php echo $row['title']?></td>
            <td><?php echo $row['price']?></td>
            <td><?php echo $row['description']?></td>
            <td><img src='/Grocery/storage/image//<?php echo $row['featured_image'];?>' </td style="width:96px">
            <td><?php echo $row['qty']?></td>
            <td><?php echo $row['status']?></td>
            <td>
                <a class="fa fa-pencil" class="btn btn-outline-primary" class="text-light" href="\Grocery\html\Admin\update_product.php?updateid=<?php echo $row['id'] ?>" style="color:blue; margin:8px;">
                </a>
                <a class="fa fa-trash" class="btn btn-outline-danger" class="text-light" href="\Grocery\app\product\delete.php?deleteid=<?php echo $row['id'] ?>" style="color:red; margin:8px;">
                </a>
            </td>
        </tr>
        <?php
    }
}
?>