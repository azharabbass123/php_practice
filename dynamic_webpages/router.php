<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/'=> 'controlers/index.php',
    '/about'=> 'controlers/about.php',
    '/contact'=> 'controlers/contact.php',
];



function routeToControler($uri, $routes){

    if(array_key_exists($uri, $routes)) {
        require  $routes[$uri];
    
    } else {
    
       abort();
    
    }
}

routeToControler($uri, $routes);

function abort($code = 404) {
    http_response_code($code);

    require "views/$code.php";
}