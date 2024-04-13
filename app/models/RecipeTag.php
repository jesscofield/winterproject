<?php

class RecipeTag extends Model
{
    public static function getTable()
    {
        return 'recipes_tags';
    }

    /* public static function add($data)
    {
        $sql = "INSERT INTO `tags`(`name`) VALUES (:name)";
        $stmt = self::$db->prepare($sql);
        return $stmt->execute($data);
    }

    public static function edit($data)
    {
        $sql = "UPDATE `tags` SET `name`= :name WHERE `id`= :id";
        $stmt = self::$db->prepare($sql);
        return $stmt->execute($data);
    } */

    public static function getTags($recipe_id)
    {
        $sql = "SELECT * FROM `recipes_tags` WHERE `recipe_id` = $recipe_id";
        $stmt = self::$db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
} 