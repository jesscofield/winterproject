<?php

class Controller_Recipe 
{
    public function action_index()
    {
        $recipes = Recipe::findAll();
        View::admin('recipe/index', ['recipes' => $recipes]);
    }

    public function action_view()
    {
        $recipe = Recipe::findOne($_GET['id']); 
        View::admin('recipe/view', ['recipe' => $recipe]);
    }

    public function action_add()
    {
        if($_POST)
        {
            $result = Recipe::add($_POST);
            if($result)
            {
                header('location: /recipe/index?mess=add_recipe');
            }
            else 
            {
                header('location: /recipe/index?error=add_recipe');
            }
        }
        View::admin('recipe/add');
    }
}