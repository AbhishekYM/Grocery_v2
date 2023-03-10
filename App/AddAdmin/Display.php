<?php

?>



<?php
class  AdminUsersTable {
    private $connection;
    public function __construct($con) {
        $this->connection = $con;
        include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';
        $db = new DatabaseConnection();
        $con = $db->getConnection();
    }
    public function getAllAdmins() {
        // $con = $this->db->getConnection();
        $sql = "select * from user where type='admin'" ;
        $result = mysqli_query($this->connection, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo  "<tr>";
                     echo "<td>{$row['id']}</td>";
                   echo "<td>{$row['full_name']}</td>";
                   echo "<td>{$row['email']}</td>";
                   echo "<td>{$row['password']}</td>";
                   echo "<td>{$row['type']}</td>";
                   echo "<td>{$row['mobile']}</td>";
                    echo "<td>";
                       echo "<a class='fa fa-trash' class='btn btn-outline-danger' class='text-light' href='/Grocery/app/user/delete.php?deleteid={$row['id']}' style='color:red;'></a>";
                   echo "</td>";
               echo "</tr>";
            }
        }
    }
}
$AdminUsersTable = new AdminUsersTable($con);
$AdminUsersTable->getAllAdmins();
?>
