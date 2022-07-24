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
    <!-- Bootstrap Icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
    section {
        padding: 60px 0;
    }
    </style>
    <title>Sample Requests</title>
</head>

<body class="bg-light">
    <!-- navbar  -->

    <?php include 'partials/_navbar.php'; ?>

    <!-- Reviews -->

    <section id="review" class="bg-light">
        <div class="container-lg">
            <div class="text-center">
                <h2 class="display-5">Blood Sample Requests</h2>
                <p class="lead">All the requested blood samples list</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="list-group">
                        <div class="list-group-item">
                            <span class="fw-bold"> Blood-Group <i
                                    class="bi bi-arrow-right-circle-fill text-danger"></i></span>
                            <h5 class="mb-1 d-inline text-danger"><?php echo $bloodtype?></h5>
                            <p class="mb-1  fst-italic">Requested By
                                <span class="mb-1 lead"><?php echo $name?> </span>
                            </p>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>