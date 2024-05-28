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

if(! Validater::string($password, 7, 255)) {
    $errors['body'] = 'Please provide a password greater then 7 characters';
}
if(! empty($errors)){
    require 'views/register/create.view.php';
    exit();
}

 $user = $db->query('select * from users where email = :email', [
    'email'=> $email
])->fetch();

if($user){
    $_SESSION['user'] = [
        'email' => $email,
    ];
    header('location: register');
} else {
    $db->query('INSERT INTO users(email, password) VALUES (:email, :password)', [
        'email'=> $email,
        'password'=> password_hash($password, PASSWORD_BCRYPT)
    ]);

    $_SESSION['user'] = [
        'email' => $email,
    ];
    header('location: about');
    exit();
}