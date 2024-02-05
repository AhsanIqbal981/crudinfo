<?php

include 'connect.php';
if (isset($_GET['deleteid'])) {

    $id = $_GET['deleteid'];
    $sql = "DELETE FROM `info` WHERE `info`.`sr no` = $id";
    $result = mysqli_query($con, $sql);
}
if ($result) {
    header('location:display.php');
}
?>

