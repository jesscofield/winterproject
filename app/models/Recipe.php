<?php

class Recipe extends Model
{
    public static function getTable()
    {
        return 'recipes';
    }

    public static function add($data)
    {
        $sql = "INSERT INTO `recipes`(`name`, `description`, `img`, `prep_time`, `cook_time`, `serving`) 
        VALUES (:name, :description, :img, :prep, :cook, :serving)";
        $stmt = self::$db->prepare($sql);
        return $stmt->execute($data);
    }
}