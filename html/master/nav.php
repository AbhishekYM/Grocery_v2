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
<header class="header" style="padding:10px;">
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