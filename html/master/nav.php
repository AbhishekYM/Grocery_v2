<?php
include('D:/xampp/htdocs/Grocery/database/connection.php');

?>

<!--Code for font awesone cdn-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--Code for font awesone cdn-->

<!--Code for linking css file-->
<link rel="stylesheet" type="text/css" href="/Grocery/css/style.css">
<!--Code for linking css file-->
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<link rel="icon" type="image/x-icon" class="fa fa-shopping-basket" href="">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

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
	<div class="title">
		<h3>hi, <span>User</span></h3>
		<h1>welcome <span>

			</span> </h1>
	</div>
	<div class="icons">
		<div class="fa fa-bars" id="menu-btn"></div>
		<div class="fa fa-search" id="search-btn"></div>
		<div class="fa fa-shopping-cart" id="cart-btn"></div>
		<div class="fa fa-user" id="login-btn"></div>
	</div>

	<form action="" class="search-form">
		<input type="search" id="search-box" placeholder="search-here">
		<label for="search-box" class="fa fa-search"></label>
	</form>

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
			// $full_name = $_POST['full_name'];
			// $user_username = $_POST['user_username'];
			$user_email = $_POST['user_email'];
			$user_password = md5($_POST['user_password']);
			// $user_confpassword = md5($_POST['user_confpassword']);
			// $user_mobile = $_POST['user_mobile'];
			// $user_type = $_POST['user_type'];
			//insert query
			$select = "select * from user where email = '$user_email' && password = '$user_password'";

			$result = mysqli_query($con, $select);
			// print_r($result);	
			if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_array($result);
				 print_r($row['full_name']);
				if ($row['type'] == 'admin') {
					echo "<script> alert ('admin')</script>)";
					$_SESSION['admin_name'] = $row['name'];
					header(('location:/Grocery/html/Admin/admin.php'));
				} elseif ($row['type'] == 'user') {
					echo "<script> alert ('user')</script>)";
					$_SESSION['user_name'] = $row['name'];
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
		echo '<span class="error-msg' .$error.'</span>';
	}
	?>
</header>
<!--Header Section-->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="/Grocery/js/script.js"></script>