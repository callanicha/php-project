<?php
    include 'config.php';
    session_start();

    if (isset($_POST['login_user'])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $conn = Connection::getConnection();
        $sql = "SELECT * FROM user WHERE username = :username AND password = :password";
        $query = $conn->prepare($sql);
        $query->bindParam(":username", $username, PDO::PARAM_STR);
        $query->bindParam(":password", $password, PDO::PARAM_STR);
        $query->execute();

        $user = $query->fetch(PDO::FETCH_ASSOC);

        if ($user === false) {
            header('location: login.php?err_code=E');
        } else {
            $_SESSION['username'] = $username;
            echo "<script>alert('login successful');</script>";
            // Redirect to a different page after successful login
            header('location: index.php');
        }
    }
?>
