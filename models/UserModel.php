<?php

class UserModel
{
    public $firstName;
    public $lastName;
    public $email;
    public $password;


    public function __construct($email,$password,$firstName,$lastName){
        $this->email = $email;
        $this->password = $password;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
}

