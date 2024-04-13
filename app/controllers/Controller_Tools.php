<?php

class Controller_Tools 
{
    public function action_index()
    {
        $tools = Tool::findAll();
        View::admin('tool/index', ['tools' => $tools]);
    }

    public function action_add()
    {
        if($_POST)
        {
            $this->validate("add");
            $result = Tool::add($_POST);
            $this->redirect($result, "add");
        }
        else
        {
            View::admin('tool/add');
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
                header('location: /tool/add?error=' . $e->getMessage());
            }
            else
            {
                header('location: /tool/edit?error=' . $e->getMessage());
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
                header('location: /tool/index?mess=add_tool');
            }
            else
            {
                header('location: /tool/index?mess=edit_tool');
            }
        }
        else 
        {
            if($action == "add")
            {
                header('location: /tool/add?error=add_tool');
            }
            else
            {
                header('location: /tool/edit?error=edit_tool&id=' . $_POST['id']);
            }
        }
    }

    public function action_delete()
    {
        $result = Tool::delete($_GET['id']);
        if($result) 
        {
            header('location: /tool/index?mess=delete_tool');
        }
        else 
        {
            header('location: /tool/index?error=delete_tool');
        }
    }

    public function action_edit()
    {
        if($_POST)
        {
            $this->validate("edit");
            $result = Tool::edit($_POST);
            $this->redirect($result, "edit");
        }
        else
        {
            $tag = Tool::findOne($_GET['id']);
            View::admin('tool/edit', ['tool' => $tool]);
        }
    }
}