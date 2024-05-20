<?php

//file handling is reading and writing to files using built in functions

$file = 'extras/users1.txt';

if(file_exists($file)){
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
}
else{
    $handle = fopen($file, 'w');
    $content = 'Abbas'. PHP_EOL . 'Malik';
    fwrite($handle, $content);
    fclose($handle);
}