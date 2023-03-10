<?php

include_once '/var/www/html/Grocery/Database/DatabaseConnection.php';
// Create a new instance of the DatabaseConnection class
$db = new DatabaseConnection();
// Get the mysqli connection object
$con = $db->getConnection();
session_start();
error_reporting(0);
?>
<!-- Bootstrap start-->
<!-- Bootstrap end -->
<!--Code for font awesone cdn-->
<link rel="stylesheet" href="/Grocery/CSS/fontawesome-free-6.3.0-web/css/all.min.css">
<!--Code for font awesone cdn-->
<!--Code for linking css file-->
<link rel="stylesheet" type="text/css" href="/Grocery/CSS/index.css">
<!-- <link rel="stylesheet" type="text/css" href="/Grocery/html/product-details/style.css"> -->
<!--Code for linking css file-->
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<link rel="stylesheet" href="/Grocery/CSS/swiper.css">
<link rel="icon" type="image/x-icon" class="fa fa-shopping-basket" href="">
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> -->
<!--Header Section-->
<header class="header" style="padding:10px;">
	<a href="/Grocery/#" class="logo"><i class="fa fa-shopping-basket" aria-hidden="true"></i>GROCO</a>
	<nav class="navbar" style=" margin-left: 372px;">
		<a href="/Grocery/#home">Home</a>
		<a href="/Grocery/#features">Feature</a>
		<a href="/Grocery/#products">Products</a>
		<a href="/Grocery/#categories">Categories</a>
		<a href="/Grocery/#review">Reviews</a>
		<a href="/Grocery/#blogs">Blogs</a>
	</nav>
	<?php
	$sql = "select * from user";
	$result = mysqli_query($con, $sql);
	if ($result) {
		while ($row = mysqli_fetch_assoc($result)) {
			?>
			<a class="text-light" href="/Grocery/html/Profile/Profile.php?updateid=<?php echo $row['id'] ?>"
				style="color:blue; margin:8px;">
				<?php
		}
	}
	?>
	<h6 class="heading" style="font-size: 1.5rem;margin-left: -205px;margin-top: -27px;margin-bottom: -31px;cursor:pointer;">
			<?php
			if (!isset($_SESSION['name'])) {
				echo "User";
			}
			if (isset($_SESSION['name'])) {
				echo $_SESSION['name'];
			}
			?>
		</h6>
	</a>
	<div class="icons">
		<div class="fa fa-bars" id="menu-btn"></div>
		<div class="fa fa-search" id="search-btn"></div>
		<?php
		if (!isset($_SESSION['user_id'])) {
			echo '<div class="fa fa-user" id="login-btn"></div>';
		} else {
			echo '<a href="/Grocery/html/AddToCart/AddToCart.php"><div class="fa fa-shopping-cart" id="cart-btn"></div>';
			echo '<a href="/Grocery/App/User/Logout.php"><div class="fa fa-sign-out" id="logout-btn"></div></a>';
		}
		?>
	</div>
	<form action="" class="search-form">
		<input type="search" id="search-box" placeholder="search-here">
		<label for="search-box" class="fa fa-search"></label>
	</form>
	<div class="shopping-cart">
		<?php
		$select_cart = "SELECT `cart`.*,cart.id as cart_id,product.id as productId ,`product`.*, `cart`.`product_id`, `cart`.`user_id` FROM `cart` , `product` WHERE `cart`.`product_id` = `product`.`id` AND `cart`.`user_id` = '$_SESSION[user_id]'";
		$executeSelectCart = mysqli_query($con, $select_cart);
		while ($carts = mysqli_fetch_assoc($executeSelectCart)) {
			?>
			<div class="box">
				<a href="/Grocery/App/Cart/Delete.php?cart_id=<?php echo $carts['cart_id'] ?>" class="fa fa-trash"></a>
				<img src="s/Grocery/Storage/image<?php echo $carts['featured_image']; ?>" alt="s">
				<div class="content">
					<h3>
						<?php echo $carts['title']; ?>
					</h3>
					<span class="price">price ;
						<?php echo $carts['price']; ?>
					</span>
					<span class="quantity">Qty:
						<?php echo $carts['quantity']; ?>
					</span>
					<span class="quantity">Total :
						<?php echo $carts['price'] * $carts['quantity']; ?>
					</span>

					<form action="/Grocery/App/Cart/Update.php" method="post" id="quantity">
						<input type="hidden" name="productId" value="<?php echo $carts['productId']; ?>">
						<input type="text" placeholder="Enter" name="quantity" id="updatedQuantity">
						<input type="submit" value="Add">
					</form>
				</div>
			</div>
			<script>
				document.getElementById("selectQuantity").addEventListener('change', function () {
					document.getElementById("updatedQuantity").value = document.getElementById('selectQuantity').value;
					document.getElementById('quantity').submit();
				});
			</script>
		<?php
	} 
		$select_price_total = "SELECT SUM(product.price) as total FROM `cart` , `product` WHERE `cart`.`product_id` = `product`.`id` AND `cart`.`user_id` = '$_SESSION[user_id]'";
		 $executeselectPriceTotal = mysqli_query($con,$select_price_total);
		 $fetchTotalPrice = mysqli_fetch_assoc($executeselectPriceTotal);
		?>
			<div class="total"> total : <?php ; ?> -</div>
			<a href="#" class="btn" id="cart-btn">Checkout</a>
		</div>
		<?php
		?> 
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
				if ($row['type'] == 'user') {
					$_SESSION['name'];
					// print_r($row['full_name']);
					header('location: /Grocery/index.php');
				} elseif ($row['type'] == 'user') {
					$_SESSION['name'];
					header('location: /Grocery/index.php');
				}
			} else {
				$error = "incorrect email or password";
			}
		}
		?>
		<input type="email" name="user_email" class="box" placeholder=" your email">
		<input type="password" name="user_password" class="box" placeholder=" your password">
		<p>Forget Your password <a href="">Click Here</a></p>
		<p>Dont Have An Account <a href="/Grocery/html/Profile/Signup.php">Create Now</a></p>
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