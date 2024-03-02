<?php

class Connection{
    
    private static $host = 'localhost'; // Normalmente 'localhost' si estás trabajando de manera local
    private static $db = 'advisorysync';
    private static $user = 'root';
    private static $password = 'root1234';

    public static function conn()
    {
        try {
            $conn = new PDO("mysql:host=" . self::$host . ";dbname=" .self::$db, self::$user, self::$password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            return $conn;
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
    }
}
