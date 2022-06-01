<?php

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    include "../db/db.connect.php";
    include "../../public/Login/Login.model.php";
    include "../../public/Login/Login.controller.php";

    $login = new LoginController($email, $password);

    $login->loginUser();
}
