<?php
if (!isset($_SESSION['user_name'])) {
}
?>
<!DOCTYPE html>
<html>

<head>
	<script>
		window.onload = function () {
			document.getElementById('preloader').style.display = "none";
			document.getElementById('abc ').style.display = "block";
		}
	</script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> -->
	<link rel="stylesheet" href="/var/www/html/Grocery/html/product-details/style.css">
	<meta cha set="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Grocery Store</title>
	<style>
		.banner {
			width: 100%;
			height: 90vh;
			position: relative;
			overflow: hidden;
			border-radius: 15px !important;
			/* margin: 0px 10px !important; */
		}

		.slider {
			width: 100%;
			height: 100vh;
			position: absolute;
			top: 0;
		}

		#slideImg {
			width: 100%;
			height: 90vh;
			animation: zoom 5s linear infinite;
		}

		@keyframes zoom {
			0% {
				transform: scale(1.2);
			}

			15% {
				transform: scale(1);
			}

			85% {
				transform: scale(1);
			}

			100% {
				transform: scale(1.2);
			}

		}

		.overlay {
			width: 100%;
			height: 100vh;
			background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7));
			position: absolute;
			top: 0;
		}

		.content1 {
			width: 60%;
			margin: 160px auto 0;
			text-align: center;
			color: #fff;
		}

		.content h1 {
			font-size: 5rem;
		}

		.shop {
			width: 200px;
			padding: 15px 0;
			text-align: center;
			margin: 0 15px;
			border-radius: 25px;
			font-weight: bold;
			border: 2px solid green;
			background: green;
			color: #fff !important;
			cursor: pointer;
		}

		.shop:hover {
			/* background: ; */
			border: 2px solid green;
		}

		.span {
			color: var(--green);
		}

		.searchType {
			width: 532px;
			flex: 2 0 250px;
			box-sizing: border-box;
			border: 1px solid #888;
			border-right: none;
			border-radius: 0;
			box-shadow: none;
			font: 1.4rem ProximaNova-Regular;
			height: 30px;
			padding: 2px 12px 0;
			color: #222;
			text-overflow: ellipsis;
			white-space: nowrap;
			background: #fff;
		}

		.searchButton {

			flex: 0 1;
			-webkit-box-sizing: border-box;
			box-sizing: border-box;
			padding: 0.35em 0.75em;
			cursor: pointer;
			background-color: green;
		}
	</style>
</head>

<body onload="myFunction()">
	<?php
	include "html/master/nav.php";
	?>

	<br><br><br><br>
	<div id="loading">
		<!-- <img src="/Grocery/storage/image/loader.gif" alt=""> -->
	</div>
	<form action="" class="search-form" method="post" style="margin-left:476px;">
		<!-- <input type="search" id="search-box" placeholder="search" name="searchTerm"> -->
		<!-- <label for="search-box" class="fa fa-search"></label> -->
		<!-- <input type="submit" value="search" name="submit"> -->
		<input aria-label="productSearch" autocomplete="off" type="text" id="productSearch" name="searchTerm"
			placeholder="Search for Products..." class="searchType" value="" style="
	width: 388px;
	margin-left: 74px;
