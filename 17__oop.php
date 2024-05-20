<?php

//from php5 onwards you can classes and objects in php

class User {
    public $name;
    public $email;
    public $password;

    // A constructer is a method that runs when an object is created
    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        echo 'class user contsructer run'. '<br>';
    }
    // method is a function that belongs to a class
    function set_name($name){
        $this->name = $name;
    }
    function get_name($name){
        return $this->$name;
    }
}

// objects of class user
$user1 = new User('Ali', 'ali@gmail.com', '2343');
$user2 = new User('Malik', 'ali@gmail.com', '2343');

//as properties are public so we can access them outside of class
$user1->name = "Ali";
$user2->set_name("Malik");
echo $user1->name. '<br>';
echo $user2->name .'<br>';
// var_dump($user1);

//inheritence

class Employee extends User{

    public $title;
    public function __construct($name, $email, $password, $title){
        parent::__construct($name, $email, $password);
        $this->title = $title;
        echo 'class employee constructer run <br>';
    }
    public function getTitle(){
        return $this->title;
    }
}

// creating object of child class
$employee1 = new Employee("Bilal", "abc@gmail.com", "3424", "HR manager");
echo 'Employee object, getting employee title: <br>';
echo $employee1->getTitle();
