<?php
	include '/var/www/html/Grocery/Database/Connection.php';
	if (isset($_POST['insert_review'])) {
		$photo = $_FILES['photo']['name'];
		$description = $_POST['description'];
		$name = $_POST['name'];
		$insert_review = "insert into review(photo,description,name) values('$photo','$description','$name')";
		$result_query = mysqli_query($con, $insert_review);
		if ($result_query) {
			echo "<script> alert ('Review inserted succesfully')</script>)";
		}
	}
	?>