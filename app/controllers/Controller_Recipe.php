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
}