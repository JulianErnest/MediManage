<?php

class RegisterModel extends DbConnect
{
    protected function checkUser($email)
    {
        $stmt = $this->connect()->prepare('SELECT email FROM users where email = ?;');
        if (!$stmt->execute(array($email))) {
            $stmt = null;
            header("http://localhost/medimanage/public/register/register.view.php?error=emailTaken");
            exit();
        }
        $resultCheck = false;
        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }
        return $resultCheck;
    }

    protected function signupUser($first_name, $last_name, $email, $password)
    {
        $stmt = $this->connect()->prepare('INSERT INTO users (first_name, last_name, email, password) VALUES  (?, ?, ?, ?);');

        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        if ($stmt->execute(array($first_name, $last_name, $email, $hashedPwd))) {
            header("Location: http://localhost/medimanage/public/login/login.view.php");
        }  else {
            header("Location: http://localhost/medimanage/public/register/register.view.php?error=statementFailed");
        }
    }
}
