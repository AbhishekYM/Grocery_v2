<?php
include '/var/www/html/Grocery/database/connection.php';
// error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <?php
    include("/var/www/html/Grocery/html/master/nav.php");
    include("/var/www/html/Grocery/app/address/update.php");
    ?>
    <br><br><br><br><br><br>
    <form action="" method="POST" enctype="multipart/form-data" style="font-size:1.5rem;">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3" style="margin-top: 52px;">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">My Account</h4>
                            <ul class="list-group" ">
                                <a href="/Grocery/html/profile/profile.php"> <li class=" list-group-item " style=" color:black;">Profile</li></a>
                                <a href=""><li class="list-group-item" style="color:black;">Orders</li></a>
                                <!-- <a href=""><li class="list-group-item">Wishlist</li></a> -->
                                <a href="/Grocery/html/profile/address.php">
                                    <li class="list-group-item" style="color:black;">Address</li>
                                </a>
                                <a href="">
                                    <li class="list-group-item" style="color:black;">Payment Methods</li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container col-md-9">
                    <div class="row">
                    <div class="card" style="padding:10px;">
                        <div class="col-md-8">
                            <h3>Shipping Address</h3>
                            <hr>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter name"
                                    autocomplete="off" value="<?php echo $row['name'];?>">

                                    <input type="hidden" name="id" class="form-control" placeholder="Enter name"
                                    autocomplete="off" value="<?php echo $row['id'];?>">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" id="address"
                                    placeholder="Enter address" value="<?php echo $row['address'];?>">
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" name="city" class="form-control" id="city" placeholder="Enter city" value="<?php echo $row['city'];?>">
                            </div>
                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" name="state" class="form-control" id="state"
                                    placeholder="Enter state" value="<?php echo $row['state'];?>">
                            </div>
                            <div class="form-group">
                                <label for="zipcode">Zipcode</label>
                                <input type="text" name="zipcode" class="form-control" id="zipcode"
                                    placeholder="Enter zipcode" value="<?php echo $row['zipcode'];?>">
                            </div>
                            <!-- <button type="submit" name="submit" class="btn btn-primary">Save Address</button> -->
                            <input type="submit" name="submit" class="btn btn-primary" value="Save Address" style="margin-left:65px;">

                        </div>
                    </div>
                       
                    </div>
                </div>
    </form>
<?php 
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    // $userId = $_SESSION['user_id'];
    $name = $_POST['name'];
    $address = $_POST['address'];   
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $sql = "update address set  name='$name',address='$address',city='$city',state='$state',zipcode='$zipcode' where id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
         echo $result;
    //  echo "updated";
        //  header('location:/Grocery/html/profile/address.php');
    } else {
        die(mysqli_error($con));
    }
}
?>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>