<?php

//sessions are used to store information to be used multiple time
//sessions store on server, sesitive information. 

session_start();

if(isset($_POST['submit'])){
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
     $password = $_POST['password'];

    if($username == 'Azhar' && $password == 'password'){
        $_SESSION['username'] = $username;
        header('Location: /php_practice/extras/dashboard.php');
    }
    else{
        echo 'incorrect login ingo!';
    }
}

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">Password </label>
        <input type="password" name="password">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>