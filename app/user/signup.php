<?php
include('/var/www/html/Grocery/database/connection.php');
?>

<?php
include "/var/www/html/Grocery/html/master/nav.php";
?>

<?php
if (isset($_POST['submit'])) {

  $full_name = $_POST['full_name'];
  $user_email = $_POST['user_email'];
  $user_password = md5($_POST['user_password']);
  $user_confpassword = md5($_POST['user_confpassword']);
  $user_mobile = $_POST['user_mobile'];
  $user_type = $_POST['user_type'];
  //insert query
  $select = "select * from user where email = '$user_email' && password = '$user_password'";
  $result = mysqli_query($con, $select);
  if (mysqli_num_rows($result) > 0) {
    $error[] = 'user already';
  } else {
    if ($user_password != $user_confpassword) {
      $error[] = 'password not matched';
    } else {
      $insert = "insert into user(full_name,email,password,type,mobile) values('$full_name','$user_email','$user_password','$user_type','$user_mobile')";
      mysqli_query($con, $insert);

      header('location:/Grocery/index.php');
    }
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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Here</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <br><br><br><br><br><br>
<form class=" " action="" method="post" style="
    font-size: 2rem;
">
        <?php
        if (isset($error)) {
          foreach ($error as $error) {
            echo '<span class="error-msg" style="font-size: 2rem; color:red">' . $error . "</span>";
          }
          ;
        }
        ?>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="full_name" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="user_email" aria-describedby="emailHelp" placeholder="Enter your email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="user_password" placeholder="Enter your password">
          </div>
          <div class="form-group">
            <label for="password">Conf Password</label>
            <input type="password" class="form-control" id="password" name="user_confpassword" placeholder="Enter your password">
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="user_mobile" placeholder="Enter your phone number">
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
        </form>
      </div>
      <div class="col-md-6">
        <img src="https://via.placeholder.com/300x150.png?text=GOCO+Logo" alt="GOCO Logo">
        <h2>Sign Up for GOCO</h2>
        <p>Get access to exclusive deals and discounts by signing up for a GOCO account.</p>
      </div>
    </div>
  </div>
</form>

</body>

</html>