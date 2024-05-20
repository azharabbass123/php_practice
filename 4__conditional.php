<?php

//if statement
 $age = 18;

 if($age >= 18){
    echo "You are old enough to vote.";
 }
 else {
    echo "You can't vote.";
 }
 $t = date("H");
 if($t < 12){
    echo 'Good Morning';
 }
 else if($t < 17 ){
    echo 'Good afternoon';
 } else{
    echo 'Good evening';
 }

 $post = ["first post"];

 if(!empty($post)){
    echo $post[0];
 }
 else{
    echo 'No post';
 }

// short foramte for if
 echo !empty($post) ? $post[0] : "No post";

 $firstPost = $post[0] ?? null;

 echo $firstPost;

//  if we have any condition then use switch instead of if else
$favcolor = 'red';
  switch($favcolor){
    case 'red':
        echo 'Your favourite color is red';
        break;
    case 'blue':
        echo 'Your favourite color is blue';
        break;
    default:
        echo "Your favourite color is neither red nor blue.";
  }