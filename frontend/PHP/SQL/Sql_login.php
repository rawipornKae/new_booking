<?php
if (isset($_POST["login"]) && !empty($_POST["login"])) {
    $user = $_POST["user"];
    $pass = $_POST["pass"];


    $sql = "SELECT * FROM member where mem_name = '$user' and mem_pass = '$pass'";
    $query = mysqli_query($con, $sql);
    $result = mysqli_fetch_assoc($query);

    $_SESSION['user'] = $result["mem_name"];
    $_SESSION["type"] = $result["mem_type"];


    if ($_SESSION['user'] != "" && $_SESSION["type"] != "") {
        echo "<script>window.location='bookingList.php';</script>";
    } else {
        echo '<script language="javascript">';
        echo 'alert("Please Login !!")';
        echo '</script>';
        echo "<script>window.location='index.php';</script>";
    }
}
