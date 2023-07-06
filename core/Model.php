<?php
abstract class Model
{
    private static $pdo;
    private static function setBdd()
    {
        require_once 'config/database.php';

        self::$pdo = new PDO("mysql:host=".$configDB["db_host"].";dbname=".$configDB["db_name"].";charset=utf8", $configDB["db_user"], $configDB["db_password"]);
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
    protected function getBdd()
    {
        if (self::$pdo === null) {
            self::setBdd();
        }
        return self::$pdo;
    }
}
