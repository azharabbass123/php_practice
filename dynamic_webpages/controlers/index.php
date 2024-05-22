<?php 

// require 'Database.php';

$heading = 'Home';

// connecting database*

// $dsn = "mysql:host=localhost;dbname=blogpost_db;user=root";
// $pdo = new PDO($dsn);

// $statement = $pdo ->prepare('select * from posts');
// $statement->execute();

// $posts = $statement->fetchAll(PDO::FETCH_ASSOC);  

// foreach($posts as $post){
//   echo "<li>" . $post['title']. "</li>";
// }

//We can connect to database using Database class defined in another file
// $db = new Database();
// $post = $db->query('select title from posts where id = 2')->fetch(PDO::FETCH_ASSOC);
// echo ($post['title']);


include './views/index.view.php';