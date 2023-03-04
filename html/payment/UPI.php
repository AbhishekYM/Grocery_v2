<?php 
include("/var/www/html/Grocery/html/master/nav.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>UPI Payment Gateway</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <br><br><br><br>
  <div class="container">
    <h2 class="my-4 text-center">UPI Payment Gateway</h2>
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <form>
          <div class="form-group">
            <label for="upiID">UPI ID:</label>
            <input type="text" class="form-control" id="upiID" placeholder="Enter UPI ID" required>
          </div>
          <div class="form-group">
            <label for="amount">Amount:</label>
            <input type="number" class="form-control" id="amount" placeholder="Enter Amount" required>
          </div>
          <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" placeholder="Enter Description" required></textarea>
          </div>
         <a href="OTP.php"> x<button type="submit" class="btn btn-primary btn-block my-4">Pay Now</button></a>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
