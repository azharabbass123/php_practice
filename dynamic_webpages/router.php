<?php 

$uri = isset($_GET['url']) ? $_GET['url'] : '/';
$routes = [
    '/'=> 'controlers/index.php',
    'about.php'=> 'controlers/about.php',
    'notes.php'=> 'controlers/notes.php',
    'note-create'=> 'controlers/note-create.php',
    'note'=> 'controlers/note.php',
    'contact.php'=> 'controlers/contact.php',
];



function routeToControler($uri, $routes){

    if(array_key_exists($uri, $routes)) {
        include $routes[$uri];
    
    } else {
    
       abort();
    
    }
}

routeToControler($uri, $routes);

function abort($code = 404) {
    http_response_code($code);

    include "views/$code.php";
}