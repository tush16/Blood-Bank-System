<?php
session_start();

?>

<?php
include 'partials/_dbconnect.php';
$hospitalsamplename = $_SESSION['username'];
$sql = "SELECT * FROM `requests` WHERE hospital_name = '$hospitalsamplename' ";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $bloodtype = $row['blood_group'];
    $name = $row['receiver_name'];
    echo $bloodtype;
    echo $name;
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
    section {
        padding: 60px 0;
    }
    </style>
    <title>Sample Requests</title>
</head>

<body>

    <div class="container ">
        <h2 class="display-3">Sample Requests</h2>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>