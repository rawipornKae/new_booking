<?php
include_once("../Connect/conn.php");
include_once("./SQL/variable.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ฺBooking Car</title>
    <meta charset='utf-8' />
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBpw811UNg-2Aj_XYALiCh-sXAowa42RM4&language=th&region=TH&callback=initAutocomplete" type="text/javascript" defer></script>
    <link rel="shortcut icon" href="map.pnga" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <link rel="stylesheet" type="text/css" href="../CSS/homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <script src="../JS/map.js"></script>
    <link rel="stylesheet" type="text/css" href="../datetimepicker-master/jquery.datetimepicker.css">
    <script src="../datetimepicker-master/jquery.js"></script>
    <script src="../datetimepicker-master/build/jquery.datetimepicker.full.min.js"></script>

</head>

<body>

    <!--<nav class="sticky-top navigation">
        <div class="navigation-box">
            <div class="topnav" id="myTopnav">
                <img src="../img/img_answer01-removebg-preview-new3.png" class="img-logo">
                <a href="#profile" class="bg profile">Rawiporn-CP</a>
                <a href="#profile" class="bg icons profile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                </a>
                <a href="#notify">Notify</a>
                <a href="#notify" class="icons notify">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                        class="bi bi-bell-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901" />
                    </svg>
                </a>
                <a href="../php/homepage.php" class="active">Booking Car</a>
                <a href="#bookingcar" class="icons bookingcar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                        class="bi bi-car-front-fill" viewBox="0 0 16 16">
                        <path
                            d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z" />
                    </svg>
                </a>
                <a href="../PHP/bookingList.php">Booking Lists</a>
                <a href="#bookinglists" class="icons bookinglists">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                        class="bi bi-book-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                    </svg>
                </a>
                <a href="#dashboard">Dashboard</a>
                <a href="#dashboard" class="icons dashboard">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                        class="bi bi-bar-chart-line-fill" viewBox="0 0 16 16">
                        <path
                            d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1z" />
                    </svg>
                </a>
                <div class="dropdown">
                    <button class="dropbtn">Dropdown
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path
                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg>
                    </button>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                        class="bi bi-grid-3x3-gap-fill" viewBox="0 0 16 16">
                        <path
                            d="M1 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zM1 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zM1 12a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1z" />
                    </svg>
                </a>
            </div>
        </div>
    </nav>-->

    <?php
    include_once("header.php");
    ?>
    <div class="booking">
        <div class="booking-form">
            <h1 class="header-login">Booking Car</h1>
        </div>
    </div>
    <!-- company car -->
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="#">Company Car</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Rental Van</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <h5 class="card-title" style="margin-top: 20px; margin-bottom: 10px;">Booking Company Car</h5>
            <form class="row" id="distance_form" action="<?= $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
                <!--Route-->
                <div class="col-md-12" style="margin-top: 20px;">

                    <label for="inputEmail4" class="form-label col-md-1">Route</label>
                    <!--One-Way-->
                    <div class="form-check form-check-inline col-md-2">
                        <?php
                        if ($route == "One-way") {
                        ?>
                            <input class="form-check-input" type="radio" name="route" id="inlineRadio1"
                                value="One-way" checked>
                        <?php
                        } else {
                        ?>
                            <input class="form-check-input" type="radio" name="route" id="inlineRadio1"
                                value="One-way" required>
                        <?php
                        }
                        ?>
                        <label class="form-check-label" for="inlineRadio1">One-way</label>
                    </div>
                    <!--End One-way-->
                    <!--round-trip-->
                    <div class="form-check form-check-inline col-md-2">
                        <?php
                        if ($route == "Round-trip") {
                        ?>
                            <input class="form-check-input" type="radio" name="route" id="inlineRadio2"
                                value="Round-trip" checked>
                        <?php
                        } else {
                        ?>
                            <input class="form-check-input" type="radio" name="route" id="inlineRadio2"
                                value="Round-trip">
                        <?php
                        }
                        ?>
                        <label class="form-check-label" for="inlineRadio2">Round-trip</label>
                    </div>
                    <!--End round-trip-->
                </div>
                <!--End Route-->

                <!--Type-->
                <div class="col-md-12" style="margin-top: 10px;">
                    <label for="inputEmail4" class="form-label col-md-1">Type</label>
                    <!--For Busniess-->
                    <div class="form-check form-check-inline col-md-2">
                        <?php
                        if ($type == "For Business") {
                        ?>
                            <input class="form-check-input" type="radio" name="type" id="inlineRadio3"
                                value="For Business" checked>
                        <?php
                        } else {
                        ?>
                            <input class="form-check-input" type="radio" name="type" id="inlineRadio3"
                                value="For Business" required>
                        <?php
                        }
                        ?>
                        <label class="form-check-label" for="inlineRadio3">For business</label>
                    </div>
                    <!--End For Busniess-->
                    <!--For Company-->
                    <div class="form-check form-check-inline col-md-2">
                        <?php
                        if ($type == "For Company") {
                        ?>
                            <input class="form-check-input" type="radio" name="type" id="inlineRadio4"
                                value="For Company" checked>
                        <?php
                        } else {
                        ?>
                            <input class="form-check-input" type="radio" name="type" id="inlineRadio4"
                                value="For Company">
                        <?php
                        }
                        ?>
                        <label class="form-check-label" for="inlineRadio4">For company</label>
                    </div>
                    <!--End For Company-->
                </div>
                <!--End Type-->
                <input id="travel_mode" name="travel_mode" type="hidden" value="DRIVING">
                <!--Start Point-->
                <div class="col-md-6" style="margin-top: 10px;">
                    <label for="inputEmail4" class="form-label">Start:</label>
                    <input type="start point" class="form-control" id="from_places" placeholder="Enter Start." name="start">
                    <input id="origin" name="origin" required="" type="hidden" />
                </div>

                <div class="col-md-6" style="margin-top: 10px;">
                    <label for="inputPassword4" class="form-label">Start Date</label>
                    <input type="text" class="form-control" name="str_date" id="id_datetime_picker" required autocomplete="off" value="<?php echo $str_date; ?>">
                </div>
                <!--Stop Point-->
                <div class="col-md-6" style="margin-top: 10px;">
                    <label for="inputEmail4" class="form-label">Stop:</label>
                    <input type="text" class="form-control" id="to_places" placeholder="Enter End." name="end">
                    <input id="destination" name="destination" required="" type="hidden" />
                </div>
                <div class="col-md-6" style="margin-top: 10px;">
                    <label for="inputPassword4" class="form-label">End Date</label>
                    <input type="text" class="form-control" name="end_date" id="id_datetime_picker0" required autocomplete="off" value="<?php echo $end_date; ?>">
                </div>
                <div class="col-md-6" style="margin-top: 10px;">
                    <label for="inputPassword4" class="form-label">Booking Details</label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="detail"
                            style="height: 320px"></textarea>
                        <label for="floatingTextarea">Details</label>
                    </div>
                </div>
                <!--End Stop Point-->
                <!--Map-->
                <div class="col-md-6" style="margin-top: 10px;">
                    <noscript>
                        <div class='alert alert-info'>
                            <h4>Your JavaScript is disabled</h4>
                            <p>Please enable JavaScript to view the map.</p>
                        </div>
                    </noscript>
                    <div id="map" style="height: 350px; width: 100%"></div>
                </div>
                <script src="../JS/map.js"></script>
                <!--End Map-->
                <div class="col-6" style="margin-top: 20px;">
                    <input type="submit" class="btn btn-primary" name="find" value="Find a car">
                </div>
                <div class="col-6" style="margin-top: 20px;">
                    <p id="in_kilo"></p>
                    <p id="duration_text"></p>
                </div>
            </form>
        </div>
    </div>
    <div id="result"></div>

    <style>
        .card-group {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            /* แสดง 6 คอลัมน์ */
            gap: 20px;
            /* ระยะห่างระหว่างการ์ด */
        }
    </style>


    <!--<script src="../JS/homepage.js"></script>-->


</body>
<script>
    jQuery('#id_datetime_picker').datetimepicker();
    jQuery('#id_datetime_picker0').datetimepicker();
</script>

</html>