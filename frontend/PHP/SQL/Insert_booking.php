<?php
include_once("../../Connect/conn.php");
$cd_id = $_GET["cd_id"];
$route = $_GET["route"];
$type = $_GET["type"];
$start = $_GET["start"];
$end = $_GET["end"];
$start_date = $_GET["str_date"];
$end_date = $_GET["end_date"];
$detail = $_GET["detail"];

$start_real = mysqli_real_escape_string($con, $start);
$end_real = mysqli_real_escape_string($con, $end);
$detail_real = mysqli_real_escape_string($con, $detail);


$insert = "INSERT INTO book_detail (bd_detail, bd_destination, bd_str_date, bd_end_date, mem_user, cd_car_no, bd_remark, bd_type, bd_sts, bd_sts_sales, distance, flight, oli)
VALUES ('$start_real', '$end_real', '$start_date', '$end_date', 'Test-booking', '$cd_id', '$detail_real', '$type', '2', '1', '0.5', '$route', '10')";
if (mysqli_query($con, $insert)) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . mysqli_error($con);
}
