<?php
include('config.php');
session_start();

if (!isset($_SESSION['username'])){
    $_SESSION['msg'] = "you must login first";
    header('location: login.php');
}

if (isset($_GET['login'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        a {
            color: inherit;
            text-decoration: none;
            margin: 5px;
        }
        .top {
            margin-top: 15px;
            margin-left: 15px
        }
        a:hover {
        color: var(--dark);}
    </style>
</head>

<body>
    <header>
        <div class="netflixLogo">
        <a id="logo" href="#home"><img src="logo.png" alt="Logo Image"></a>
        </div>     
        <div class="top">                
            <a href="index.php" class="top">Add</a>
            <a href="movie_list.php" class="top">Movies List (Delete, Update)</a>
            <a href="display.php" class="top">My Favorite</a>   
        </div>  
        <h3 class="name">By Natthanicha VONGJARIT</h3>
    </header>

    <div class="content">
        <!-- log in user info -->
        <div class="welcome">
        <?php if (isset($_SESSION['username'])) : ?>
            <p>Welcome, <strong><?php echo $_SESSION['username']; ?></strong></p>
        <?php endif; ?>
        </div>

        <!--form-->
        <div class="recommendation_form">
            <h1>Recommedation Form</h1>
            <div class="form">
            <form action="movie_action.php" method="post" enctype="multipart/form-data">
                <p>
                <label for="title">Title: </label>
                <input type="text" name="title" id="title">
                </p>
                <p>
                <label for="description">Description:</label>
                <input type="text" name="description" id="description">
                </p>
                <p>
                <label for="director">Director:</label>
                <input type="text" name="director" id="director">
                </p>
                <p>
                <label for="released_year">Released year:</label>
                <input type="number" name="released_year" id="released_year">
                </p>
            <input class="botton" type="submit" value="Submit">
            </form>
            </div>
        </div>


        <div class="logout">
            <p><a href="index.php?logout='1'" style="color: red;">logout</a></p>
        </div>
    </div>

    <footer>
      <p>&copy 2024 EPITA,</p>
      <p>Natthanciha VONGJARIT &copy 2024</p> 
    </footer>
</body>
</html>