<?php
  include('D:/xampp/htdocs/Grocery/database/connection.php');
  session_start();
  ?>


 
<?php
if (isset($_POST['login'])) {

    $full_name = $_POST['full_name'];
    $user_username = $_POST['username'];
    $user_email = $_POST['email'];
    $user_password = md5($_POST['password']);
    $user_confpassword = md5($_POST['user_confpassword']);
    $user_mobile = $_POST['mobile'];
    $user_type = $_POST['type'];
    //insert query
    // $select = "select * from user where email = '$user_email' && password = '$user_password'";
    // $result = mysqli_query($con, $select);
    // if (mysqli_num_rows($result) > 0) {
    //     $row = mysqli_fetch_array($result);
    //     if ($row['user_type'] == 'admin') {
    //         if (session_status() === PHP_SESSION_NONE) {
    //             session_start();
    //         }
            
    //         $_SESSION['admin_id'] = $row['id'] ?? '';
    //         header(('location:admin.php'));
    //     } elseif ($row['user_type'] == 'user') {
    //         if (session_status() === PHP_SESSION_NONE) {
    //             session_start();
    //         }
    //         $_SESSION['user_name'] = $row['name'];
    //         header(('location:index.php'));

 // Check if the user is a customer
 $query = "SELECT * FROM user WHERE email = '$user_email' AND password = '$user_password'";
 $result = mysqli_query($con, $query);
 if(mysqli_num_rows($result) == 1){
     // Customer login success
     session_start();
     $_SESSION['email'] = $username;
     $_SESSION['type'] = "user";
     header("Location: /Grocery/index.php");
     exit();
 }

 // Check if the user is an admin
 $query = "SELECT * FROM user WHERE email = '$user_email' AND password = '$user_password'";
 $result = mysqli_query($con, $query);
 if(mysqli_num_rows($result) == 1){
     // Admin login success
     session_start();
     $_SESSION['email'] = $user_email;
     $_SESSION['type'] = "admin";
     header("Location:/Grocery/html/Admin/admin.php");
     exit();
 }
 else{
     // Login failed
     $error = "Incorrect username or password";
 }
}

?>

<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <form method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
   
</body>
</html>