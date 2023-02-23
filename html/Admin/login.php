<?php
include('/var/www/html/Grocery/database/connection.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin </title>
 
  <style>
/****
HTML && CSS && JS => contact Form with validation
****/
*{
    padding: 0;
    margin: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
body{
    background-color: #fff;
}

.loginform{
    background-color: #f2f2f2;
    width: 500px;
    position: relative;
    /* height:500px; */
    padding: 60px;
    border-radius: 5px;
}
.login .loginform{
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%);
}

.login  .loginform h2{
    text-align: center;
    font-size: 35px;
    padding-bottom: 50px
}
label{
    font-size: 15px
}
.login .loginform input[type="text"],.login .loginform input[type="password"]{
    border-radius: 5px;
    height: 40px;
    border:0;
    width:100%;
    margin: 10px 0;
    padding: 5px;
  outline:0
}
.login .loginform input[type="checkbox"]{
    margin: 20px 10px 20px 0 
}

.login .loginform button{
    background-color: #4CAF50;
    height:40px;
    border-radius: 5px;
    width:100%;
    border:0;
    color: #fff;
    font-size: 20px;
    cursor: pointer;
  outline:0
}
.login .loginform button:hover{
    background-color: #45a049;
}

#reduired{
    color: red;
    margin: 5px
}
#reduired1{
    color: red;
    margin: 5px
}

  </style>
</head>
<body>
<div class="login">
   
   <form method="post" action="" class="loginform" id="myform">
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
					print_r($row['full_name']);
					header('location:/Grocery/html/Admin/admin.php');
				} elseif ($row['type'] == 'user') {
					$error = "incorrect email or password";
				}
			} else {
				$error = "incorrect email or password";
			}
			
		}
		?>
       <h2>Login form</h2>
       <label>E-mail</label>
       <!-- <span id="reduired">*</span> -->
       <input type="text" name="user_email" id="username" />
       <label>Password</label>
       <!-- <span id="reduired1">*</span> -->
		<input type="password" name="user_password" class="box" placeholder=" your password">
      
       <!-- <input type="checkbox" id="check" /> -->
       <!-- <label>Remmber Me</label> -->
       <button type="submit" id="button" name="login" class="login">Submit</button>
   </form>
   <?php
	if (isset($error)) {
		echo '<span class="error-msg' . $error . '</span>';
	}
	?>
</div>
</body>
</html>