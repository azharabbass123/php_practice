<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'feedback_db');

//Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// check the connection
if($conn->connect_error){
    echo $conn->connect_error;
    die('Connection Failed'. $conn->connect_error);
}