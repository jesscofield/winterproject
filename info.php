<?php
$messages = include 'messages.php';

if ($_GET['error']) 
{
    $message = $messages['error'][$_GET['error']];
    echo "<div class='alert alert-danger'>$message</div>";
}

if ($_GET['mess']) 
{
    $message = $messages['success'][$_GET['mess']];
    echo "<div class='alert alert-success'>$message</div>";
}