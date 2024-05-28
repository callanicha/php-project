<?php
include('config.php');
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
<article class="register_form">
    <div class="page_name">
        <h2>Log in</h2>
    </div>
    <form action="login_db.php" method="post">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <div class="input-group">
            <button type="submit" name="login_user" class="btn">Login</button>
        </div>
        <p>Not yet register? <a href="register.php">Register</a></p>
    </form>
</article>

<footer>
    <p>&copy 2024 EPITA,</p>
    <p>Natthanicha VONGJARIT &copy 2024</p> 
</footer>
</body>
</html>
