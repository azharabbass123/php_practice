<?php 
spl_autoload_register(function ($class) {
    require 'core/' . $class .".php";
});

$form = LoginForm::validate($attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);

 $user = (new Authenticator)->checkEmail($attributes['email'], $attributes['password']);

if($user){
    $form->error(
        'email', 'Email already exists, try with a different one.'
    )->throw();
} else {
    header('location: login');
    exit();
}