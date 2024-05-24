<?php 

    $router->get('/', 'controlers/index.php');
    $router->get('about', 'controlers/about.php');
    $router->get('contact', './controlers/contact.php');

    
    $router->get('notes', 'controlers/notes/index.php');
    $router->get('create', 'controlers/notes/create.php');
    $router->post('create', 'controlers/notes/store.php');
    $router->delete('note', 'controlers/notes/destroy.php');
    $router->get('note', 'controlers/notes/show.php');
