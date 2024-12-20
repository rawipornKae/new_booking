<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking Car</title>
    <link rel="icon" type="image/x-icon" href="../img/icons8-car-16-2.png">
    <link rel="stylesheet" href="../CSS/bookingList.css">
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
    <!-- <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/staterestore/1.4.1/js/dataTables.stateRestore.js"></script>
    <script src="https://cdn.datatables.net/staterestore/1.4.1/js/stateRestore.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.bootstrap5.js"></script>

    <link rel="stylesheet" href="//cdn.datatables.net/buttons/1.4.1/css/buttons.dataTables.min.css">
    <script src="//cdn.datatables.net/buttons/1.4.1/js/dataTables.buttons.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="//cdn.datatables.net/buttons/1.4.1/js/buttons.html5.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.4.1/js/buttons.print.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
</head>
</head>

<body>
    <!-- <nav class="sticky-top navigation">
        <div class="navigation-box">
            <div class="topnav" id="myTopnav">
                <img src="/frontend/img/img_answer01-removebg-preview-new3.png" class="img-logo">
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
                <a href="/frontend/HTML/homepage.html">Booking Car</a>
                <a href="#bookingcar" class="icons bookingcar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                        class="bi bi-car-front-fill" viewBox="0 0 16 16">
                        <path
                            d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z" />
                    </svg>
                </a>
                <a href="/frontend/HTML/bookingList.html" class="active">Booking Lists</a>
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
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                        class="bi bi-grid-3x3-gap-fill" viewBox="0 0 16 16">
                        <path
                            d="M1 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zM1 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zM1 12a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1z" />
                    </svg>
                </a>
            </div>
        </div>
    </nav> -->
    <?php
    include_once("header.php");
    ?>
    <div class="booking">
        <div class="booking-form">
            <h1 class="header-login">Cars Booking Data</h1>
        </div>
    </div>
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" title="Hooray!">Hover over me!</button> -->
    <div class="card">
        <div class="card-body">
            <!-- <table class="table table-borderless">
                <thead>
                    <th scope="col">
                        <form class="d-flex" role="search">
                            <input class="form-control" type="search" placeholder="Start Time" aria-label="Search">
                        </form>
                    </th>
                    <th scope="col">
                        <form class="d-flex" role="search">
                            <input class="form-control" type="search" placeholder="Stop Time" aria-label="Search">
                        </form>
                    </th>
                    <th scope="col">
                        <form class="d-flex" role="search">
                            <input class="form-control" type="search" placeholder="Topic" aria-label="Search">
                        </form>
                    </th>
                    <th scope="col">
                        <form class="d-flex" role="search">
                            <input class="form-control" type="search" placeholder="Origin" aria-label="Search">
                        </form>
                    </th>
                    <th scope="col">
                        <form class="d-flex" role="search">
                            <input class="form-control" type="search" placeholder="Destination" aria-label="Search">
                        </form>
                    </th>
                    <th scope="col">
                        <form class="d-flex" role="search">
                            <input class="form-control" type="search" placeholder="Landmark" aria-label="Search">
                        </form>
                    </th>
                    <th scope="col">
                        <form class="d-flex" role="search">
                            <input class="form-control" type="search" placeholder="KM" aria-label="Search">
                        </form>
                    </th>
                    <th scope="col">
                        <form class="d-flex" role="search">
                            <input class="form-control" type="search" placeholder="Duration" aria-label="Search">
                        </form>
                    </th>
                    <th scope="col">
                        <form class="d-flex" role="search">
                            <input class="form-control" type="search" placeholder="Fuel" aria-label="Search">
                        </form>
                    </th>
                    <th scope="col">
                        <form class="d-flex" role="search">
                            <button class="btn btn-success" type="submit">Search</button>
                        </form>
                    </th>
                </thead>
            </table> -->
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="#"
                        style="font-size: large; font-weight: 800; color: #247bfd;">1กข 2434</a>
                </li>
            </ul>
        </div>
        <div class="card-body" style="padding: 30px;">
            <table id="example" class="table" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Start Time</th>
                        <th scope="col">Stop Time</th>
                        <th scope="col">Topic</th>
                        <th scope="col">Origin</th>
                        <th scope="col">Destination</th>
                        <th scope="col">Landmark</th>
                        <th scope="col">KM</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Fuel</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <td>08.00</td>
                        <td>10.00</td>
                        <td>make some business</td>
                        <td>สมุทรปราการ</td>
                        <td>กรุงทพมหานคร</td>
                        <td>ตึกใบหยก</td>
                        <td>22.2</td>
                        <td>50</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>08.00</td>
                        <td>10.00</td>
                        <td>make some business</td>
                        <td>สมุทรปราการ</td>
                        <td>กรุงทพมหานคร</td>
                        <td>ตึกใบหยก</td>
                        <td>22.2</td>
                        <td>50</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>08.00</td>
                        <td>10.00</td>
                        <td>make some business</td>
                        <td>สมุทรปราการ</td>
                        <td>กรุงทพมหานคร</td>
                        <td>ตึกใบหยก</td>
                        <td>22.2</td>
                        <td>50</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>08.00</td>
                        <td>10.00</td>
                        <td>make some business</td>
                        <td>สมุทรปราการ</td>
                        <td>กรุงทพมหานคร</td>
                        <td>ตึกใบหยก</td>
                        <td>22.2</td>
                        <td>50</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>08.00</td>
                        <td>10.00</td>
                        <td>make some business</td>
                        <td>สมุทรปราการ</td>
                        <td>กรุงทพมหานคร</td>
                        <td>ตึกใบหยก</td>
                        <td>22.2</td>
                        <td>50</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>08.00</td>
                        <td>10.00</td>
                        <td>make some business</td>
                        <td>สมุทรปราการ</td>
                        <td>กรุงทพมหานคร</td>
                        <td>ตึกใบหยก</td>
                        <td>22.2</td>
                        <td>50</td>
                        <td>30</td>
                    </tr>
                </tbody>
            </table>
            <a href="/frontend/HTML/homepage.html" class="badge rounded-pill text-bg-success"
                style="text-decoration: none;">08.00-12.00</a>
            <a href="/frontend/HTML/homepage.html" class="badge rounded-pill text-bg-success"
                style="text-decoration: none;">13.00-15.00</a>
        </div>
    </div>
    <!-- <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="#"
                        style="font-size: large; font-weight: 800; color: #247bfd;">ฮฟ 2434</a>
                </li>
            </ul>
        </div>
        <div class="card-body" style="padding: 40px;">
            <table id="example2" class="table" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Start Time</th>
                        <th scope="col">Stop Time</th>
                        <th scope="col">Topic</th>
                        <th scope="col">Origin</th>
                        <th scope="col">Destination</th>
                        <th scope="col">Landmark</th>
                        <th scope="col">KM</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Fuel</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <td>08.00</td>
                        <td>10.00</td>
                        <td>make some business</td>
                        <td>สมุทรปราการ</td>
                        <td>กรุงทพมหานคร</td>
                        <td>ตึกใบหยก</td>
                        <td>22.2</td>
                        <td>50</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>08.00</td>
                        <td>10.00</td>
                        <td>make some business</td>
                        <td>สมุทรปราการ</td>
                        <td>กรุงทพมหานคร</td>
                        <td>ตึกใบหยก</td>
                        <td>22.2</td>
                        <td>50</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>08.00</td>
                        <td>10.00</td>
                        <td>make some business</td>
                        <td>สมุทรปราการ</td>
                        <td>กรุงทพมหานคร</td>
                        <td>ตึกใบหยก</td>
                        <td>22.2</td>
                        <td>50</td>
                        <td>30</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> -->
</body>
<script>
    let popoverTriggerList = [].slice.call(document.querySelectorAll(
        '[data-bs-toggle="popover"]'))

    let popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })

    $(document).ready(function() {
        $("#example").DataTable();
        $("#example2").DataTable();
    });
</script>

</html>