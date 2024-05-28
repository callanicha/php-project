<?php
require_once 'movie.php';

$objProduct = new Movie($_POST['title'], $_POST['description'], $_POST['director'], $_POST['released_year'], $_POST['id']);
$objProduct->updateMovie();
header('location: movie_list.php');