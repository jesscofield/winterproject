<?php

class Controller_Main 
{
    public function action_index()
    {
        Recipe::connect();
    }

    public function action_recipes()
    {
        echo 'recipes';
    }
}