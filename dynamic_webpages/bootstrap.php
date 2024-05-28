<?php
spl_autoload_register(function ($class) {
    require 'core/' . $class .".php";
});

$container = new Container();
$container->bind('Core/Database', function(){
    $config = require ('config.php');

    return new Database($config['database']);
});

App::setContainer($container);
//$container->resolve('adsfaljfk');