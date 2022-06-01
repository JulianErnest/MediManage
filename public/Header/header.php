<?php
include '../../src/php/Start.action.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../Header/header.style.css">
</head>

<body>
    <header class="p-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <img src="../../src/assets/medimanage.png" class="logo" alt="">

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <?php if (!isset($_SESSION['email'])) : ?>
                        <li><a href="../About-Us/About-Us.view.php" class="nav-link px-2 link-secondary">
                                <p class="home">About Us</p>
                            </a></li>
                    <?php endif; ?>
                </ul>

                <?php if (!isset($_SESSION['email'])) : ?>
                    <div class="text-end">
                        <button type="button" id="login" class="btn btn-primary custom-button">Login</button>
                        <button type="button" id="signup" class="btn btn-warning custom-button">Sign-up</button>
                    </div>

                <?php else : ?>
                    <p class="home">Dr.</p>
                    &nbsp;
                    <p class="home"><?php echo $_SESSION['firstName'] ?></p>
                    &nbsp;
                    <p class="home"><?php echo $_SESSION['lastName'] ?></p>
                    &nbsp;
                    &nbsp;

                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="../../src/php/Logout.action.php">Sign out</a></li>
                        </ul>
                    </div>
                <?php endif; ?>


            </div>
        </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="../../src/js/header.js"></script>
</body>

</html>