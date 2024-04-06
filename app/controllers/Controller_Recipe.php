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
            $this->validate("add");
            $_POST['img'] = $this->uploadFile();
            $result = Recipe::add($_POST);
            $this->redirect($result, "add");
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

    private function validate($action)
    {
        try {
            $valid = new Validator($_POST);
            $valid->empty();
        }
        catch(Exception $e) {
            if($action == "add")
            {
                header('location: /recipe/add?error=' . $e->getMessage());
            }
            else
            {
                header('location: /recipe/edit?error=' . $e->getMessage());
            }
            exit;
        }
    }

    private function redirect($result, $action)
    {
        if($result)
        {
            if($action == "add")
            {
                header('location: /recipe/index?mess=add_recipe');
            }
            else
            {
                header('location: /recipe/index?mess=edit_recipe');
            }
        }
        else 
        {
            if($action == "add")
            {
                header('location: /recipe/add?error=add_recipe');
            }
            else
            {
                header('location: /recipe/edit?error=edit_recipe&id=' . $_POST['id']);
            }
        }
    }

    public function action_delete()
    {
        $recipe = Recipe::findOne($_GET['id']);
        $result = Recipe::delete($_GET['id']);
        if($result)
        {
            if(file_exists('assets/img/recipes/' . $recipe['img']))
            {
                unlink('assets/img/recipes/' . $recipe['img']);
            }
            header('location: /recipe/index?mess=delete_recipe');
        }
        else 
        {
            header('location: /recipe/index?error=delete_recipe');
        }
    }

    public function action_edit()
    {
        if($_POST)
        {
            $this->validate("edit");
            if($_FILES['img'])
            {
                $filename = $this->uploadFile();
                Recipe::editImg($filename, $_POST['id']);
            }
            $result = Recipe::edit($_POST, $filename);
            // debug($result);
            $this->redirect($result, "edit");
        }
        else
        {
            $recipe = Recipe::findOne($_GET['id']);
            View::admin('recipe/edit', ['recipe' => $recipe]);
        }
    }
}