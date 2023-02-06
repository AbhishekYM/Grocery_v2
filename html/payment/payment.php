<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Payment Page</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto mt-5">
        <div class="card card-body">
          <h1 class="text-center mb-3">Payment</h1>
          <form action="" method="post">
            <div class="form-group">
              <label for="card-number">Card Number:</label>
              <input type="text" class="form-control" id="card-number" placeholder="Enter card number">
            </div>
            <div class="form-group">
              <label for="name-on-card">Name on Card:</label>
              <input type="text" class="form-control" id="name-on-card" placeholder="Enter name on card">
            </div>
            <div class="form-group">
              <label for="expiry-date">Expiry Date:</label>
              <input type="text" class="form-control" id="expiry-date" placeholder="MM/YY">
            </div>
            <div class="form-group">
              <label for="cvc">CVC:</label>
              <input type="text" class="form-control" id="cvc" placeholder="Enter CVC">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
