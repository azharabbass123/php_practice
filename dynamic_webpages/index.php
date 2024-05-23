<?php 



 
// We can connect to database using Database class defined in another file


// $id = $_GET['id'];
// $query = "select * from posts where id = ?" ;
// $post = $db->query($query, [$id])->fetch(PDO::FETCH_ASSOC);
// var_dump($post);
require 'Database.php';
require 'Response.php';
require 'router.php';