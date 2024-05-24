<?php 

spl_autoload_register(function ($class) {
    require 'core/' . $class .".php";
});

$config = require('config.php');
$db = new Database($config['database']);

$currentUserId = 1;

function abort($code = 404) {
    http_response_code($code);

    include "views/$code.php";
}

$note = $db->query('Select * from notes where id = :id', [
    'id' => $_GET['id']
])->fetch(PDO::FETCH_ASSOC);

if(! $note){
    abort();
}

if($note['user_id'] != $currentUserId){
    abort(Response::FORBIDDEN);
}
$db->query('Delete from notes where id = :id', [
    'id' => $_POST['id']
]);

header('location: notes');
exit();