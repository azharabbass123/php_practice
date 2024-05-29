<?php 
spl_autoload_register(function ($class) {
    require 'core/' . $class .".php";
});

class Authenticator 
{
    public function attempt($email, $password){
        $config = require('config.php');
        $db = new Database($config['database']);
        $user = $db->query('select * from users where email = :email', [
            'email' => $email
        ])->fetch();

        if($user){
            if(password_verify($password, $user['password'])){
                $this->login([
                    'email' => $email
                ]);

                return true;
            }
        }
        return false;
    }

    public function login($user)
    {
        $_SESSION['user'] = [
            'email' => $user['email']
        ];

        session_regenerate_id(true);
    }

    public function logout(){
        Session::destroy();
    }
}