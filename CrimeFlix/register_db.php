<?php

    include 'config.php';
    $conn = Connection::getConnection();
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO user (username, email, password) VALUES (:username, :email, :password)";
    $query = $conn->prepare($sql);
    $query->bindParam(":username", $username, PDO::PARAM_STR);
    $query->bindParam(":email", $email, PDO::PARAM_STR);
    $query->bindParam(":password", $password, PDO::PARAM_STR);

    $result = $query->execute();
    try {
        $result = $query->execute();
        if ($result) {
            echo "<script>
                    alert('Registration added, please login');
                    window.location.href = 'login.php';
                  </script>";
        } else {
            echo "<script>alert('Registration failed');</script>";
        }
    } catch (PDOException $e) {
        echo "<script>alert('Registration failed: " . $e->getMessage() . "');</script>";
    }
?>