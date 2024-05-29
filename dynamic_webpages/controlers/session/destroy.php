<?php 

spl_autoload_register(function ($class) {
    require 'core/' . $class .".php";
});

Session::destroy();
header('location: /php_practice/dynamic_webpages/');
exit();