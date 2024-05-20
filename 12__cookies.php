<?php

// cookies are a mechanism of storing data on remote browser
// store insensitive data to help user remeber thigns 

setcookie('name', 'Azhar', time() + 86400);

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}

setcookie('name', '', time() + 86400);