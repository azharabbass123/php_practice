<?php 

spl_autoload_register(function ($class) {
    require 'core/' . $class . '.php';
});

class LoginForm 
{
    protected $errors = [];

    public function __construct(public array $attributes)
    {
        if(!Validater::email($attributes['email'])) 
        {
            $this->errors['email'] = 'Please provide a valid email.';
        }
        if(!Validater::string($attributes['password'])){
            $this->errors['password'] = 'Please provide a valid password.';
        }
    }
    
    public static function validate($attributes){
        $instance = new static($attributes);

        return $instance->failed() ? $instance->throw() : $instance;
    } 
    
    public function throw(){
        ValidationException::throw($this->errors(), $this->attributes);
    }

    public function failed(){
        return count($this->errors);
    }

    public function errors(){
        return $this->errors;
    }

    public function error($field, $message){
        $this->errors[$field] = $message;
        return $this;

    }

}