<?php 
spl_autoload_register(function ($class) {
    require 'core/' . $class .".php";
});

$email = $_POST['email'];
$password = $_POST['password'];

$config = require('config.php');
$db = new Database($config['database']);

$errors = [];

if(! Validater::string($email, 5, 50)) {
    $errors['body'] = 'providea valid email address';
}

if(! Validater::string($password)) {
    $errors['body'] = 'Please provide a valid password ';
}
if(! empty($errors)){
    require 'views/register/create.view.php';
    exit();
}

 $user = $db->query('select * from users where email = :email', [
    'email'=> $email
])->fetch();

if($user){
    print_r($user);
    if (password_verify($password, $user['password'])){
        $_SESSION['user'] = [
            'email' => $email
        ];
        header('location: notes');
        exit();
    } else {
        $errors['body'] = "Provided email and password does not match";
        require 'views/session/create.view.php';
    }
} else{
    require 'views/session/create.view.php';
}
