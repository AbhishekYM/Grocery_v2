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
	
	<!--Banner Section-->
	<div class="home" id="home">
		<section class="content">
			<h3>Fresh And <span> Organic </span>Products For You</h3>
			<p>An online grocer is either a brick-and-mortar supermarket or grocery store that allows online ordering,
				or a standalone e-commerce service that includes grocery items. There is usually a delivery charge for
				this service.</p>
			<a href="#" class="btn">shop now</a>
	</div>
	</section>
	<!--Banner Section-->

	<!--Feature Section-->
	<section class="features" id="features">
		<h1 class="heading"> our <span>features</span> </h1>
		<div class="box-container">
			<div class="box">
				<img src="/Grocery/storage/image/feature-img-1.png" alt="" srcset="">
				<h3>fresh and organic</h3>
				<p>Our website provides fresh and hygenic grocery items.We provide organic items to provide best quality
					products to the customer</p>
				<a href="#" class="btn">read more</a>
			</div>
			<div class="box">
				<img src="/Grocery/storage/image/feature-img-2.png" alt="" srcset="">
				<h3>free delivery</h3>
				<p>Our website provides free delivery on all the products min(RS.500 and above).Our website provides one
					day delivery to the plus customer member.</p>
				<a href="#" class="btn">read more</a>
			</div>
			<div class="box">
				<img src="/Grocery/storage/image/feature-img-3.png" alt="" srcset="">
				<h3>Easy Payments</h3>
				<p>Our website provides all the methods of payment i.e UPI payment, Credit card, Debit card.Our website
					uses end to end encription in storing details.</p>
				<a href="#" class="btn">read more</a>
			</div>
		</div>

	</section>
	<!--Feature Section-->

	<!--Products Section-->
	<section class="products" id="products">
		<h1 class="heading"> our <span>products</span> </h1>

		<div class="swiper product-slider">
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
				echo "	<div class='swiper-wrapper'>
	<div class='swiper-slide box'>
		<img src='/Grocery/storage/image/product-1.png' alt=''>
		<h1>$product_title</h1>
		<div class='price'>$product_price</div>
		<div class='description'>$description</div>
		<div class='quantity'>Product Avaliable: $quantity </div>
		<div class='stars'>
			<i class='fa fa-star'></i>
			<i class='fa fa-star'></i>
			<i class='fa fa-star'></i>
			<i class='fa fa-star'></i>
			<i class='fa fa-star-half'></i>
		</div>

	</div>
