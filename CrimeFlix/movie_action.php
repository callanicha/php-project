<?php

    include 'config.php';

    $title = $_POST["title"];
    $description = $_POST["description"];
    $director = $_POST["director"];
    $released_year = $_POST["released_year"];

    $sql = "INSERT INTO movie (title, description, director, released_year) VALUES (:title, :description, :director, :released_year)";
    $conn = Connection::getConnection();
    $query = $conn->prepare($sql);
    $query->bindParam(":title", $title, PDO::PARAM_STR);
    $query->bindParam(":description", $description, PDO::PARAM_STR);
    $query->bindParam(":director", $director, PDO::PARAM_STR);
    $query->bindParam(":released_year", $released_year, PDO::PARAM_INT);

    $result = $query->execute();
    if ($result){
        header('location: movie_list.php');
    } else {
        echo "<script>alert('recommendation failed');</script>";
    }
?>