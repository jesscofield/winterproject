<?php

class Controller_Main 
{
    public function action_index()
    {
        $recipes = Recipe::findAll();
        $tags = Tag::findAll();
        View::render('main/index', ['recipes' => $recipes, 'tags' => $tags]);
    }

    public function action_recipes()
    {
        $recipes = Recipe::findAll();
        View::render('main/recipes', ['recipes' => $recipes]);
    }

    public function action_recipe()
    {
        $recipe = Recipe::findOne($_GET['id']);
        View::render('main/recipe', ['recipe' => $recipe]);
    }

    public function action_tags()
    {
        $tags = Tag::findAll();
        View::render('main/tags', ['tags' => $tags]);
    }
}