</div>
";
			}
			?>



	</section>
	<!--Products Section-->

	<!--Categories Section-->
	<section class="categories" id="categories">
		<h1 class="heading">product <span>categories</span> </h1>
		<div class="box-container">
			<?php
			$selectVegetable = "select * from category where title='vegetable'";
			$executeSelectVegetable = mysqli_query($con, $selectVegetable);
			$rowsselectVegetable = mysqli_fetch_array($executeSelectVegetable);
			?>
			<div class="box">
				<img src="/Grocery/storage/image/<?php echo $rowsselectVegetable['image']; ?>" alt="">
				<h3>
					<?php echo $rowsselectVegetable['title']; ?>
				</h3>
				<p>Upto
					<?php echo $rowsselectVegetable['discount']; ?> off
				</p>
				<a href="html/category/index.php?category='vegetable'" class="btn">shop now</a>
			</div>
			<?php
			$selectVegetable = "select * from category where title='fruits'";
			$executeSelectVegetable = mysqli_query($con, $selectVegetable);
			$rowsselectVegetable = mysqli_fetch_array($executeSelectVegetable);
			?>

			<div class="box">
				<img src="/Grocery/storage/image/<?php echo $rowsselectVegetable['image']; ?>" alt="">
				<h3>
					<?php echo $rowsselectVegetable['title']; ?>
				</h3>
				<p>Upto
					<?php echo $rowsselectVegetable['discount']; ?> off
				</p>
				<a href="html/category/index.php?category='Fruits'" class="btn">shop now</a>
			</div>
			<?php
			$selectVegetable = "select * from category where title='Dairy Products'";
			$executeSelectVegetable = mysqli_query($con, $selectVegetable);
			$rows = mysqli_fetch_array($executeSelectVegetable)
				?>
			<div class="box">
				<img src="/Grocery/storage/image/<?php echo $rowsselectVegetable['image']; ?>" alt="">
				<h3>
					<?php echo $rows['title']; ?>
				</h3>
				<p>Upto
					<?php echo $rows['discount']; ?> off
				</p>
				<a href="html/category/index.php?category='Dairy Product'" class="btn">shop now</a>
			</div>

			<?php
			$selectVegetable = "select * from category where title='Fresh Meat'";
			$executeSelectVegetable = mysqli_query($con, $selectVegetable);
			$rowsselectVegetable = mysqli_fetch_array($executeSelectVegetable);
			?>
			<div class="box">
				<img src="/Grocery/storage/image/<?php echo $rowsselectVegetable['image']; ?>" alt="">
				<h3>
					<?php echo $rowsselectVegetable['title']; ?>
				</h3>
				<p>Upto
					<?php echo $rowsselectVegetable['discount']; ?> off
				</p>
				<a href="html/category/index.php?category='Fresh Meat'" class="btn">shop now</a>
			</div>
		</div>
	</section>
	<!--Categories Section-->

	<!--Review Section-->
	<section class="review" id="review">
		<h1 class="heading">Customer's <span>Review</span> </h1>
		<div class="swiper review-slider">
			<div class="swiper-wrapper">
				<div class="swiper-slide box">
					<img src="/Grocery/storage/image/pic-1.png" alt="">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
						the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
						of type and scrambled it to make a type specimen book.</p>
					<h3>Natsu Dragneel</h3>
					<div class="stars">
						<i class="fa fa-stars"></i>
						<i class="fa fa-stars"></i>
						<i class="fa fa-stars"></i>
						<i class="fa fa-stars"></i>
						<i class="fa fa-stars-half"></i>
					</div>
				</div>

				<div class="swiper-slide box">
					<img src="/Grocery/storage/image/pic-2.png" alt="">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
						the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
						of type and scrambled it to make a type specimen book.</p>
					<h3>Lucy Hearflia</h3>
					<div class="stars">
						<i class="fa fa-stars"></i>
						<i class="fa fa-stars"></i>
						<i class="fa fa-stars"></i>
						<i class="fa fa-stars"></i>
						<i class="fa fa-stars-half"></i>
					</div>
				</div>
				<div class="swiper-slide box">
					<img src="/Grocery/storage/image/pic-3.png" alt="">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
						the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
						of type and scrambled it to make a type specimen book.</p>
					<h3>Gray Labstar</h3>
					<div class="stars">
						<i class="fa fa-stars"></i>
						<i class="fa fa-stars"></i>
						<i class="fa fa-stars"></i>
						<i class="fa fa-stars"></i>
						<i class="fa fa-stars-half"></i>
					</div>
				</div>
				<div class="swiper-slide box">
					<img src="/Grocery/storage/image/pic-4.png" alt="">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
						the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
						of type and scrambled it to make a type specimen book.</p>
					<h3>Mirajane</h3>
					<div class="stars">
						<i class="fa fa-stars"></i>
						<i class="fa fa-stars"></i>
						<i class="fa fa-stars"></i>
						<i class="fa fa-stars"></i>
						<i class="fa fa-stars-half"></i>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Review Section-->

	<!--Blog Section-->
	<section class="blogs" id="blogs">
		<h1 class="heading">Our <span>blogs</span> </h1>
		<div class="box-container">
			<div class="box">
				<img src="/Grocery/storage/image/blog-1.jpg" alt="" srcset="">
				<div class="content">
					<div class="icons">
						<a href="#"><i class="fa fa-user"></i>By User</a>
						<a href="#"><i class="fa fa-calender"></i>1st May, 2021</a>
					</div>
					<h3>Fresh and Organic Vegetables and Fruits</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
						the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
						of type and scrambled it to make a type specimen book.</p>
					<a href="" class="btn">Read More</a>
				</div>
			</div>

			<div class="box">
				<img src="/Grocery/storage/image/blog-2.jpg" alt="" srcset="">
				<div class="content">
					<div class="icons">
						<a href="#"><i class="fa fa-user"></i>By User</a>
						<a href="#"><i class="fa fa-calender"></i>1st May, 2021</a>
					</div>
					<h3>Fresh and Organic Vegetables and Fruits</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
						the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
						of type and scrambled it to make a type specimen book.</p>
					<a href="" class="btn">Read More</a>
				</div>
			</div>

			<div class="box">
				<img src="/Grocery/storage/image/blog-3.jpg" alt="" srcset="">
				<div class="content">
					<div class="icons">
						<a href="#"><i class="fa fa-user"></i>By User</a>
						<a href="#"><i class="fa fa-calender"></i>1st May, 2021</a>
					</div>
					<h3>Fresh and Organic Vegetables and Fruits</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
						the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
						of type and scrambled it to make a type specimen book.</p>
					<a href="" class="btn">Read More</a>
				</div>
			</div>
		</div>
	</section>
	<!--Blog Section-->

	<script src="js/slider.js"></script>
</body>

</html>