<?php
session_start();
include 'partials/_dbconnect.php';
$sno = $_GET['catid'];

$user = $_SESSION['username'];



$sql = "SELECT * FROM `blood_bank` WHERE sno=$sno";

$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {

    $bloodtype = $row['blood_type'];
    $hospital_name = $row['hospital_name'];
}
$sql = " INSERT INTO `requests` (`receiver_name`, `hospital_name`, `blood_group`) VALUES ('$user', '$hospital_name', '$bloodtype');";
$result = mysqli_query($conn, $sql);

header("location: index.php");