<?php
$sql = "SELECT cd_car_no
                   FROM book_detail 
                   WHERE
                   bd_sts IN ('1','2') AND
                   bd_sts_sales IN ('1','0') AND
                   (('" . date('Y/m/d H:i:s', strtotime('+1 minutes', strtotime(trim($str_date)))) . "' BETWEEN bd_str_date AND bd_end_date) OR
                   ('" . $end_date . "' BETWEEN bd_str_date AND bd_end_date) OR
                   ('" . date('Y/m/d H:i:s', strtotime('+1 minutes', strtotime(trim($str_date)))) . "' <= bd_str_date AND '" . $end_date . "' >= bd_end_date))";
$query = mysqli_query($con, $sql);

$car_nos = array();
while ($row = mysqli_fetch_array($query)) {
    $car_nos[] = $row["cd_car_no"];
}
$car_no_list = "'" . implode("','", $car_nos) . "'";

$sql_car = "SELECT * FROM car_detail LEFT JOIN car_type ON cd_type = ct_id WHERE cd_id NOT IN ($car_no_list) AND cd_sts in ('1')";
$query_car = mysqli_query($con, $sql_car);
