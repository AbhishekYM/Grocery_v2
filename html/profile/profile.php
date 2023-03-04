<?php 
// include("/var/www/html/Grocery/html/master/nav.php");
incliude("/var/www/html/Grocery/database/connection.php");
$id = $_GET['updateid'];
$sql = "Select * from user where id='$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$full_name = $row['full_name'];
$user_email = $row['email'];
// $user_password = md5($_PO['user_password']);
$user_mobile = $row['mobile'];

if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $user_email = $_POST['email'];
    // $user_password = md5($_POST['user_password']);
    // $user_confpassword = md5($_POST['user_confpassword']);
    $user_mobile = $_POST['user_mobile'];
    $sql = "update user set   full_name='$full_name', email='$user_email', mobile='$user_mobile'where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
       // echo "updated";
        header('location:/Grocery/html/profile/profile.php');
    } else {
        die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Profile | GOCO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<form method="post">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="/Grocery/index.php">GOCO</a>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
      <a class="nav-link" href="#">My Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Orders</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Logout</a>
    </li>
  </ul>
</nav>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-body" style="color:green;">
          <h4 class="card-title">My Account</h4>
          <ul class="list-group" ">
          <a href=""> <li class="list-group-item " style="color:green;">Profile</li></a>
           <a href=""> <li class="list-group-item" style="color:green;">Orders</li></a>
           <!-- <a href=""><li class="list-group-item">Wishlist</li></a> -->
           <a href="/Grocery/html/profile/address.php"><li class="list-group-item" style="color:green;">Address</li></a>
           <a href=""><li class="list-group-item" style="color:green;">Payment Methods</li></a>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title" style="color:green;">My Profile</h4>
          <form style="color:green;">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo $row['full_name'];?>">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"value="<?php echo $row['email'];?>">
            </div>
            <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="tel" class="form-control" id="phone" placeholder="Enter phone number" name="phone"value="<?php echo $row['mobile'];?>">
            </div>
         
            <button type="submit" name="submit" class="btn btn-primary">Update Profile</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
</body>
</html>

</body>
</html>