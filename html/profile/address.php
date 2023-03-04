<?php
include '/var/www/html/Grocery/database/connection.php';
error_reporting(0);
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
    include("/var/www/html/Grocery/app/address/insert.php");
    include("/var/www/html/Grocery/html/master/nav.php");
    ?>
    <br><br><br><br><br><br>
    <form action="/Grocery/app/address/insert.php" method="post" enctype="multipart/form-data" style="font-size:1.5rem;">
        
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3" style="
    margin-top: 52px;
">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">My Account</h4>
                            <ul class="list-group" ">
          <a href="/Grocery/html/profile/profile.php"> <li class=" list-group-item " style=" color:black;">Profile</li></a>
                                <a href="">
                                    <li class="list-group-item" style="color:black;">Orders</li>
                                </a>
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
                                    autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" id="address"
                                    placeholder="Enter address">
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" name="city" class="form-control" id="city" placeholder="Enter city">
                            </div>
                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" name="state" class="form-control" id="state"
                                    placeholder="Enter state">
                            </div>
                            <div class="form-group">
                                <label for="zipcode">Zipcode</label>
                                <input type="text" name="zipcode" class="form-control" id="zipcode"
                                    placeholder="Enter zipcode">
                            </div>
                            <!-- <button type="submit" name="submit" class="btn btn-primary">Save Address</button> -->
                            <input type="submit" name="submit" class="btn btn-primary" value="Save Address" style="margin-left:65px;">

                        </div>
                    </div>
                        <div class="col-md-4">
                                    <h3>Recent Addresses</h3>
                                    <ul class="list-group">
                        <?php
                        $sql = "select * from address";
                        $result = mysqli_query($con, $sql);
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                               
                                        <li class="list-group-item">
                                            <b><?php echo $row['name'] ?></b><bR>
                                            <?php echo $row['address'] ?>,
                                            <?php echo $row['city'] ?>,
                                            <?php echo $row['state'] ?>,
                                            <?php echo $row['zipcode'] ?>.
                                            <br>
                                            <hr>
                                              <a class="btn btn-outline-primary" class="text-light"
                                    href="/Grocery/html/profile/edit.php?updateid=<?php echo $row['id'] ?>"
                                    style="color:blue;border:0px">Edit</a>
                                <a class="btn btn-outline-danger" class="text-light"
                                    href="/Grocery/app/Blogs/delete.php?deleteid=<?php echo $row['id'] ?>"
                                    style="color:red;border:0px">Delete</a>
                                        </li>
                                      
                                    </ul>
                                
                            <?php
                            }
                        }
                        ?>
 </div>
                    </div>
                </div>
    </form>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>