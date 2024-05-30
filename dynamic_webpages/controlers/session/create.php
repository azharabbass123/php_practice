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

view('session/create.view.php', [
    'errors' => $sessionData['errors'] ?? [],
]);

//require 'views/session/create.view.php';
