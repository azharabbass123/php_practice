<?php 

spl_autoload_register(function ($class) {
    require "core/" . $class . ".php";
});


require 'Router.php';
$router = new Router();
session_start();

 require 'routes.php';
$uri = isset($_GET['url']) ? $_GET['url'] : '/';
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

try {
    $router->route($uri, $method);
} catch (ValidationException $exception) {
    Session::flash('errors', $exception->errors);
    Session::flash('old', $exception->old);

    $previous_url = $_SERVER['HTTP_REFERER'];
    header("location: $previous_url");
    exit();
}

Session::unflash();