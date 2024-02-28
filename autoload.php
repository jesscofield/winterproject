<?php

function model_autoloader($class) {
    if($class == "Recipe" || $class == "Tag" || $class == "RecipeTag" || $class == "Tool"){
        require_once __DIR__ . "/app/models/" . $class . ".php"; 
    }
}

function helper_autoloader($class) {
    if($class == "Validate" || $class == "File" || $class == "Message"){
        require_once __DIR__ . "/app/helpers/" . $class . ".php"; 
    }
}


spl_autoload_register('model_autoloader');

spl_autoload_register('helper_autoloader');