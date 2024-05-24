<?php 

class Router {
    protected $routes = [];

    public function add($method, $uri, $controller){
        $this->routes[] = [
            'uri' => $uri,
            'method'=> $method,
            'controller' => $controller
        ];
    }

    public function get($uri, $controller){
        $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller){
        $this->add('POST', $uri, $controller);
    }

    public function delete($uri, $controller){
        $this->add('DELETE', $uri, $controller);
    }

    public function put($uri, $controller){
        $this->add('PUT', $uri, $controller);
    }

    public function patch($uri, $controller){
        $this->add('PATCH', $uri, $controller);
    }
    public function route($uri, $method){
        foreach($this->routes as $route){
            if($route['uri'] == $uri && $route['method'] == strtoupper($method)){
                return include $route['controller'];
            }
        }
        $this->abort();
    }

    protected function abort($code = 404) {
             http_response_code($code);
        
            include "views/$code.php";

            die();
         }
}










//$uri = isset($_GET['url']) ? $_GET['url'] : '/';
// $routes = [
//     '/'=> 'controlers/index.php',
//     'about'=> 'controlers/about.php',
//     'notes'=> 'controlers/notes/index.php',
//     'create'=> 'controlers/notes/create.php',
//     'note'=> 'controlers/notes/show.php',
//     'contact'=> 'controlers/contact.php',
// ];



// function routeToControler($uri, $routes){

//     if(array_key_exists($uri, $routes)) {
//         include $routes[$uri];
    
//     } else {
    
//        abort();
    
//     }
// }

// routeToControler($uri, $routes);

// function abort($code = 404) {
//     http_response_code($code);

//     include "views/$code.php";
// }