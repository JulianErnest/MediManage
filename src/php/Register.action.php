<?php

echo 'asdasdsad';

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    include "../db/db.connect.php";
    include "../../public/Register/Register.model.php";
    include "../../public/Register/Register.controller.php";

    $register = new RegisterController($firstName, $lastName, $email, $password,  $confirmPassword);

    $register->registerUser();
}
