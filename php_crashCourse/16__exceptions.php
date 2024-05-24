<?php

function inverse($x){
    if(!$x){
        throw new Exception('Divide by zero');
    }
    return 1/$x;
}

try{
    echo inverse(5);
    echo inverse(0);
} catch(Exception $e){
    echo 'Caught Exeception', $e->getMessage(),'<br> ';
}
finally{
    echo 'Second Finally'. "<br>";
}

echo 'Hello World';