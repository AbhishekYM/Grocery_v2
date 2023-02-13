<?php
include 'D:\xampp\htdocs\Grocery\database\connection.php';
$select_query = "SELECT * FROM product";
$result_query = mysqli_query($con, $select_query);
$userId = 2;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Product Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <!-- font awesome -->
</head>
<body>
<?php
	include "D:/xampp/htdocs/Grocery/html/master/nav.php";
	?>
  <div class="products">
    <div class="container">
      <br><br>
    <h1 class="heading"> our <span>products</span> </h1>
      <div class="product-items">
        <?php while ($row = mysqli_fetch_assoc($result_query)) { ?>
          <!-- single product -->
          <div class="product">
            <div class="product-content">
              <div class="product-img">
                <img src="/Grocery/storage/image/<?php echo $row['featured_image']; ?>" alt="product image">
              </div>
            </div>
            <br>
            <div>
              <button type="button" class="btn-cart" onclick="addToCart(<?php echo $row['id']; ?>,<?php echo $userId; ?>,<?php echo $row['qty']; ?>,'<?php echo $row['description']; ?>')"> add to cart
                <span><i class="fas fa-plus"></i></span>
              </button>
              <button type="button" class="btn-buy"> <a href="/Grocery/html/payment/payment.php">buy now</a> 
                <span><i class="fas fa-shopping-cart"></i></span>
              </button>
            </div>
            <div class="product-info">
              <div class="product-info-top">
                <h2 class="sm-title">lifestyle</h2>
               
                <div class='stars'>
							<i class='fa fa-star'></i>
							<i class='fa fa-star'></i>
							<i class='fa fa-star'></i>
							<i class='fa fa-star'></i>
							<i class='fa fa-star-half'></i>
							<br>
						</div>
              </div>
              <a href="#" class="product-name">
                <?php echo $row['description']; ?>
              </a>
             
              <p class="">$ 133.00</p>
            </div>
            <div class="off-info">
            </div>
          </div>
          <!-- end of single product -->
        <?php
        }
        ?>
      </div>
    </div>
    <!-- product col right -->
    
</body>
</html>
</body>
</html>
<script src="script.js"></script>
</body>
</html>