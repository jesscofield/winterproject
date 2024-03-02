<?php

class Recipe 
{
    public static $db;

    public static function connect()
    {
        $host_dbname = "mysql:host=localhost;dbname=recipes";
        $username = "root";
        $password = "";
        if(self::$db) return;
        self::$db = new PDO($host_dbname, $username, $password);
    }

    public static function findAll() 
    {
        self::connect();
        $table = self::getTable();
        $sql = "SELECT * FROM `$table`";

        $stmt = self::$db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findOne($id) 
    {
        self::connect();
        $table = self::getTable();
        $sql = "SELECT * FROM `$table` WHERE `id` = :id";
        $data = ['id'=>$id];
        $stmt = self::$db->prepare($sql);
        $stmt->execute($data);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function getTable()
    {
        return 'recipes';
    }
}