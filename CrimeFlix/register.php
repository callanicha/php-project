<?php
    session_start();
    require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to CrimeFlix</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <div class="netflixLogo">
        <a id="logo" href="#home"><img src="logo.png" alt="Logo Image"></a>
    </div> 
    <h3 class="name">By Natthanicha VONGJARIT</h3>
</header>
<div class="register_form">
    <div class="page_name">
        <h2>Register</h2>
    </div>
    <form action="register_db.php" method="post">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" name="reg_name" class="btn">Register</button>
        </div>
        <p>Already registered? <a href="login.php">Log in</a></p>
    </form>
</div>

<footer>
    <p>&copy 2024 EPITA,</p>
    <p>Natthanicha VONGJARIT &copy 2024</p> 
</footer>
</body>
</html>
