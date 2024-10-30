<?php

//$con = new mysqli("wh-db53.csloxinfo.com", "siix", "!4O2xDolK#Qm", "siixdb");  //Domain
$con = new mysqli("localhost", "root", "", "siixdb");  //Localhost
/* check connection */
if ($con->connect_errno) {
    printf("Connect failed: %s\n", $con->connect_error);
    exit();
}
if (!$con->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $con->error);
    exit();
}
