<?php 
require 'Database.php';
require 'Validater.php';
$config = require('config.php');
$db = new Database($config['database']);


$heading='Create New Note';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $errors = [];

    if(! Validater::string($_POST['body'], 1, 1000)){
        $errors['body'] = "A description of no more than 1000 characters is requied";
    }

    if(empty($errors)){
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }

    
}

require 'views/note-create.view.php';