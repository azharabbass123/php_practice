<?php 

    $router->get('/', 'controlers/index.php');
    $router->get('about', 'controlers/about.php');
    $router->get('contact', './controlers/contact.php');

    
    $router->get('notes', 'controlers/notes/index.php')->only('auth');
    $router->get('create', 'controlers/notes/create.php');
    $router->post('create', 'controlers/notes/store.php');
    $router->delete('note', 'controlers/notes/destroy.php');

    $router->get('edit','controlers/notes/edit.php');
    $router->patch('edit', 'controlers/notes/update.php');

    $router->get('note', 'controlers/notes/show.php');
    
    $router->get('register', 'controlers/register/create.php')->only('guest');
    $router->post('register', 'controlers/register/store.php');

    $router->get('login', 'controlers/sessions/create.php')->only('guest');