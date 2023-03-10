<?php
// $con = mysqli_connect("localhost", "root", "Abhi@123", "project");
// if(!$con)
// {
//     die(mysqli_error($con));
// }
?>

<?php
class DatabaseConnection {
    private $host = "localhost";
    private $username = "root";
    private $password = "Abhi@123";
    private $database = "project";
    private $connection;
    public function __construct() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }
    public function getConnection() {
        return $this->connection;
    }
}

?>
