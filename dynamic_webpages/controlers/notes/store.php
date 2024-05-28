<?php 

spl_autoload_register(function ($class) {
    require 'core/' . $class .".php";
});

$heading='Create New Note';

$config = require('config.php');
$db = new Database($config['database']);

$errors = [];

if(! Validater::string($_POST['body'], 1, 1000)){
    $errors['body'] = "A description of no more than 1000 characters is requied";
    $_POST['body'] = '';
}
if(! empty($errors)){
    require 'views/notes/create.view.php';
    exit();
}

$db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
    'body' => trim($_POST['body']),
    'user_id' => 1
]);
$_POST['body'] = '';

header('location: notes');
die();

