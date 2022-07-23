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

    <title>Blood-Bank System</title>
    <style>
    section {
        padding: 60px 0;
    }
    </style>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar  navbar-expand-md  navbar-light" style="background-color: #e3f2fd;">
        <div class="container-xxl">

            <!-- navbar brand / title -->
            <a class="navbar-brand" href="#intro">
                <span class="text-dark fw-bold">
                    <i class="bi bi-peace-fill text-danger"></i>
                    Blood-Care
                </span>
            </a>

            <!-- toggle button for mobile nav -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
                aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- navbar links -->
            <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Add Sample</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Requests</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#review">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>

                    <div class="d-flex">

                        <li class="nav-item ms-2 ">
                            <a class="btn btn-warning" href="#">Login</a>
                        </li>
                        <li class="nav-item ms-2">
                            <a class="btn btn-outline-danger" href="#">Signup</a>
                        </li>
                    </div>


                </ul>
            </div>
        </div>
    </nav>


    <!-- main image & intro text -->
    <section id="intro">
        <div class="container-lg ">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-5 text-center text-md-start">
                    <h1>
                        <div class="display-2">Blood-Care</div>
                        <div class="display-5 text-muted">Donate Blood Save A Life!</div>
                    </h1>
                    <p class="lead text-muted my-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    <a href="#blood-sample" class="btn btn-outline-danger btn-lg">Request Sample</a>
                </div>
                <div class="col-md-5 text-center d-none d-md-block">
                    <img class="img-fluid" src="images\blood-donor.jpg" alt=" blood-bank">
                </div>
            </div>
        </div>
    </section>

    <!-- Availabe Blood Samples  -->

    <section id="blood-sample" class="mt-5 bg-light">

        <div class="container-lg">
            <div class="text-center">
                <h2 class="display-2">Available Blood Samples</h2>
                <p class="lead text-muted">Request sample for the required blood group</p>
            </div>
            <div class="row justify-content-center align-items-center my-5">
                <div class="col-md-4 my-2 ">
                    <div class="card shadow rounded border-danger border-2 ">
                        <div class="card-body">
                            <h5 class="card-title">B+</h5>
                            <p class="card-subtitle lead">Apollo Hospital</p>
                            <p class="card-text">Bangalore</p>
                            <a href="#" class="btn btn-warning">Request Sample</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" my-2>
                    <div class="card shadow rounded border-danger border-2">
                        <div class="card-body">
                            <h5 class="card-title">O+</h5>
                            <p class="card-subtitle lead">NRR Hospital</p>
                            <p class="card-text">Bangalore</p>
                            <a href="#" class="btn btn-warning">Request Sample</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-2">
                    <div class="card shadow rounded border-danger border-2">
                        <div class="card-body">
                            <h5 class="card-title">B-</h5>
                            <p class="card-subtitle lead">Sapthagiri Hospital</p>
                            <p class="card-text ">Bangalore</p>
                            <a href="#" class="btn btn-warning">Request Sample</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ  -->
    <section id="faq">
        <div class="container-md">
            <div class="text-center">
                <h2>FAQs</h2>
                <p class="lead text-muted">Have questions about Blood-Care? Read answers to frequently asked questions
                    to help you make a choice.</p>
            </div>
            <div class="row my-5 g-5 justify-content-around align-items-center">
                <div class="col-6 col-lg-4">
                    <img src="images\faq.jpg" class="img-fluid" alt="ebook">
                </div>
                <div class="col-lg-6">

                    <!-- accordion -->
                    <div class="accordion" id="chapters">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#chapter-1" aria-expanded="true" aria-controls="chapter-1">
                                    Lorem ipsum dolor sit.
                                </button>
                            </h2>
                            <div id="chapter-1" class="accordion-collapse collapse show" aria-labelledby="heading-1"
                                data-bs-parent="#chapters">
                                <div class="accordion-body">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                        sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                        tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                        sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                        tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#chapter-2" aria-expanded="false" aria-controls="chapter-2">
                                    Lorem ipsum dolor sit.
                                </button>
                            </h2>
                            <div id="chapter-2" class="accordion-collapse collapse" aria-labelledby="heading-2"
                                data-bs-parent="#chapters">
                                <div class="accordion-body">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                        sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                        tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                        sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                        tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#chapter-3" aria-expanded="false" aria-controls="chapter-1">
                                    Lorem ipsum dolor sit.
                                </button>
                            </h2>
                            <div id="chapter-3" class="accordion-collapse collapse" aria-labelledby="heading-3"
                                data-bs-parent="#chapters">
                                <div class="accordion-body">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                        sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                        tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                        sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                        tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#chapter-4" aria-expanded="false" aria-controls="chapter-4">
                                    Lorem ipsum dolor sit.
                                </button>
                            </h2>
                            <div id="chapter-4" class="accordion-collapse collapse" aria-labelledby="heading-4"
                                data-bs-parent="#chapters">
                                <div class="accordion-body">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                        sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                        tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                        sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                        tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#chapter-5" aria-expanded="false" aria-controls="chapter-5">
                                    Lorem ipsum dolor sit.
                                </button>
                            </h2>
                            <div id="chapter-5" class="accordion-collapse collapse" aria-labelledby="heading-5"
                                data-bs-parent="#chapters">
                                <div class="accordion-body">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                        sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                        tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                        sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                        tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Reviews -->

    <section id="review" class="bg-light">
        <div class="container-lg">
            <div class="text-center">
                <h2 class="display-5"><i class="bi bi-stars text-warning"></i>Blood-Sample Reviews</h2>
                <p class="lead">What our recievers have said about Blood-Care...</p>
            </div>
            <div class="row justify-content-center my-5">
                <div class="col-lg-8">
                    <div class="list-group">
                        <div class="list-group-item py-5">
                            <div class="pb-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <h5 class="mb-1">Lorem ipsum dolor sit amet consectetur.</h5>
                            <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro possimus
                                voluptates minima ducimus a, quia eveniet error non optio tempore excepturi vero
                                architecto quas dolores magnam omnis itaque, voluptate rerum.</p>
                            <small>Review By Lorem ipsum.</small>
                        </div>
                        <div class="list-group-item py-5">
                            <div class="pb-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <h5 class="mb-1">Lorem ipsum dolor sit amet consectetur.</h5>
                            <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro possimus
                                voluptates minima ducimus a, quia eveniet error non optio tempore excepturi vero
                                architecto quas dolores magnam omnis itaque, voluptate rerum.</p>
                            <small>Review By Lorem ipsum.</small>
                        </div>
                        <div class="list-group-item py-5">
                            <div class="pb-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <h5 class="mb-1">Lorem ipsum dolor sit amet consectetur.</h5>
                            <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro possimus
                                voluptates minima ducimus a, quia eveniet error non optio tempore excepturi vero
                                architecto quas dolores magnam omnis itaque, voluptate rerum.</p>
                            <small>Review By Lorem ipsum.</small>
                        </div>
                        <div class="list-group-item py-5">
                            <div class="pb-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <h5 class="mb-1">Lorem ipsum dolor sit amet consectetur.</h5>
                            <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro possimus
                                voluptates minima ducimus a, quia eveniet error non optio tempore excepturi vero
                                architecto quas dolores magnam omnis itaque, voluptate rerum.</p>
                            <small>Review By Lorem ipsum.</small>
                        </div>
                        <div class="list-group-item py-5">
                            <div class="pb-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <h5 class="mb-1">Lorem ipsum dolor sit amet consectetur.</h5>
                            <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro possimus
                                voluptates minima ducimus a, quia eveniet error non optio tempore excepturi vero
                                architecto quas dolores magnam omnis itaque, voluptate rerum.</p>
                            <small>Review By Lorem ipsum.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact form -->
    <!-- form-control, form-label, form-select, input-group, input-group-text -->
    <section id="contact">
        <div class="container-lg">

            <div class="text-center">
                <h2>Get in Touch</h2>
                <p class="lead">Questions to ask? Fill out the form to contact us directly...</p>
            </div>
            <div class="row justify-content-center my-5">
                <div class="col-lg-6">

                    <form>
                        <label for="email" class="form-label">Email address:</label>
                        <div class="input-group mb-4">
                            <span class="input-group-text">
                                <i class="bi bi-envelope-fill text-secondary"></i>
                            </span>
                            <input type="text" id="email" class="form-control" placeholder="e.g. mario@example.com" />
                        </div>
                        <label for="name" class="form-label">Name:</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-person-fill text-secondary"></i>
                            </span>
                            <input type="text" id="name" class="form-control" placeholder="e.g. Mario" />
                        </div>
                        <label for="subject" class="form-label">What is your question about?</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-chat-right-dots-fill text-secondary"></i>
                            </span>
                            <select class="form-select" id="subject">
                                <option value="pricing" selected>Lorem, ipsum.</option>
                                <option value="content">Lorem, ipsum.</option>
                                <option value="other">Other query</option>
                            </select>
                        </div>
                        <div class="mb-4 mt-5 form-floating">
                            <textarea class="form-control border-danger border-1 shadow-sm" id="query"
                                style="height: 140px" placeholder="query"></textarea>
                            <label for="query">Your query...</label>
                        </div>
                        <div class="mb-4 text-center">
                            <button type="submit" class="btn btn-warning">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- get updates / modal trigger -->
    <section class="bg-light">
        <div class="container">
            <div class="text-center">
                <h2>Stay in The Loop</h2>
                <p class="lead">Get the latest updates as they happen...</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <p class="text-muted my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero
                        exercitationem voluptatibus porro, hic asperiores fuga illo voluptates obcaecati deleniti
                        veritatis sunt saepe quasi deserunt ex ipsum. Est possimus, aspernatur, vitae eligendi rem odit
                        quaerat, ipsum pariatur ratione maxime delectus fuga minus accusamus dolores iusto maiores
                        accusantium cumque magnam placeat quia!</p>
                    <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#reg-modal">
                        Register for Updates
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- modal itself -->
    <div class="modal fade" id="reg-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">Get the Latest Updates</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis, exercitationem laboriosam nihil
                        minus voluptatibus harum aliquam consequatur pariatur inventore dignissimos illum excepturi
                        ratione ipsum sit iusto alias eligendi fugit laborum?</p>
                    <label for="modal-email" class="form-label">Your email address:</label>
                    <input type="text" class="form-control" id="modal-email" placeholder="e.g. mario@example.com">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>