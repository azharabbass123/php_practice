<?php
session_start();

session_destroy();
header('Location: /php_practice/13__sessions.php');