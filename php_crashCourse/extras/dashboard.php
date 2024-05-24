<?php
session_start();

if(isset($_SESSION['username'])){
    echo '<h1>welcome '. $_SESSION['username'] . '</h1>';
    echo '<a href="logout.php">Logout</a>';
}
else{
    echo '<h1>Welcome Guest</h1>';
    echo '<a href="/php_practice/13__sessions.php">Home</a>';
}