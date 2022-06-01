<?php
include_once '../Header/header.php';
if (!isset($_SESSION["email"])) {
    header("location: ../Login/Login.view.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Dashboard.style.css">
    <link rel="stylesheet" href="../../src/common/header.style.css">
    <title>Document</title>
</head>

<body>
    <div class="main">
        <div class="newContainer">
            <div class="circle" onclick='window.location="../Add-Patient/AddPatient.view.php"'>
                <ion-icon name="person-add-outline"></ion-icon>
            </div>
            <p class="label">Add Patient</p>
        </div>
        <div class="newContainer">
            <div class="circle" onclick='window.location="../All-Patients/AllPatients.view.php"'>
                <ion-icon name="people-outline"></ion-icon>
            </div>
            <p class="label">View Patients</p>
        </div>
        <div class="newContainer">
            <div class="circle">
                <ion-icon name="pencil-outline"></ion-icon>
            </div>
            <p class="label">Add Appointment</p>
        </div>
        <div class="newContainer">
            <div class="circle">
                <ion-icon name="document-outline"></ion-icon>
            </div>
            <p class="label">View Appointments</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>