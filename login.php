<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];


    $sql = "Select * from users where username='$username' ";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);



    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                if ($row['user_type'] == 'reciever') {
                    $login = true;

                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;
                    $_SESSION['usertype'] = $row['user_type'];
                    $_SESSION['sno'] = $row['sno'];
                    header("location: index.php");
                } else {
                    $login = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;
                    $_SESSION['usertype'] = $row['user_type'];
                    $_SESSION['sno'] = $row['sno'];
                    header("location: sample.php");
                }
            } else {
                $showError = "Invalid Credentials";
            }
        }
    } else {
        $showError = "Invalid Credentials";
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
    <title>Hello, world!</title>
</head>

<body class="bg-warning">
    <?php include 'partials/_navbar.php'; ?>



    <?php
    if ($login) {
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
       <strong>Success!</strong> You are logged in.
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

    <section class=" vh-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Member Login</p>

                                    <form class="mx-1 mx-md-4" action="login.php" method="POST">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1c" class="form-control"
                                                    name="username" required />
                                                <label class="form-label" for="form3Example1c">Username</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4c" class="form-control"
                                                    name="password" required />
                                                <label class="form-label" for="form3Example4c">Password</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4cd" class="form-control"
                                                    required />
                                                <label class="form-label" for="form3Example4cd">Repeat your
                                                    password</label>
                                            </div>
                                        </div>

                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value=""
                                                id="form2Example3c" />
                                            <label class="form-check-label" for="form2Example3">
                                                I agree all statements in <a href="#!">Terms of service</a>
                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-danger btn-lg">Login</button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="images\Blood care.png" class="img-fluid" alt="Sample image">

                                </div>
                            </div>
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