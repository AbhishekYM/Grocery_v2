<?php
include "html/master/nav.php";
include 'D:\xampp\htdocs\Grocery\database\connection.php';
$category_id = $_GET['category'];
$sql = "select * from product where category_id=$category_id";
$result = mysqli_query($con, $sql);
if ($result) {
    ?>
    <div class="products">
        <div class="container">
            <br><br>
            <h1 class="heading"> our <span>products</span> </h1>
            <div class="product-items">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="product">
                        <div class="product-content">
                            <div class="product-img">
                                <img src="/Grocery/storage/image/<?php echo $row['featured_image']; ?>" alt="product image">
                            </div>
                        </div>
                        <br>
                        <div>
                            <button type="button" class="btn-cart"
                                onclick="addToCart(<?php echo $row['id']; ?>,<?php echo $userId; ?>,<?php echo $row['qty']; ?>,'<?php echo $row['description']; ?>')">
                                add to cart
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
                    <?php
                }
}
?>
        </div>
    </div>
</div>