<?php

class LoginController extends LoginModel
{

    private $email;
    private $password;

    public function loginUser()
    {
        if (!$this->completeInput()) {
            header("location: http://localhost/medimanage/public/login/login.view.php?error=incompleteInput");
            exit();
        }
        if (!$this->emailValid()) {
            header("location: http://localhost/medimanage/public/login/login.view.php?error=emailInvalid");
            exit();
        }
        return $this->checkUser($this->email, $this->password);
    }

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    private function completeInput()
    {
        if (empty($this->email) || empty($this->password)) {
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
}
