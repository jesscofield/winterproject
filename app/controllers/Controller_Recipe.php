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
            $this->validate();
            $_POST['img'] = $this->uploadFile();
            $result = Recipe::add($_POST);
            $this->redirect($result);
        }
        else
        {
            View::admin('recipe/add');
        }
    }

    private function uploadFile()
    {
        $photo = new FileUploader('img', 10000000, ['jpg', 'jpeg', 'png']);

        try {
            $photo->uploadFile('assets/img/recipes/');
            return $photo->name;
        }
        catch(Exception $e) {
            header("location: /recipe/add?error=" . $e->getMessage());
            exit;
        }
    }

    private function validate()
    {
        try {
            $valid = new Validator($_POST);
            $valid->empty();
        }
        catch(Exception $e) {
            header('location: /recipe/add?error=' . $e->getMessage());
            exit;
        }
    }

    private function redirect($result)
    {
        if($result)
        {
            header('location: /recipe/index?mess=add_recipe');
        }
        else 
        {
            header('location: /recipe/add?error=add_recipe');
        }
    }
}