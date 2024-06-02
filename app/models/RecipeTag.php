<?php

class RecipeTag extends Model
{
    public static function getTable()
    {
        return 'recipes_tags';
    }

    public static function add($data)
    {
        $sql = "INSERT INTO `recipes_tags`(`recipe_id`, `tag_id`) VALUES (:recipe_id, :tag_id)";
        $stmt = self::$db->prepare($sql);
        return $stmt->execute($data);
    }

    /* public static function edit($data)
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

    public static function getRecipes($tag_id)
    {
        $sql = "SELECT * FROM `recipes_tags` WHERE `tag_id` = $tag_id";
        $stmt = self::$db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function check($data)
    {
        $sql = "SELECT * FROM `recipes_tags` WHERE `recipe_id` = {$data['recipe_id']} AND `tag_id` = {$data['tag_id']}";
        $stmt = self::$db->query($sql);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function deleteRow($data)
    {
        $sql = "DELETE FROM `recipes_tags` WHERE `recipe_id` = {$data['recipe_id']} AND `tag_id` = {$data['tag_id']}";
        return self::$db->exec($sql);
    }
} 