<?php 


spl_autoload_register(function ($class) {
    require 'core/' . $class .".php";
});
$config = require('config.php');
$db = new Database($config['database']);

$heading = 'My Notes';
$userId = (int) Session::get('user')['curUserId'];
$notes = $db->query("Select * from notes where user_id = $userId")->fetchAll(PDO::FETCH_ASSOC);


include 'views/notes/index.view.php';