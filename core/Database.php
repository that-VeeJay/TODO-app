<?php

class Database
{
    public static $host = '127.0.0.1';
    public static $dbname = 'todo_app';
    public static $dbUsername = 'root';
    public static $dbPassword = '';

    public static function connect()
    {
        try {
            $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$dbname;
            $pdo = new PDO($dsn, self::$dbUsername, self::$dbPassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            exit('Database Connection Failed:' . $e->getMessage());
        }
    }
}
