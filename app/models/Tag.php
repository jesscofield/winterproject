<?php

class Tag extends Model
{
    public static function getTable()
    {
        return 'tags';
    }

    public static function add($data)
    {
        $sql = "INSERT INTO `tags`(`name`) VALUES (:name)";
        $stmt = self::$db->prepare($sql);
        return $stmt->execute($data);
    }
}