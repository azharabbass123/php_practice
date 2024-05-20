<?php
//simple arrays
$numbers = [1,2,3,4];
$fruits = array('apple', 'orange', 'pear');

// var_dump($numbers);
echo $fruits[0]; // pritns apple;

// Assocaite array
$colors = [
    1 => 'red',
    2 => 'blue',
    3 => 'green'
];
$hex = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '00f'
];
 // echo $hex['blue'];

 $person = [
    'first_name' => 'Azhar',
    'last_name' => 'Abbass',
    'eamil' => 'azhar@gmail.com'
 ];
 
//  multidimentioanl array 
$people = [
    [
        'first_name' => 'Azhar',
        'last_name' => 'Abbass',
        'eamil' => 'azhar@gmail.com'
    ],
    [
        'first_name' => 'Azhar',
        'last_name' => 'Abbass',
        'eamil' => 'azhar@gmail.com'
    ],
    [
        'first_name' => 'Azhar',
        'last_name' => 'Abbass',
        'eamil' => 'azhar@gmail.com'
     ]
    ];
// echo $people[1]['email];

//Turn a multidimensional array to json object
var_dump(json_encode($people));