<?php

include 'app/core/Route.php';
include 'app/core/View.php';
include 'autoload.php';
include 'functions.php';

Model::connect();
Route::start();