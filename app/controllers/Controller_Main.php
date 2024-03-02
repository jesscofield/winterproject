<?php

class Controller_Main 
{
    public function action_index()
    {
        $recipes = Recipe::findAll();
        View::render('main/index', ['recipes'=>$recipes]);
    }

    public function action_recipes()
    {
        View::render('main/recipes');
    }
}