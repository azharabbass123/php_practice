<?php 


require 'Router.php';
$router = new Router();
session_start();

 require 'routes.php';
$uri = isset($_GET['url']) ? $_GET['url'] : '/';
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
$router->route($uri, $method);