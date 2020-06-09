<?php

class Conexion {
    private static $dbHost = "localhost";
    private static $dbName = "iehouse_prueba";
    private static $dbUser = "root";
    private static $dbPass = "";
    private static $connection = null;

    public static function getConnection() {
        if (self::$connection == null) {
            try {
                $connection = new PDO("mysql:host=".self::$dbHost.";dbname=".self::$dbName, self::$dbUser, self::$dbPass);
            } catch (PDOException $e) {
                echo "no se ha podido conecta";
                die($e->getMessage());
            }
            return $connection;
        }
    }

    public static function closeConnection() {
        self::$connection = null;
    }

}

?>