<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard-style.css">
    <link rel="stylesheet" href="../common/header-style.css">
    <link rel="stylesheet" href="../common/footer-style.css">
    <title>Document</title>
</head>

<body>
    <?php include '../common/header.php'; ?>
    <img src="../src/assets/home-bg3.png" class="image-bg">
    <div class="container">
        <div class="container-left">
            <div class="link-row-container">
                <h3 class="label">Patients</h3>
                <div class="flex-break"></div>
                <div class="link-container">
                    <h3>Add Patient</h3>
                    <ion-icon size=20 name="add-outline"></ion-icon>
                </div>
                <div class="link-container">
                    <h3>View All Patients</h3>
                    <ion-icon name="eye-outline"></ion-icon>
                </div>
                <div class="flex-break"></div>
                <h3 class="label">Appointments</h3>
                <div class="flex-break"></div>
                <div class="link-container">
                    <h3>Add Appointment</h3>
                    <ion-icon name="add-outline"></ion-icon>
                </div>
                <div class="link-container">
                    <h3>View All Appointments</h3>
                    <ion-icon name="eye-outline"></ion-icon>
                </div>
            </div>
        </div>
        <div class="appointment-container">
            <h5 class="next-appointment">My next appointment</h5>
            <div class="appointment-body">
                <div class="image-container">
                    <img src="../src/assets/Zak.jpg" class="patient">
                </div>
                <div>
                    <h5 class="appointment-details">11: 00 AM</h5>
                    <h5 class="appointment-details">Zecharia Barriga</h5>
                    <h5 class="appointment-details">View Patient Details</h5>
                </div>
            </div>
        </div>
    </div>
    <?php include '../common/footer.php'; ?>
</body>

</html>