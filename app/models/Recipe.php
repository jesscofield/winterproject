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

    public static function edit($data)
    {
        $sql = "UPDATE `recipes` SET `name`= :name,`description`= :description,`prep_time`= :prep,`cook_time`= :cook,`serving`= :serving WHERE `id`= :id";
        $stmt = self::$db->prepare($sql);
        return $stmt->execute($data);
    }

    public static function editImg($filename, $id)
    {
        $sql = "UPDATE `recipes` SET `img`= '$filename' WHERE `id`= $id";
        // debug($sql);
        return self::$db->exec($sql);
    }

    public static function getTags($id)
    {
        $items = RecipeTag::getTags($id);
        if(!$items) return;
        foreach($items as $item) 
        {
            $tags[] = Tag::findOne($item['tag_id']);
        }
        return $tags;
    }

    public static function getTools($id)
    {
        $items = RecipeTool::getTools($id);
        if(!$items) return;
        foreach($items as $item) 
        {
            $tools[] = Tool::findOne($item['tool_id']);
        }
        return $tools;
    }
}