">
		<button type="submit" name="submit" class="searchButton"><svg viewBox="0 0 20 20" height="15px">
				<path
					d="M19.755 18.58l-4.808-4.808a8.423 8.423 0 1 0-1.18 1.179l4.808 4.804a.833.833 0 1 0 1.18-1.175zm-11.326-3.4a6.753 6.753 0 1 1 6.755-6.752 6.76 6.76 0 0 1-6.755 6.752zm0 0"
					fill="#fff" data-name="Layer 18"></path>
			</svg></button>
		<!-- <button type="submit"  name="submit" class="btn btn-primary">Submit</button> -->
	</form>

	<?php
	if (isset($_POST['submit'])) {
		$searchTerm = $_POST['searchTerm'];
		// $product = "SELECT * FROM product WHERE title LIKE '%$searchTerm%'";
		// $category = "SELECT * FROM category WHERE title LIKE '%$searchTerm%'";
		// $sql = "SELECT * FROM product Join table category ON product.id = category.id where product_title LIKE '%$searchTerm%' OR category.title LIKE '%$searchTerm%'";
		$sql = "SELECT * from product as t1 JOIN category as t2 ON t1.id = t2.product_id where t1.title LIKE '%$searchTerm%'OR t2.title LIKE '%$searchTerm%' ORDER BY t1.title DESC";

		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$id = $row['id'];
				$title = $row['title'];
				$image = $row['image'];
				$discount = $row['discount'];
				?>
				<table class=" table-bordered">
					<thead>
						<tr>
							</th>
					</thead>
					<tbody>
						<tr>
							<th scope="row">
								<div class="split left">
									<div class="centered">

										<div class="product" style="margin-left:106px;">
											<div class="product-content" style="width:10%;">
												<div class="product-img">
													<h1>Products</h1>
													<img src='/Grocery/storage/image<?php echo $row['featured_image']; ?>'
														alt="product image">
												</div>
											</div>
											<br>
											<div>
												<button type="button" class="btn-cart"
													onclick="addToCart(<?php echo $row['id']; ?>,<?php echo $userId; ?>,<?php echo $row['qty']; ?>,'<?php echo $row['description']; ?>')">
													add to cart
													<span><i class="fas fa-plus"></i></span>
												</button>
												<button type="button" class="btn-buy"> <a
														href="/Grocery/html/payment/payment.php">buy now</a>
													<span><i class="fas fa-shopping-cart"></i></span>
												</button>
											</div>
											<div class="product-info" style="margin: 5px;width: 249px;">
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
												<p class="">RS.
													<?php echo $row['price']; ?>
												</p>
											</div>
											<!-- <--end of single product-->

							<td>
								<div class='box' style="border-radius: 50px;margin-left: 695px;">
									<h1>Categories</h1>
									<h1>looking for more products.... Click below for more
										<?php echo $title ?>
									</h1>
									<img src="/Grocery/storage/image<?php echo $row['image'] ?>" style="width: 200px;">
									<h3>
										<?php echo $title ?>
									</h3>
									<p>Upto
										<?php echo $discount ?>
									</p>
									<a href='/Grocery/index.php?category=<?php echo $id; ?>' class='btn'>shop now</a>
								</div>
							</td>
							<?php
			}
		} else {
			echo "No results found.";
		}
	}
	?>
				</div>
				</div>
				</th>

			</tr>
		</tbody>
	</table>

	<!--product -->

	<!--Banner-->
	<div class="title">
		<h1 class="heading" style="font-size: 25px; margin-top: -45px;"> Welcome <span>
				<?php
				if (!isset($_SESSION['name'])) {
					echo "User";
				}
				if (isset($_SESSION['name'])) {
					echo $_SESSION['name'];
				}
				?>
			</span> </h1>
		<div class="row">
			<div class="col-md-12" style="margin: 0px 5px;">
				<div class="banner">
					<div class="slider">
						<img src="/Grocery/storage/image/pexels-carlo-martin-alcordo-2449665 (1).jpg" id="slideImg"
							alt="" srcset="">
					</div>
					<div class="overlay" style="">
						<div class="content1">
							<h1>Fresh And <span class="span"> Organic </span>Products For You</h1>
							<br><br>
							<p style="font-size:14px;">An online grocer is either a brick-and-mortar supermarket or
								grocery
								store that allows online ordering,or a standalone e-commerce service that includes
								grocery
								items. There is usually a delivery charge for this service.</p>
							<div style="margin-top: 40px;">
								<button type="button" class="shop">
									<a href="/Grocery/html/product-details/details.php" style="color:#fff">
										Shop Now
									</a>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<script>
		var slideImg = document.getElementById("slideImg");
		var images = new Array(
			"/Grocery/storage/image/pexels-carlo-martin-alcordo-2449665 (1).jpg",
			"/Grocery/storage/image/pexels-rene-asmussen-3167310.jpg",
			"/Grocery/storage/image/pexels-maria-orlova-4916298.jpg",
			"/Grocery/storage/image/pexels-matheus-cenali-2733918.jpg",
			"/Grocery/storage/image/pexels-viktoria-slowikowska-5677627.jpg"
		);
		var len = images.length;
		var i = 0;
		function slider() {
			if (i > len - 1) {
				i = 0;
			}
			slideImg.src = images[i];
			i++;
			setTimeout('slider()', 5000);
		}
	</script>
	<!--Banner-->
	<!--Feature Section-->
	<section class="features" id="features">
		<h1 class="heading"> our <span>features</span> </h1>
		<div class="row">
			<div class="col-md-12 main-div-card">
				<div class="card-body">
					<div class="box-container">
						<?php
						$select_query = "select * from feature";
						$result_query = mysqli_query($con, $select_query);
						while ($row = mysqli_fetch_assoc($result_query)) {
							$id = $row['id'];
							$name = $row['name'];
							$description = $row['description'];
							$image = $row['image'];
							?>
							<div class='box' style=" border-radius: 50px;">
								<img src="/Grocery/storage/image/<?php echo $row['image'] ?>" alt='' srcset=''>
								<h3>
									<?php echo $name ?>
								</h3>
								<p>
									<?php echo $description ?>
								</p>
								<a href='/Grocery/html/Read More/feature.php?feature=<?php echo $id; ?>' class='btn'
									name="submit">read more</a>
							</div>
							<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<!--Feature Section-->
	<!--Products Section-->
	<section class="products" id="products">
		<h1 class="heading"> our <span>products</span> </h1>
		<a href='/Grocery/html/product-details/details.php' class='btn'
			style="display:flex;float: right;margin-right: 25px;">show
			more</a>
		<!-- <div class="swiper product-slider"> -->
		<div class="swiper product-slider" style="width: 100%; ">
			<div class='swiper-wrapper'>
				<?php
				$select_query = "select * from product";
				$result_query = mysqli_query($con, $select_query);
				while ($row = mysqli_fetch_assoc($result_query)) {
					$product_id = $row['id'];
					$code = $row['code'];
					$product_category = $row['category'];

					$product_title = $row['title'];
					$product_price = $row['price'];
					$description = $row['description'];
					$product_image = $row['featured_image'];
					$quantity = $row['qty'];
					?>
					<div class='swiper-slide box' style=" border-radius: 50px;">
						<img src="/Grocery/storage/image/<?php echo $row['featured_image'] ?>" />
						<h1>
							<?php echo $product_title ?>
						</h1>
						<div class='price'>Price:
							<?php echo $product_price ?>
						</div>
						<div class='description'>
							<?php echo $description ?>
						</div>
						<div class='quantity'>Product Avaliable:
							<?php echo $quantity ?>
						</div>
						<div class='stars'>
							<i class='fa fa-star'></i>
							<i class='fa fa-star'></i>
							<i class='fa fa-star'></i>
							<i class='fa fa-star'></i>
							<i class='fa fa-star-half'></i>
							<br>
							<form action="/Grocery/app/cart/add.php" method="post">
								<input type="hidden" name="productId" value="<?php echo $product_id; ?>">
								<input type="hidden" name="quantity" value="1">

								<?php
								$cartArrary = array($product_id);
								array_push($cartArrary, $product_id);
								$cartArrary = [$product_id];
									print_r($cartArrary);
								if (!in_array($cartArrary, $product_id)) { ?>
									<button type='submit' name="addCart" class="btn">Add to Cart</a>
									<?php																						
								} else {?>
									<button type='submit' name="addCart" class="btn">Go to Cart</a
								<?php
								}
								?>
							</form>
						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</section>
	<!--Products Section-->

	<!--Categories Section-->
	<section class="categories" id="categories">
		<h1 class="heading">product <span>categories</span> </h1>
		<div class="box-container">
			<?php
			$select_query = "select * from category ";
			$result_query = mysqli_query($con, $select_query);
			while ($row = mysqli_fetch_assoc($result_query)) {
				$id = $row['id'];
				$title = $row['title'];
				$image = $row['image'];
				$discount = $row['discount'];
				?>
				<div class="box" style=" border-radius: 50px;">
					<img src="/Grocery/storage/image/<?php echo $row['image'] ?>" alt=''>
					<h3>
						<?php echo $title ?>
					</h3>
					<p>Upto
						<?php echo $discount ?>
					</p>
					<a href='/Grocery/categories_detail.php?category=<?php echo $id; ?>' class='btn'>View More</a>
				</div>
				<?php
			}
			?>
		</div>
	</section>
	<!--Categories Section-->

	<!--Review Section-->
	<section class="review" id="review">
		<h1 class="heading">Customer's <span>Review</span> </h1>
		<div class="swiper review-slider">
			<div class="swiper-wrapper">
				<?php
				$select_query = "SELECT * FROM `review` WHERE role = 1";
				$result_query = mysqli_query($con, $select_query);
				while ($row = mysqli_fetch_assoc($result_query)) {
					$id = $row['id'];
					$photo = $row['photo'];
					$description = $row['description'];
					$name = $row['name'];
					?>
					<div class="swiper-slide box" style=" border-radius: 50px;">
						<img src="/Grocery/storage/image/<?php echo $row['photo'] ?>" alt="">
						<p>
							<?php echo $row['description'] ?>
						</p>
						<h3>
							<?php echo $row['name'] ?>
						</h3>
						<div class="stars">
							<i class="fa fa-stars"></i>
							<i class="fa fa-stars"></i>
							<i class="fa fa-stars"></i>
							<i class="fa fa-stars"></i>
							<i class="fa fa-stars-half"></i>
						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</section>
	<!--Review Section-->
	<!--Blog Section-->
	<section class="blogs" id="blogs">
		<h1 class="heading">Our <span>blogs</span> </h1>
		<div class="box-container">
			<?php
			$select_query = "select * from blog ";
			$result_query = mysqli_query($con, $select_query);
			while ($row = mysqli_fetch_assoc($result_query)) {
				$id = $row['id'];
				$image = $row['image'];
				$date = $row['date'];
				$description = $row['description'];
				?>
				<div class="box" style=" border-radius: 50px;">
					<img src="/Grocery/storage/image<?php echo $row['image'] ?>" alt="" srcset="">
					<div class="content">
						<div class="icons">
							<a href="#"><i class="fa fa-user"></i>By User</a>
							<a href="#"><i class="fa fa-calender"></i>
								<?php echo $row['date'] ?>
							</a>
						</div>
						<h3>
							<?php echo $row['title'] ?>
						</h3>
						<p>
							<?php echo $row['description'] ?>
						</p>
						<a href="" class="btn">Read More</a>
					</div>
				</div>
				<?php
			}
			?>
		</div>

	</section>
	<!--Blog Section-->

	<!--Footer Section-->
	<?php
	include('/var/www/html/Grocery/app/review/insert.php');
	?>

	<!--Footer Section-->



	<!--Footer Section-->
	<form action="" method="post" enctype="multipart/form-data" style="
	margin-bottom: 25px !important;
">

		<h1 class="heading">More<span>Info</span> </h1>
		<div class="row">
			<div class="col-md-12 " style="">
				<section class="footer" style="margin: -20px;margin:2px 10px !important;">

					<div class="box-container">
						<div class="box">
							<h3>GROCO <i class="fa fa-shopping-basket "></i> </h3>
							<p>Welcome to our Website. We Provide Fresh and Hygenic Products</p>
							<div class="share">
								<a href="" class="fa fa-facebook"></a>
								<a href="" class="fa fa-instagram"></a>
								<a href="" class="fa fa-linkedin"></a>
							</div>
						</div>
						<div class="box">
							<h3>Contact Info</h3>
							<a href="#" class="links"> <i class="fa fa-phone"></i>+91 8160646216 </a>
							<a href="#" class="links"> <i class="fa fa-phone"></i>+91 8160646216 </a>
							<a href="#" class="links"> <i class="fa fa-phone"></i>+91 8160646216 </a>
							<a href="#" class="links"> <i class="fa fa-envelope"></i>info@groco.com </a>
							<a href="#" class="links"> <i class="fa fa-marker"></i>Pune, India </a>
						</div>

						<div class="box">
							<h3>Quick Links</h3>
							<a href="#" class="links"> <i class="fa fa-arrow-right"></i>Home</a>
							<a href="#" class="links"> <i class="fa fa-arrow-right"></i>Feature</a>
							<a href="#" class="links"> <i class="fa fa-arrow-right"></i>Products</a>
							<a href="#" class="links"> <i class="fa fa-arrow-right"></i>Categories</a>
							<a href="#" class="links"> <i class="fa fa-arrow-right"></i>Review</a>
							<a href="#" class="links"> <i class="fa fa-arrow-right"></i>Blogs</a>
						</div>

						<div class="box">
							<h3>Reviews</h3>
							<p>Provide us rerview</p>
							<input type="file" placeholder="Your review" class="email" name="photo" id="formFile">
							<!--Name-->
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Enter Name</label>
								<input type="text" name="name" class="form-control" id="exampleFormControlInput1"
									placeholder="name@example.com">
							</div>
							<!--Name-->
							<!--Description-->
							<!-- <div class="form-floating">
								<textarea class="form-control" name="description" placeholder="Leave a review here"
								id="floatingTextarea"></textarea>
							</div> -->


							<div class="mb-3">
								<!-- <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label> -->
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
									name="description" placeholder="Leave a review here"></textarea>
							</div>
							<br>
							<!--Description-->
							<!-- <input type="button" value="Subscribe" class="btn" name="insert_review"> -->
							<button type="submit" name="insert_review" class="btn">Submit Now</button>
						</div>
					</div>
				</section>
			</div>
		</div>
	</form>

	<!--Footer Section-->
	<script src="js/slider.js"></script>
	<script>
		var preloader = document.getElementById('loading');
		function myFunction() {
			preloader.style.display = 'none';
		}
	</script>

</body>

</html>