<?php

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

function view($path, $attributes = [])
{
    extract($attributes);

    require 'views/' . $path;
}