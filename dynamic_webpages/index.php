<?php 



 require 'Database.php';

// We can connect to database using Database class defined in another file
$db = new Database();
$post = $db->query('select title from posts where id = 2')->fetch(PDO::FETCH_ASSOC);
echo ($post['title']);

require 'router.php';