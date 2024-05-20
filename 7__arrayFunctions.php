<?php

//there are many built in functions to manuplate the items of arays
$colors = ['red', 'blue', 'oragne'];

// get length
echo count($colors);

//add array
$colors[] = 'green';
array_push($colors, "yellow", "black");
array_unshift($colors, "voilet");

// remove array elements
array_pop($colors); // remove an element from end 
array_shift($colors); // remove an element from start
unset($colors[3]); // remove an element from a specific index but leaves index empty

//split into 2 chunks
$chuncked_array = array_chunk($colors, 2); //split array to nested array, inner arrays have two elements each
 print_r($chuncked_array);

 $arr1 = [1, 2, 3];
 $arr2 = [4, 5, 6];
// merge two arrays
$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];

//combine functions take two arrays and retruns a object.
// elements of first array as keys and second array elemnets as values
$a = ['green', 'red', 'yellow'];
$b = ['avacado', 'apple', 'banana'];

$c = array_combine($a, $b);
print_r($c);

$keys = array_keys($c);
print_r($keys);

//flipped arrays returns a new arrays with keys of original as values and values as keys
$flipped = array_flip($c);
print_r($flipped);
