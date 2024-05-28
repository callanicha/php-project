<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My favorite</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        header a {
            color: inherit;
            text-decoration: none;
            margin: 5px;
        }
        .top {
            margin-top: 15px;
            margin-left: 15px
        }
        header a:hover {
        color: var(--dark);}

        body {
            padding: 0;
            margin: 0;
            background: var(--primary);
            color: #ecf0f1;
            font-family: 'Open Sans', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .box {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            padding: 20px;
        }

        .box a {
            width: 250px;
            height: 140.625px;
            position: relative;
            display: inline-block;
            margin-right: 10px;
            cursor: pointer;
            transition: transform 450ms;
            transform-origin: center left;
        }

        .box a img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .box a:hover {
            transform: scale(1.5);
            z-index: 2;
        }

        .box a:hover ~ a {
            transform: translate3d(125px, 0, 0);
        }
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
    <h1 class="favorite"></h1>
      <div class="box">
        <a href=""><img src="movie2.png" alt=""></a> 
        <a href=""><img src="movie3.png" alt=""></a> 
        <a href=""><img src="movie4.png" alt=""></a> 
        <a href=""><img src="movie5.png" alt=""></a> 
        <a href=""><img src="movie6.png" alt=""></a> 
        <a href=""><img src="movie7.png" alt=""></a> 
        <a href=""><img src="movie8.png" alt=""></a> 
        <a href=""><img src="movie9.png" alt=""></a> 
        <a href=""><img src="movie10.png" alt=""></a>        
        <a href=""><img src="movie11.png" alt=""></a> 
        <a href=""><img src="movie12.png" alt=""></a> 
        <a href=""><img src="movie13.png" alt=""></a> 
        <a href=""><img src="movie14.png" alt=""></a> 
        <a href=""><img src="movie15.png" alt=""></a> 
        <a href=""><img src="movie16.png" alt=""></a> 
        <a href=""><img src="movie17.png" alt=""></a>
        <a href=""><img src="movie18.png" alt=""></a>
        <a href=""><img src="movie19.png" alt=""></a>
        <a href=""><img src="movie20.png" alt=""></a>
        <a href=""><img src="movie21.png" alt=""></a>
        <a href=""><img src="movie22.png" alt=""></a>
        <a href=""><img src="movie23.png" alt=""></a>
        <a href=""><img src="movie24.png" alt=""></a>
        <a href=""><img src="movie25.png" alt=""></a>
        <a href=""><img src="movie26.png" alt=""></a>
      </div>
</body>
</html>