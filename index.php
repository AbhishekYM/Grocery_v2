<?php

if (!isset($_SESSION['user_name'])) {
}
?>
<!DOCTYPE html>
<html>

<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<link rel="stylesheet" href="/Grocery/html/product-details/style.css">
	<meta cha set="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Grocery Store</title>
	<style>
		.banner {
			width: 100%;
			height: 90vh;
			position: relative;
			overflow: hidden;
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

		.content {
			width: 60%;
			margin: 160px auto 0;
			text-align: center;
			color: #fff;
		}

		.content h1 {
			font-size: 5rem;
		}

		.content h3 {
			width: 50px;
			margin: 20px auto 100px;
			font-weight: 100;
			line-height: 25px;
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
			color: green;
			cursor: pointer;
		}

		.shop:hover {
			background: ;
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

		.searchButton{

			flex: 0 1;
			-webkit-box-sizing: border-box;
			box-sizing: border-box;
			padding: 0.35em 0.75em;
			cursor: pointer;
			background-color: green;
		}
	</style>
</head>

<body onload="slider()">
	<?php
	include "html/master/nav.php";
	?>
	<br><br><br><br>
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
		$product = "SELECT * FROM product WHERE title LIKE '%$searchTerm%'";
		$category = "SELECT * FROM category WHERE title LIKE '%$searchTerm%'";
		$result = mysqli_query($con, $product);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				?>
				<!-- single product -->
				<div class="product">
					<div class="product-content" style="width:10%;">
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
					<div class="product-info" style="
													margin: 5px;
													width: 249px;
												">
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
					<!-- end of single product -->
					<?php

			}
		} else {
			echo "No results found.";
		}
	}

	?>
	</div>
	</div>
	<div class="title">

		<h1 class="heading" style="font-size: 20px; margin-top: -45px;"> Welcome <span>
				<?php
				if (!isset($_SESSION['name'])) {
					echo "User";
				}
				if (isset($_SESSION['name'])) {
					echo $_SESSION['name'];
				}
				?>
			</span> </h1>


		<div class="banner">
			<div class="slider">
				<img src="/Grocery/storage/image/pexels-carlo-martin-alcordo-2449665 (1).jpg" id="slideImg" alt=""
					srcset="" style="border-radius:72px;">
			</div>
			<div class="overlay" style="border-radius:72px">
				<div class="content">
					<h1>Fresh And <span class="span"> Organic </span>Products For You</h1>
					<br><br>
					<p style="font-size:14px;">An online grocer is either a brick-and-mortar supermarket or grocery
						store that allows online
						ordering,
						or a standalone e-commerce service that includes grocery items. There is usually a delivery
						charge
						for
						this service.</p>
					<br><br><br><br><br><br><br><br><br><br><br>
					<div>
						<button type="button" class="shop"> <a href="/Grocery/html/product-details/details.php">Shop
								Now</a>
						</button>

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









	<!--Banner Section-->
	<!-- <div class="banner">
			<div class="slider">
		<div class="home" id="home">
			<section class="content">
				<h3>Fresh And <span> Organic </span>Products For You</h3>
				<p>An online grocer is either a brick-and-mortar supermarket or grocery store that allows online
					ordering,
					or a standalone e-commerce service that includes grocery items. There is usually a delivery charge
					for
					this service.</p>
				<a href="/Grocery/html/product-details/details.php" class="btn">shop now</a>
		</div>
			</div>
		</div>
		</section>
		<script>
			var sliderImg = document.getElementById("slideImg");
			var images = new Array(
				"D:\xampp\htdocs\Grocery/storage/image/product-1.png",
				"/Grocery/storage/image/banner-img.jpg",
				"/Grocery/storage/image/banner-img.jpg",
				"/Grocery/storage/image/banner-img.jpg"
			);
			var len = images.length;
			var i=0;
			function slider(){
				if(i > len-1){
					i=0;
				}
				sliderImg.src = images[i];
				i++;
				setTimeout('slider()',3000);

			}
		</script> -->
	<!--Banner Section-->

	<!--Feature Section-->
	<section class="features" id="features">
		<h1 class="heading"> our <span>features</span> </h1>
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
	</section>
	<!--Feature Section-->

	<!--Products Section-->
	<section class="products" id="products">
		<h1 class="heading"> our <span>products</span> </h1>
		<a href='/Grocery/html/product-details/details.php' class='btn' style="display:flex; float: right;">show
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
					$product_brand = $row['brand'];
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
						<div class='price'>
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
							<a href="/Grocery/html/product-details/details.php" class="btn">Read More</a>
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

				<div class='box' style=" border-radius: 50px;">
					<img src="/Grocery/storage/image/<?php echo $row['image'] ?>" alt=''>
					<h3>
						<?php echo $title ?>
					</h3>
					<p>Upto
						<?php echo $discount ?>
					</p>
					<a href='/Grocery/categories_detail.php?category=<?php echo $id; ?>' class='btn'>shop now</a>
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
			<div class="box" style=" border-radius: 50px;">
				<img src="/Grocery/storage/image/blog-1.jpg" alt="" srcset="">
				<div class="content">
					<div class="icons">
						<a href="#"><i class="fa fa-user"></i>By User</a>
						<a href="#"><i class="fa fa-calender"></i>1st May, 2021</a>
					</div>
					<h3>Fresh and Organic Vegetables and Fruits</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
						been
						the industry's standard dummy text ever since the 1500s, when an unknown printer took a
						galley
						of type and scrambled it to make a type specimen book.</p>
					<a href="" class="btn">Read More</a>
				</div>
			</div>

			<div class="box" style=" border-radius: 50px;">
				<img src="/Grocery/storage/image/blog-2.jpg" alt="" srcset="">
				<div class="content">
					<div class="icons">
						<a href="#"><i class="fa fa-user"></i>By User</a>
						<a href="#"><i class="fa fa-calender"></i>1st May, 2021</a>
					</div>
					<h3>Fresh and Organic Vegetables and Fruits</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
						been
						the industry's standard dummy text ever since the 1500s, when an unknown printer took a
						galley
						of type and scrambled it to make a type specimen book.</p>
					<a href="" class="btn">Read More</a>
				</div>
			</div>

			<div class="box" style=" border-radius: 50px;">
				<img src="/Grocery/storage/image/blog-3.jpg" alt="" srcset="">
				<div class="content">
					<d iv class="icons">
						<a href="#"><i class="fa fa-user"></i>By User</a>
						<a href="#"><i class="fa fa-calender"></i>1st May, 2021</a>
				</div>
				<h3>Fresh and Organic Vegetables and Fruits</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
					been
					the industry's standard dummy text ever since the 1500s, when an unknown printer took a
					galley
					of type and scrambled it to make a type specimen book.</p>
				<a href="" class="btn">Read More</a>
			</div>
		</div>
		</div>
	</section>
	<!--Blog Section-->


	<!--Footer Section-->
	<!--Footer Section(Insert Query)-->
	<?php
	include('D:\xampp\htdocs\Grocery\app\review\insert.php');
	?>
	<h1 class="heading">Write<span>Review</span> </h1>

	<div class="box">
		<div class="footer">
			<div class="col-1" style="font-size: 2rem;">
				<h3>UseFull Links</h3>
				<a href="">About</a>
				<a href="">Services</a>
				<a href="">Contact</a>
				<a href="">Shop</a>
				<a href="">Bog</a>
			</div>
			<div class="col-2" style="font-size: 2rem;">
				<h3>Write a Review</h3>
				<form action="" method="post" enctype="multipart/form-data">
					<!--Image-->
					<div class="mb-5">
						<label for="formFile" class="form-label">Upload Image</label>
						<input class="form-control" type="file" name="photo" id="formFile">

					</div>
					<!--Image-->


					<!--Name-->
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Enter Name</label>
						<input type="text" name="name" class="form-control" id="exampleFormControlInput1"
							placeholder="name@example.com">
					</div>
					<!--Name-->

					<!--Description-->
					<div class="form-floating">
						<textarea class="form-control" name="description" placeholder="Leave a review here"
							id="floatingTextarea"></textarea>
					</div><br>
					<!--Description-->
					<button type="submit" name="insert_review" class="btn">Submit Now</button>
				</form>
			</div>
			<div class="col-3" style="font-size: 2rem;">
				<h3>Address</h3>
				<p>123, XYZ Road, Banglore</p>
			</div>
			<div class="social-links">

			</div>

			<!--Footer Section-->

			<script src="js/slider.js"></script>




</body>

</html>