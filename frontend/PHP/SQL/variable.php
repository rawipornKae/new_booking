<?php
$str_date = null;
if (isset($_POST["str_date"])) {
    $str_date = $_POST["str_date"];
}
if (isset($_GET["str_date"])) {
    $str_date = $_GET["str_date"];
}

$end_date = null;
if (isset($_POST["end_date"])) {
    $end_date = $_POST["end_date"];
}
if (isset($_GET["end_date"])) {
    $end_date = $_GET["end_date"];
}

$route = null;
if (isset($_POST["route"])) {
    $route = $_POST["route"];
}
if (isset($_GET["route"])) {
    $route = $_GET["route"];
}

$type = null;
if (isset($_POST["type"])) {
    $type = $_POST["type"];
}
if (isset($_GET["type"])) {
    $type = $_GET["type"];
}

$detail = null;
if (isset($_POST["detail"])) {
    $detail = $_POST["detail"];
    $detail_safe = mysqli_real_escape_string($con, $detail);
}
if (isset($_GET["detail"])) {
    $detail = $_GET["detail"];
    $detail_safe = mysqli_real_escape_string($con, $detail);
}

$start = null;
if (isset($_POST["start"])) {
    $start = $_POST["start"];
    $start_safe = mysqli_real_escape_string($con, $start);
}
if (isset($_GET["start"])) {
    $start = $_GET["start"];
    $start_safe = mysqli_real_escape_string($con, $start);
}

$end = null;
if (isset($_POST["end"])) {
    $end = $_POST["end"];
    $end_safe = mysqli_real_escape_string($con, $end);
}
if (isset($_GET["end"])) {
    $end = $_GET["end"];
    $end_safe = mysqli_real_escape_string($con, $end);
}

$cd_id = null;
if (isset($_POST["cd_id"])) {
    $cd_id = $_POST["cd_id"];
}
if (isset($_GET["cd_id"])) {
    $cd_id = $_GET["cd_id"];
}
