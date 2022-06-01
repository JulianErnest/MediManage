<?php

class RegisterController extends RegisterModel
{

    private $firstName;
    private $lastName;
    private $email;
    private $password;
    private $confirmPassword;

    public function registerUser()
    {
        if (!$this->completeInput()) {
            header("location: http://localhost/medimanage/public/register/Register.view.php?error=incompleteInput");
            exit();
        }
        if (!$this->emailValid()) {
            header("location: http://localhost/medimanage/public/register/Register.view.php?error=emailInvalid");
            exit();
        }
        if (!$this->passwordMatch()) {
            header("location: http://localhost/medimanage/public/register/Register.view.php?error=passwordNotMatch");
            exit();
        }
        if (!$this->usernameNotTaken()) {
            header("location: http://localhost/medimanage/public/register/Register.view.php?error=emailTaken");
            exit();
        }
        $this->signupUser($this->firstName, $this->lastName, $this->email, $this->password);
    }

    public function __construct($first_name, $last_name, $email, $password, $confirmPassword)
    {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->confirmPassword = $confirmPassword;
    }

    private function completeInput()
    {
        if (empty($this->firstName) || empty($this->lastName) || empty($this->email) || empty($this->password) || empty($this->confirmPassword)) {
            return false;
        }
        return true;
    }

    private function emailValid()
    {
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } 
        return false;
    }

    private function passwordMatch() {
        if ($this->password == $this->confirmPassword) {
            return true;
        }
        return false;
    }

    private function usernameNotTaken() {
        if ($this->checkUser(($this->email))) {
            return true;
        }
        return false;
    }

}
