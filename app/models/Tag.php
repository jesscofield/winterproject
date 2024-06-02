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

    public static function edit($data)
    {
        $sql = "UPDATE `tags` SET `name`= :name WHERE `id`= :id";
        $stmt = self::$db->prepare($sql);
        return $stmt->execute($data);
    }

    public static function getRecipes($tag_id)
    {
        $items = RecipeTag::getRecipes($tag_id);
        if(!$items) return;
        foreach($items as $item) 
        {
            $recipes[] = Recipe::findOne($item['recipe_id']);
        }
        return $recipes;
    }
}