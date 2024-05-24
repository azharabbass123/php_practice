<?php
// functions can be created by using function keyword followed by function name

$y = 12;
function registerUser(){
    $x = 10;
    global $y;
    echo $GLOBALS['y'];
    echo 'User is not registered';
 }
 registerUser();

 function registerByEmail($email){
    echo $email . ' registered';
 }
 registerByEmail('Azhar@gamil.com');
 
// function with returned value
function sum($n1 = 4, $n2){
    return $n1 + $n2;
}
echo sum(5, 4);

// arrow function i.e anonymus functions
$subtract = fn($n1, $n2) => $n1 - $n2;
echo $subtract(3, 6);