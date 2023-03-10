<?php 
include("/var/www/html/Grocery/html/Master/Nav.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Select Payment Option</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <br><br><br><br><br><br><br><br>
  <div class="container">
    <h2 class="my-4 text-center">Select Payment Option</h2>
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="list-group">
          <a href="Card.php" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Debit Card</h5>
              <small class="text-muted">No transaction fee</small>
            </div>
            <p class="mb-1">Pay using your debit card.</p>
          </a>
                <a href="Upi.php" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">UPI</h5>
              <small class="text-muted">No transaction fee</small>
            </div>
            <p class="mb-1">Pay using your UPI account.</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
