<?php
class Connection {
    const server = 'localhost';
    const db_name = 'CrimeFlix';
    const user = 'root';
    const password = '';

    public static function getConnection(): PDO {
        try {
            $dsn = 'mysql:dbname='.self::db_name.";host=".self::server;
            return new PDO($dsn, self::user, self::password);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
}

?>
