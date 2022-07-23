<?php
$sent = false;
$showError = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $bloodtype = $_POST["bloodtype"];
    $name = $_POST["name"];
    $location = $_POST["location"];

    $sql = " INSERT INTO `blood_bank` (`blood_type`, `hospital_name`, `hospital_location`, `tstamp`) VALUES ('$bloodtype',
    '$name', '$location', current_timestamp());";
    $result = mysqli_query($conn,$sql);

    if($result){
      $sent = true;
    }
    else{
      $showError = "Some Error occured try again";
    }
   

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

    <title>Add Sample Details </title>
    <style>
    section {
        padding: 60px 0;
    }
    </style>
</head>

<body>

    <!-- navbar  -->

    <?php include 'partials/_navbar.php'; ?>



    <!-- alerts on submission -->
    <?php
    if ($sent) {
        echo '    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
    </svg>';
        echo '<div class="alert alert-success alert-dismissible fade show" 
        role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <strong>Success!</strong> Your Blood Sample Has Been Added To The Bank.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if ($showError) {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showError . '
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> ';
    }
    ?>
    <!-- contact form -->
    <!-- form-control, form-label, form-select, input-group, input-group-text -->
    <section id="contact">
        <div class="container-lg">

            <div class="text-center">
                <h2 class="display-3">Add Blood Samples</h2>
                <p class="lead">You Can add a Sample Blood Availabe With the Blood Type</p>
            </div>
            <div class="row justify-content-center my-5">
                <div class="col-lg-6">

                    <form action="sample.php" method="POST">
                        <label for="bloodtype" class="form-label">Blood Type:</label>
                        <div class="input-group mb-4">
                            <span class="input-group-text">
                                <i class="bi bi-droplet-fill text-danger"></i>
                            </span>
                            <input type="text" id="bloodtype" name="bloodtype" class="form-control"
                                placeholder="e.g. B+" />
                        </div>
                        <label for="name" class="form-label">Hospital Name:</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-hospital-fill text-warning"></i>
                            </span>
                            <input type="text" id="name" name="name" class="form-control"
                                placeholder="e.g. Apollo Hospitals" />
                        </div>
                        <label for="location" class="form-label">Location:</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-geo-alt-fill text-warning"></i>
                            </span>
                            <input type="text" id="location" name="location" class="form-control"
                                placeholder="e.g. Bangalore" />
                        </div>
                        <div class="mb-4 text-center">
                            <button type="submit" class="btn btn-warning">Submit</button>
                        </div>
                    </form>
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