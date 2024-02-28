<?php

class Recipe 
{
    public static $db;

    public static function connect()
    {
        $host_dbname = "mysql:host=localhost;dbname=recipes";
        $username = "root";
        $password = "";

        self::$db = new PDO($host_dbname, $username, $password);
    }
}