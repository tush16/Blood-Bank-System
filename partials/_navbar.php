<?php

include '_dbconnect.php';
if (isset($_SESSION['username']) && $_SESSION['username'] == true && $_SESSION['usertype'] && $_SESSION['usertype'] == true) {
    $loggedin = true;
} else {
    $loggedin = false;
}


// <!-- navbar -->
echo '<nav class="navbar  navbar-expand-md  navbar-dark" style="background-color: #F37878;">
    <div class="container-xxl">

        <!-- navbar brand / title -->
        <a class="navbar-brand" href="/Blood-Bank-System">
            <span class="text-dark fw-bold">
                <i class="bi bi-peace-fill text-danger"></i>
                Blood-Care
            </span>
        </a>

        <!-- toggle button for mobile nav -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- navbar links -->
        <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
            <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link fw-bold text-dark " href="index.php">Home</a>
           </li>';
if ($loggedin && $_SESSION['usertype'] == 'hospital') {
    echo '     <li class="nav-item">
               <a class="nav-link fw-bold text-dark" href="sample.php">Add Sample</a>
           </li>
           <li class="nav-item">
               <a class="nav-link fw-bold text-dark" href="request.php">Requests</a>
           </li>';
}



if ($loggedin && $_SESSION['usertype'] == 'reciever') {
    echo '
                    <li class="nav-item ms-2 ">
                        <a class="btn btn-warning" href="#blood-sample">Request Sample</a>
                    </li>';
}

if (!$loggedin) {
    echo '
                    <li class="nav-item ms-2">
                        <a class="btn btn-warning" href="login.php">Login</a>
                    </li> ';
}


if ($loggedin) {
    echo '
              <ul class="navbar-nav d-flex flex-row me-1 ml-2 mt-2 mt-md-0" id="main-nav">
          
              <div class="dropdown">
              <button class="btn btn-warning dropdown-toggle ms-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome ' . $_SESSION['username'] . '
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="logout.php">logout</a></li>
              </ul>
            </div>
              </ul>';
}
echo '</div>
    </ul>';
echo '
              </div>
            </div>
            </nav>';