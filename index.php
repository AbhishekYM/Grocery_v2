<?php

if (!isset($_SESSION['user_name'])) {
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta cha set="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Grocery Store</title>

</head>

<body>
	<?php
	include "html/master/nav.php";
	?>
	<div class="title">
		<h1 class="heading" style="font-size: 20px; margin-top: 80px;"> Welcome <span>
				<?php if (!isset($_SESSION['name'])) {
					echo "User";
				}
				if (isset($_SESSION['name'])) {
					echo $_SESSION['name'];
				}
				?>
			</span> </h1>


		<!--Banner Section-->
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
		</section>
		<!--Banner Section-->

		<!--Feature Section-->
		<section class="features" id="features">
			<h1 class="heading"> our <span>features</span> </h1>
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
						<a href='#' class='btn'>read more</a>
					</div>

					<?php
				}
				?>
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