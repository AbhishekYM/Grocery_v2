<?php
include('D:/xampp/htdocs/Grocery/database/connection.php');
session_start();

?>

<!--Code for font awesone cdn-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--Code for font awesone cdn-->

<!--Code for linking css file-->
<link rel="stylesheet" type="text/css" href="/Grocery/css/style.css">
<!-- <link rel="stylesheet" type="text/css" href="/Grocery/html/product-details/style.css"> -->
<!--Code for linking css file-->
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<link rel="icon" type="image/x-icon" class="fa fa-shopping-basket" href="">
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> -->

<!--Header Section-->
<header class="header">
	<a href="/Grocery/#" class="logo"><i class="fa fa-shopping-basket" aria-hidden="true"></i>grocery</a>

	<nav class="navbar">
		<a href="/Grocery/#home">Home</a>
		<a href="/Grocery/#features">Feature</a>
		<a href="/Grocery/#products">Products</a>
		<a href="/Grocery/#categories">Categories</a>
		<a href="/Grocery/#review">Reviews</a>
		<a href="/Grocery/#blogs">Blogs</a>
	</nav>

	<div class="icons">
		<div class="fa fa-bars" id="menu-btn"></div>
		<div class="fa fa-search" id="search-btn"></div>
		<div class="fa fa-shopping-cart" id="cart-btn"></div>
		<?php
		if (!isset($_SESSION['user_id'])) {
			echo '<div class="fa fa-user" id="login-btn"></div>';
		} else {
			echo '<a href="/Grocery/app/user/logout.php"><div class="fa fa-sign-out" id="logout-btn"></div></a>';
		}
		?>
	</div>


	<form action="" class="search-form" method="post">
		<input type="search" id="search-box" placeholder="search">
		<!-- <label for="search-box" class="fa fa-search"></label> -->
		<input type="submit" value="Search" name="submit">
	</form>
	<?php
	if (isset($_POST['submit'])) {
		$submit = $_POST['submit'];
		$sql = "SELECT * FROM product WHERE id LIKE '%$submit%'";
		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				?>
				<div class="product-content">
					<div class="product-img">
						<img src="/Grocery/storage/image/<?php echo $row['featured_image']; ?>" alt="product image">
					</div>
				</div>
				<div>
					<button type="button" class="btn-cart"
						onclick="addToCart(<?php echo $row['id']; ?>,<?php echo $userId; ?>,<?php echo $row['qty']; ?>,'<?php echo $row['description']; ?>')">
						add to cart
						<span><i class="fas fa-plus"></i></span>
					</button>
					<button type="button" class="btn-buy"> <a href="/Grocery/html/payment/payment.php">buy now</a>
			
				</div>
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
					<p class="">
						<?php echo $row['price']; ?>
					</p>
				</div>
				<div class="off-info">
				</div>
				</div>
				<?php
			}
		}
	} else {
		echo "No results found.";
	}
	?>
	<div class="shopping-cart">
		<div class="box">

			<i class="fa fa-trash"></i>
			<img src="/Grocery/storage/image/cart-img-1.png" alt="">
			<div class="content">
				<h3>Watermelon</h3>
				<span class="price">100</span>
				<span class="quantity">Qty: 2</span>
			</div>
		</div>
		<div class="box">
			<i class="fa fa-trash"></i>
			<img src="/Grocery/storage/image/cart-img-3.png" alt="">
			<div class="content">
				<h3>Chicken</h3>
				<span class="price">100</span>
				<span class="quantity">Qty: 2</span>
			</div>
		</div>
		<div class="box">
			<i class="fa fa-trash"></i>
			<img src="/Grocery/storage/image/cart-img-2.png" alt="">
			<div class="content">
				<h3>Onion</h3>
				<span class="price">100</span>
				<span class="quantity">Qty: 2</span>
			</div>
		</div>
		<div class="total"> total : 300/-</div>
		<a href="#" class="btn" id="cart-btn">Checkout</a>
	</div>
	<form action="" method="post" class="login-form">
		<h3>Login now</h3>
		<?php
		if (isset($_POST['login'])) {
			$user_email = $_POST['user_email'];
			$user_password = md5($_POST['user_password']);

			$select = "SELECT * FROM user WHERE email = '$user_email' AND password = '$user_password'";

			$result = mysqli_query($con, $select);
			// print_r($result);	
			if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_array($result);
				$_SESSION['name'] = $row['full_name'];
				$_SESSION['user_id'] = $row['id'];

				if ($row['type'] == 'admin') {

					$_SESSION['name'];
					// print_r($row['full_name']);
		
					header(('location:/Grocery/html/Admin/admin.php'));
				} elseif ($row['type'] == 'user') {

					$_SESSION['name'];
					header(('location:/Grocery/index.php'));
				}
			} else {
				$error = "incorrect email or password";
			}
		}
		?>
		<input type="email" name="user_email" class="box" placeholder=" your email">
		<input type="password" name="user_password" class="box" placeholder=" your password">
		<p>Forget Your password <a href="">Click Here</a></p>
		<p>Dont Have An Account <a href="/Grocery/app/user/signup.php">Create Now</a></p>
		<!-- <input type="submit" value="Login Now" class="btn "> -->
		<button name="login" type="submit" class="btn"> Login</button>
	</form>

	<?php
	if (isset($error)) {
		echo '<span class="error-msg' . $error . '</span>';
	}
	?>
</header>
<!--Header Section-->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="/Grocery/js/script.js"></script>