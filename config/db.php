<?php
// config/db.php
class Database {
    public static function connect() {
        $host = 'localhost';
        $dbname = 'vetcare';
        $username = 'root';
        $password = '';

        try {
            return new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        } catch (PDOException $e) {
            echo 'Error de conexión: ' . $e->getMessage();
            return null;
        }
    }
}
