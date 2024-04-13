<?php

function model_autoloader($class) {
    if(file_exists(__DIR__ . "/app/models/" . $class . ".php"))
    {
        require_once __DIR__ . "/app/models/" . $class . ".php"; 
    }
}

function helper_autoloader($class) {
    if($class == "Validator" || $class == "FileUploader"){
        require_once __DIR__ . "/app/helpers/" . $class . ".php"; 
    }
}


spl_autoload_register('model_autoloader');

spl_autoload_register('helper_autoloader');