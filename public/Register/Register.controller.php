<?php

class RegisterController {

    private $firstName;
    private $lastName;
    private $email;
    private $password;

    public function __construct($first_name, $last_name, $email, $password)
    {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->email = $email;
        $this->password = $password;
    }

}