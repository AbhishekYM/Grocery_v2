<?php
include("/var/www/html/Grocery/html/Master/Nav.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <br><br><br><br>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">OTP Verification</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <?php
                                // if (isset($_SESSION['GetNumberFrom'])) {
                                //     $otp = $_SESSION['GetNumberFrom'];
                                //     echo $otp;
                                //     // echo "Welcome back, $otp!";
                                //     echo "Congratulations!Your order has been placed";
                                // } else {
                                //     // echo "You are not logged in.";
                                //     echo "Incorrect otp";
                                // }
                                ?>
                                <label for="GetNumberFrom">Enter OTP</label>
                                <input type="text" class="form-control" id="otp" name="GetNumberFrom" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary btn-block">Verify OTP</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
  $GetNumberFrom = $_POST['GetNumberFrom']; 
//   $_SESSION['GetNumberFrom'];
  $otp = $_SESSION['otp'];
//   echo $_SESSION['GetNumberFrom'];
  if ($_SESSION['otp'] == $GetNumberFrom) {
    // print_r($_SESSION['otp']) ; 
    // echo "OTP is valid";
    echo "<script> alert ('Success'); </script>"; 
  } else {
    // echo "Invalid OTP";
    echo "<script> alert ('Invalid OTP'); </script>"; 
  }
}
?>
