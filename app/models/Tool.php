<?php

class Tool extends Model
{
    public static function getTable()
    {
        return 'tools';
    }

    public static function add($data)
    {
        $sql = "INSERT INTO `tools`(`name`) VALUES (:name)";
        $stmt = self::$db->prepare($sql);
        return $stmt->execute($data);
    }

    public static function edit($data)
    {
        $sql = "UPDATE `tools` SET `name`= :name WHERE `id`= :id";
        $stmt = self::$db->prepare($sql);
        return $stmt->execute($data);
    }
}