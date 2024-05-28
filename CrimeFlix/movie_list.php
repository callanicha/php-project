<?php
require_once 'movie.php';
?>
<html>
    <head>
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

        table {
        border-collapse: collapse;
        width: 100%;
        }

        th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        }

        tr:hover{
            background-color: #420000;
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
        <table class="movie_list">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Director</th>
                <th>released_year</th>
                <th>Item edit</th>
                <th>Item delete</th>
            </tr>
            <?php 
                $allMovie = Movie::getAllMovie();
                foreach ($allMovie as $movie) {
                    echo '<tr>';
                    echo '<td>'.$movie['title'].'</td>';

                    echo '<td>';
                    echo $movie['description'];
                    echo '</td>';
                    echo '<td>'.$movie['director'].'</td>';
                    echo '<td>'.$movie['released_year'].'</td>';
                    
                    echo '<td>'; 
                    echo '<a href="update.php?id='.$movie['id'].'">[+]</a>';
                    echo'</td>';
                    
                    echo '<td>';
                    echo '<a href="delete_action.php?id='.$movie['id'].'">[-]</a>';
                    echo '</td>';
                    echo '</tr>';
                }
            ?>
        </table>
    </body>
</html>
