<?php

$serevname = "localhost";
$username = "root";
$password = "";
$database = "crud";

$con = mysqli_connect($serevname, $username, $password, $database);
if (!$con) {
    die(mysqli_connect_error($con));
}
