<?php

class Guest 
{
    public function handle(){
        if($_SESSION['user'] ?? false){
            header('location: /php_practice/dynamic_webpages/');
            exit();
        }
    }
}