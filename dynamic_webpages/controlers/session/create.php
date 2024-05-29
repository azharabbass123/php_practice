<?php


function view($path, $attributes = [])
{
    extract($attributes);

    require 'views/' . $path;
}
print_r(Session::get('errors'));

view('session/create.view.php', [
    'errors' => Session::get('errors')
]);

//require 'views/session/create.view.php';
