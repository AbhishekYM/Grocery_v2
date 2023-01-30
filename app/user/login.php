<?php
  include('D:/xampp/htdocs/Grocery/database/connection.php');
  session_start();
  ?>

<?php
	include "D:/xampp/htdocs/Grocery/html/master/nav.php";
	?>
 
<?php
if (isset($_POST['login'])) {

    $full_name = $_POST['full_name'];
    $user_username = $_POST['user_username'];
    $user_email = $_POST['user_email'];
    $user_password = md5($_POST['user_password']);
    $user_confpassword = md5($_POST['user_confpassword']);
    $user_mobile = $_POST['user_mobile'];
    $user_type = $_POST['user_type'];
    //insert query
    $select = "select * from user where email = '$user_email' && password = '$user_password'";
    $result = mysqli_query($con, $select);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        if ($row['user_type'] == 'admin') {
            echo "<script> alert ('')</script>)";
            $_SESSION['admin_name'] = $row['name'];
            header(('location:admin.php'));
        } elseif ($row['user_type'] == 'user') {
            echo "<script> alert ('')</script>)";
            $_SESSION['user_name'] = $row['name'];
            header(('location:index.php'));



        }
    } else {
        $error[] = "incorrect email or password";
    }
    // $insert_query = "insert into user(full_name,username,email,password,type,mobile)  values ('$full_name','$user_username','$user_email','$user_password','$user_mobile','$user_type')";

    // $sql_execute = mysqli_query($con, $insert_query);
    // if ($sql_execute) {
    //   echo "<script>alert('Data inserted successfully')</script>";
    // } else {
    //   die((mysqli_error($con)));
    // }
}
?>