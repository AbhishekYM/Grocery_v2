<?php
include('D:\xampp\htdocs\Grocery\database\connection.php');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Product Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <!-- font awesome -->
</head>

<body>
  <div class="products">
    <div class="container">
      <img src="/Grocery/storage/image/banner-img.jpg"  alt="" Special Grocery items With Offers>
      <h1 class="lg-title"></h1>
      <div class="product-items">
        <?php
        $select_query = "select * from product ";
        $result_query = mysqli_query($con, $select_query);
        while ($row = mysqli_fetch_assoc($result_query)) {
          $product_id = $row['id'];
          $code = $row['code'];
          $product_category = $row['category'];
          $product_brand = $row['brand'];
          $product_title = $row['title'];
          $product_price = $row['price'];
          $description = $row['description'];
          $product_image = $row['featured_image'];
          $quantity = $row['qty'];
          ?>
          <!-- single product -->
          <div class="product">
            <div class="product-content">
              <div class="product-img">
                <img src="/Grocery/storage/image/<?php echo $row['featured_image'] ?>" alt="product image">

              </div>
            </div>
            <br>
            <div>
              <button type="button" class="btn-cart"> add to cart
                <span><i class="fas fa-plus"></i></span>
              </button>
              <button type="button" class="btn-buy"> buy now
                <span><i class="fas fa-shopping-cart"></i></span>
              </button>
            </div>
            <div class="product-info">
              <div class="product-info-top">
                <h2 class="sm-title">lifestyle</h2>
                <div class="rating">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
              </div>
              <a href="#" class="product-name">
                <?php echo $row['description'] ?>
              </a>
              <p class="product-price">$ 150.00</p>
              <p class="product-price">$ 133.00</p>
            </div>
            <div class="off-info">
              <h2 class="sm-title">25% off</h2>
            </div>
          </div>
          <!-- end of single product -->
        <?php
        }
        ?>
      </div>
    </div>
    <!-- product col right -->
    <div class="product-col-right">
      <div class="product-col-r-top flex">
        <?php
        $select_query = "select * from category where title='vegetable' ";
        $result_query = mysqli_query($con, $select_query);
        while ($row = mysqli_fetch_assoc($result_query)) {
          $id = $row['id'];
          $title = $row['title'];
          $discount = $row['discount'];
          $image = $row['image'];
          ?>
          <div class="product-col-content">
            <img src="/Grocery/storage/image/<?php echo $row['image'] ?>" alt="">
            <h2 class="sm-title">Fresh Product</h2>
            <h2 class="md-title">
              <?php echo $row['title'] ?>
            </h2>
            <p class="text-light"> Discount:
              <?php echo $row['discount'] ?>
            </p>
            <button type="button" class="btn-dark">Shop now</button>
          </div>
        </div>

        <div class="product-col-r-bottom">
          <!-- left -->
          <div class="flex">
            <div class="product-col-content">

              <h2 class="sm-title">Fresh & Hygenic Fruits </h2>
              <h2 class="md-title">Fruits </h2>
              <p class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae consequatur
                facilis eligendi quibusdam voluptatibus exercitationem autem voluptatum, beatae architecto odit,
                quisquam repellat. Deleniti, architecto ab.</p>
              <button type="button" class="btn-dark">Shop now</button>
            </div>
          </div>
          <!-- right -->
          <div class="flex">
            <div class="product-col-content">
              <h2 class="sm-title">Fresh meat products</h2>
              <h2 class="md-title">Meat</h2>
              <p class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae consequatur
                facilis eligendi quibusdam voluptatibus exercitationem autem voluptatum, beatae architecto odit,
                quisquam repellat. Deleniti, architecto ab.</p>
              <button type="button" class="btn-dark">Shop now</button>
            </div>
          </div>
        </div>
      <?php
        }
        ?>
    </div>
  </div>
</body>

</html>
</body>

</html>
<script src="script.js"></script>
</body>

</html>