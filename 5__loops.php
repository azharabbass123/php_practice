<?php

// for loop
for($x = 5; $x <= 10; $x++){
    echo 'number '. $x . '<br>';
}

//while loop
$x = 5;
while($x <= 15){
    echo $x+5;
    $x++;
}

//do while loop
do{
    echo $x+10;
    $x++;
}
while($x < 5);

//foreach loop to iterate over elements of arrays
 $posts = ['first post', 'second post', 'third post'];
 foreach($posts as $post){
    echo $post;
 }