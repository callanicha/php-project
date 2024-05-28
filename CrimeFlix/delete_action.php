<?php
require_once 'movie.php';
$objProduct = Movie::getMovieById($_GET['id']);
$objProduct->deleteMovie();
header('location: movie_list.php');