<?php

class Controller_Tag 
{
    public function action_index()
    {
        $tags = Tag::findAll();
        View::admin('tag/index', ['tags' => $tags]);
    }

    public function action_add()
    {
        if($_POST)
        {
            $this->validate("add");
            $result = Tag::add($_POST);
            $this->redirect($result, "add");
        }
        else
        {
            View::admin('tag/add');
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
                header('location: /tag/add?error=' . $e->getMessage());
            }
            else
            {
                header('location: /tag/edit?error=' . $e->getMessage());
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
                header('location: /tag/index?mess=add_tag');
            }
            else
            {
                header('location: /tag/index?mess=edit_tag');
            }
        }
        else 
        {
            if($action == "add")
            {
                header('location: /tag/add?error=add_tag');
            }
            else
            {
                header('location: /tag/edit?error=edit_tag&id=' . $_POST['id']);
            }
        }
    }

    public function action_delete()
    {
        $result = Tag::delete($_GET['id']);
        if($result) 
        {
            header('location: /tag/index?mess=delete_tag');
        }
        else 
        {
            header('location: /tag/index?error=delete_tag');
        }
    }

    public function action_edit()
    {
        if($_POST)
        {
            $this->validate("edit");
            $result = Tag::edit($_POST);
            $this->redirect($result, "edit");
        }
        else
        {
            $tag = Tag::findOne($_GET['id']);
            View::admin('tag/edit', ['tag' => $tag]);
        }
    }
}