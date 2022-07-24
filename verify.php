<?php
session_start();

?>

<?php

include 'partials\_dbconnect.php';
if (isset($_SESSION['username']) && $_SESSION['username'] == true && $_SESSION['usertype'] && $_SESSION['usertype'] == true) {
    $loggedin = true;
} else {
    $loggedin = false;
}
?>

<?php
if (!$loggedin) {

    header("location: login.php");
}
if ($loggedin && $_SESSION['usertype'] == 'hospital') {
    header("location: index.php");
}
if ($loggedin && $_SESSION['usertype'] == 'reciever') {

    $sql = "SELECT * FROM `blood_bank`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {

        $sno = $row['sno'];
        $bloodtype = $row['blood_type'];
        $name = $row['hospital_name'];
        $location = $row['hospital_location'];
    }

    header("location: requestsample.php?catid=' . $sno . ' ");
}
?>