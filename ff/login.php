<?php
session_start();

// check if the user is already logged in
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header('Location: /Grocery/index.php');
    exit;
}

// check if the login request was sent
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // validate the username and password
    // ...

    // check if the username and password match a known user
    // ...

    // set the session variable to indicate that the user is logged in
    $_SESSION['logged_in'] = true;
    header('Location: /Grocery/index.php');
    exit;
}

// check if the sign up request was sent
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // validate the username and password
    // ...

    // add the new user to the database
    // ...

    header('Location:/Grocery/app/user/signup.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login/Sign Up</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="login" value="Login">
    </form>

    <h1>Sign Up</h1>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="signup" value="Sign Up">
    </form>
</body>
</html>
