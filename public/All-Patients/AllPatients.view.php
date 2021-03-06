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
    <title>Document</title>
    <link rel="stylesheet" href="AllPatients.style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>
    <div class="event-schedule-area-two bg-color pad100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <div class="title-text">
                            <h2>My Patients</h2>
                        </div>
                    </div>
                </div>
                <!-- /.col end-->
            </div>
            <!-- row end-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="home" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Image</th>
                                            <th scope="col">Patient</th>
                                            <th scope="col">Patient Notes</th>
                                            <th class="text-center" scope="col">View More</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="inner-box">
                                            <td>
                                                <div class="event-img">
                                                    <img src="https://scontent.fceb2-2.fna.fbcdn.net/v/t39.30808-1/280553844_5184564198277986_1895702972533089638_n.jpg?stp=dst-jpg_p200x200&_nc_cat=107&ccb=1-7&_nc_sid=7206a8&_nc_ohc=mQp8ioxwansAX8Ytt97&_nc_ht=scontent.fceb2-2.fna&oh=00_AT8xZRoyBmBpN3wNpjJzWtr2hE2N6RNHOPn6urUoMqd5ug&oe=629C95DE" alt="" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="event-wrap">
                                                    <h3><a href="#">Jayce Ecleo</a></h3>
                                                    <div class="meta">
                                                        <div class="categories">
                                                            <a href="#">Last Appointment</a>
                                                        </div>
                                                        <div class="time">
                                                            <span>Jan 18, 2022: 8:30 AM - 9:00 AM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="r-no">
                                                    <span>Room B3</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="primary-btn">
                                                    <a class="btn btn-primary" href="#">Read More</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="inner-box">
                                            <td>
                                                <div class="event-img">
                                                    <img src="https://scontent.fceb2-2.fna.fbcdn.net/v/t39.30808-1/280395260_3565009670392587_1909071328730682719_n.jpg?stp=dst-jpg_p200x200&_nc_cat=102&ccb=1-7&_nc_sid=7206a8&_nc_ohc=v7BF_9B3PLwAX-V4Sv2&_nc_ht=scontent.fceb2-2.fna&oh=00_AT8hepONl_Zujw595ls65qKjSy1HM_o8TBJWqVJVI_6p9Q&oe=629ACF17" alt="" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="event-wrap">
                                                    <h3><a href="#">Zecharia Barriga</a></h3>
                                                    <div class="meta">
                                                        <div class="categories">
                                                            <a href="#">Last Appointment</a>
                                                        </div>
                                                        <div class="time">
                                                            <span>March 2, 2022 - 4:00 PM - 4:30 PM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="r-no">
                                                    <span>Room D3</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="primary-btn">
                                                    <a class="btn btn-primary" href="#">Read More</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="inner-box border-bottom-0">
                                            <td>
                                                <div class="event-img">
                                                    <img src="https://scontent.fceb2-1.fna.fbcdn.net/v/t39.30808-1/270234674_4658788744236646_7487256276171689982_n.jpg?stp=dst-jpg_p200x200&_nc_cat=111&ccb=1-7&_nc_sid=7206a8&_nc_ohc=0MlWAhoCM2IAX95pr1_&_nc_ht=scontent.fceb2-1.fna&oh=00_AT9Fyc3ohw-I6l-Sl898KA5Sd3CoeKFsWzBWCFfyuztabA&oe=629BDE59" alt="" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="event-wrap">
                                                    <h3><a href="#">Julian Ernest Camello</a></h3>
                                                    <div class="meta">
                                                        <div class="categories">
                                                            <a href="#">Last Appointment</a>
                                                        </div>
                                                        <div class="time">
                                                            <span>May 2, 2022 - 1:00 PM - 1:30 PM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="r-no">
                                                    <span>asdasds</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="primary-btn">
                                                    <a class="btn btn-primary" href="#">Read More</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
</body>

</html>