<?php
    include_once '../Header/header.php';
    if (isset($_SESSION["email"])) {
        header("location: ../Dashboard/Dashboard.view.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="Register.style.css">
    <link rel="stylesheet" href="../Header/header.style.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid fill-height">
        <div class="row center-block min-vh-100 ">
            <div class="col-5 d-flex flex-column align-items-center justify-content-center">
                <form class="needs-validation" action="../../src/php/Register.action.php" method="POST">
                    <p class="text-left fs-3 fw-bold">Sign-up</p>
                    <p class="text-left fs-5 fw-light"></p>Create an account now to start using MediManage
                    <div class="row my-3">
                        <div class="col">
                            <label class="form-label" for="firstName">First Name</label>
                            <input type="text" class="form-control" name="firstName" placeholder="First name">
                        </div>
                        <div class="col">
                            <label class="form-label" for="lastName">Last Name</label>
                            <input type="text" class="form-control" name="lastName" placeholder="Last name">
                        </div>
                    </div>
                    <div class="form-group my-3">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" class="form-control my-2 input" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="row my-3">
                        <div class="col">
                            <label class="form-label" for="firstName">Password</label>
                            <input type="text" class="form-control" name="password" placeholder="First name">
                        </div>
                        <div class="col">
                            <label class="form-label" for="lastName">Confirm Password</label>
                            <input type="text" class="form-control" name="confirmPassword" placeholder="Last name">
                        </div>
                    </div>
                    <p class="text-lef">Already have an account?<a class="link-primary" href="http://localhost/medimanage/public/login/login.view.php">
                            Log in now
                        </a></p>
                    <button type="submit" name="submit" class="btn btn-primary my-2">Register</button>
                </form>
            </div>
            <div class="right-col col-7 d-flex flex-column align-items-center justify-content-center">
                <h1 class="text-white">MediManage</h1>
                <p class="lead text-white">Streamlined logistics of appointments and patient records</p>
                <p class="lead">
                    <a href="#" class="btn btn-lg btn-primary fw-bold border-white">Home</a>
                </p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>