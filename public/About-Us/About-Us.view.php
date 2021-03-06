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
    <link rel="stylesheet" href="About-Us.style.css">
    <title>About Us Page</title>
</head>

<body>
    <div class="body">
        <h1 class="bodymaintext">About Us</h1>
        <img src="../../src/assets/picmid.png" alt="MediManage Pic" class="imgmid">
        <p class="bodytext">MediManage is a website/app allowing medical professionals to manage their patients online. It gives stated professionals fast access to their patients' medical information while also allowing them to organize their client visits. It was intended primarily to allow patient logistics and management for medical practitioners a more labor-saving experience.</p>
        <p class="bodytext">Julian Ernest Camello, Joss Chary Borj Ecleo, and Zecharia Barriga, all first-year computer science students, are the brains behind MediManage. The site was created to meet requirements for their CIS 1202 Web Development Course, as well as a real desire to exercise their website development abilities while creating a product that may potentially be of significant assistance to society.</p>
    </div>
</body>

</html>