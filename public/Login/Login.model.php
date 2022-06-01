<?php

class LoginModel extends DbConnect
{
    protected function checkUser($iEmail, $iPassword)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM users WHERE email = ?');

        // Check if sql statement was god
        if (!$stmt->execute(array($iEmail))) {
            header("location: http://localhost/medimanage/public/login/login.view.php?error=statementFailed");
            exit();
        }

        // Check if a user with given email exists
        if ($stmt->rowCount() == 0) {
            header("location: http://localhost/medimanage/public/login/login.view.php?error=userNotFound");
            exit();
        }

        // Compare inputted password with password from user with inputted email
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($iPassword, $user[0]["password"]);

        if ($checkPwd == false) {
            header("location: http://localhost/medimanage/public/login/login.view.php?error=invalidCredentials");
            exit();
        }

        session_start();

        $_SESSION["firstName"] = $user[0]["first_name"];
        $_SESSION["lastName"] = $user[0]["last_name"];
        $_SESSION["email"] = $user[0]["email"];
        header("location: ../../public/dashboard/dashboard.view.php");
    }
}
