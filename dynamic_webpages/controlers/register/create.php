<?php
require 'core/Session.php';
$sessionData = Session::get('_flash');
function old($key, $default = '')
{
    return  Session::get('_flash')['old'][$key] ?? $default;
}
function view($path, $attributes = [])
{
    extract($attributes);

    require 'views/' . $path;
}

view('register/create.view.php', [
    'errors' => $sessionData['errors'] ?? [],
]);


 //require 'views/register/create.view.php';