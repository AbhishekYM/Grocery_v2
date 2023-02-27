<?php
include '/var/www/html/Grocery/database/connection.php';
$sql = "select * from review";
$result = mysqli_query($con, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td>
                <?php echo $row['id'] ?>
            </td>
            <td>
            <td><img src='/Grocery/storage/image//<?php echo $row['photo']; ?>' </td style="width:96px">
            </td>
            <td>
                <?php echo $row['description'] ?>
            </td>
            <td>
                <?php echo $row['name'] ?>
            </td>
            <td>
                <?php
                if ($row['role'] == '0') {
                    ?><button class="btn btn-primary update"
                        style="border-radius: 8px; padding: 9px; background-color:#26be26"><a class="text-light"
                            style="font-size: large; text-decoration: none;"
                            href="/Grocery/app/review/update.php?updateid=<?php echo $row['id'] ?>">Accept<img
                                src="/Grocery/storage/image/icons8-done-24.png" alt="">
                        </a></button>
                    <button class="btn btn-danger delete" style="border-radius: 8px; padding: 9px;" disabled>
                        <a class="text-light" style="font-size: large; text-decoration: none;"
                            href="/Grocery/app/review/decline.php?deleteid=<?php echo $row['id'] ?>">Decline<img
                                src="/Grocery/storage/image/icons8-multiply-24.png" alt="" style="padding-left: 5px;"></a></button>
                    <?php
                } else { ?>
                    <button class="btn btn-primary update" style="border-radius: 8px; padding: 9px; background-color:#26be26"
                        disabled><a class="text-light" style="font-size: large; text-decoration: none;"
                            href="/Grocery/app/review/update.php?updateid=<?php echo $row['id'] ?>">Accept<img
                                src="/Grocery/storage/image/icons8-done-24.png" alt="">
                        </a></button>
                    <button class="btn btn-danger delete" style="border-radius: 8px; padding: 9px;">
                        <a class="text-light" style="font-size: large; text-decoration: none;"
                            href="/Grocery/app/review/decline.php?deleteid=<?php echo $row['id'] ?>">Decline<img
                                src="/Grocery/storage/image/icons8-multiply-24.png" alt="" style="padding-left: 5px;"></a></button>
                    <?php

                }
                ?>
            </td>
        </tr>
        <?php
    }
}
?>

<style>
    .update:hover {
        text-decoration: underline;
    }

    .delete:hover {
        text-decoration: underline;
    }
</style>