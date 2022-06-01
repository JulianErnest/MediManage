<?php

session_start();
session_destroy();
header('Location: ../../public/Login/Login.view.php');