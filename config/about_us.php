<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskEnture | SignUp</title>

    <!-- Bootstrap and CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/customcss/reg.css">
    <link rel="stylesheet" href="../css/customcss/about.css">
</head>
<body>

    <!-- Navbar -->
    <?php include("../templates/navbar.temp.php"); ?>



    <!-- Main Content -->
    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner h-100">
            <div class="carousel-item active bg-1">
                <div class="carousel-caption ">
                    <h1 class="fw-bold">Gamify your life</h1>
                    <p>Earn Rewards in your journey.</p>
                </div>
            </div>
            <div class="carousel-item bg-2">
                <div class="carousel-caption">
                    <h1 class="fw-bold">Manage Yourself</h1 class="fw-bold">
                    <p>Success lies only within you.</p>
                </div>
            </div>
            <div class="carousel-item bg-3">
                    <div class="carousel-caption">
                        <h1 class="fw-bold">Consistency is the key</h1 class="fw-bold">
                        <p>Your future self will thank you for your perseverance.</p>
                    </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Achievements and Badges -->
    <div class="container-lg">
        <div class="text-center mt-5">
            <h1 class="fw-bold">Badges and Achievements</h1>
            <p class="text-light w-75 mx-auto fs-4">Nothing is more rewarding than being rewarded for being productive and completing tasks of your life.</p>
        </div>
        <div class="masonry">
            <!-- Achievements -->
            <div class="item item1">
                <img src="../assets/img/achievements/New Mindset.svg" alt="New Mindset Achievement" class="img-fluid w-100">
                <div class="overlay">
                    <h1 class="fs-1 fw-bold">New Mindset</h1>
                    <p class="lead fs-6">Achieve at 1 Task Completed</p>
                </div>
            </div>
            <div class="item item2">
                <img src="../assets/img/achievements/Productive Human.svg" alt="New Mindset Achievement" class="img-fluid w-100">
                <div class="overlay">
                    <h1 class="fs-1 fw-bold">Productive Human</h1>
                    <p class="lead fs-6">Achieve at 5 Task Completed</p>
                </div>
            </div>
            <div class="item item3">
                <img src="../assets/img/achievements/Deleter.svg" alt="New Mindset Achievement" class="img-fluid w-100">
                <div class="overlay">
                    <h1 class="fs-1 fw-bold">Deleter</h1>
                    <p class="lead fs-6">First Deletion of a Task</p>
                </div>
            </div>
            <div class="item item4">
                <img src="../assets/img/achievements/Task Empire.svg" alt="New Mindset Achievement" class="img-fluid w-100">
                <div class="overlay">
                    <h1 class="fs-1 fw-bold">Task Empire</h1>
                    <p class="lead fs-6">20 Task Complete</p>
                </div>
            </div>
            <!-- Badges -->
            <div class="item item5">
                <img src="../assets/img/badges/Rookie.svg" alt="New Mindset Achievement" class="img-fluid w-100">
                <div class="overlay">
                    <h1 class="fs-1 fw-bold">Rookie</h1>
                    <p class="lead fs-6">Badge Level 1: 1 Task Complete</p>
                </div>
            </div>
            <div class="item item6">
                <img src="../assets/img/badges/Elite.svg" alt="New Mindset Achievement" class="img-fluid w-100">
                <div class="overlay">
                    <h1 class="fs-1 fw-bold">Elite</h1>
                    <p class="lead fs-6">Badge Level 2: 5 Task Complete</p>
                </div></div>
            <div class="item item7">
                <img src="../assets/img/badges/Knight.svg" alt="New Mindset Achievement" class="img-fluid w-100">
                <div class="overlay">
                    <h1 class="fs-1 fw-bold">Knight</h1>
                    <p class="lead fs-6">Badge Level 3: 10 Task Complete</p>
                </div>
            </div>
            <div class="item item8">
                <img src="../assets/img/badges/Emperor.svg" alt="New Mindset Achievement" class="img-fluid w-100">
                <div class="overlay">
                    <h1 class="fs-1 fw-bold">Emperor</h1>
                    <p class="lead fs-6">Badge Level 4: 20 Task Complete</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Team -->
    <section class="pt-5 mt-5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="#401F71" style="transform: scaleY(-1);"><path d="M0 0v60c9 0 18-3 25-10 13-14 36-14 50 0s36 14 50 0c13-14 36-14 50 0s36 14 50 0c13-14 36-14 50 0s36 14 50 0c13-14 36-14 50 0s36 14 50 0c13-14 36-14 50 0s36 14 50 0c13-14 36-14 50 0s36 14 50 0c13-14 36-14 50 0s36 14 50 0c13-14 36-14 50 0s36 14 50 0c13-14 36-14 50 0s37 13 50 0c14-14 37-14 50 0 7 7 16 10 25 10V0H0Z"></path></svg>
        <div class="container-fluid team-container pb-5">
            <div class="container-lg">
                <div class="text-center py-3 pb-5">
                    <h1 class="fw-bold">Our Team</h1>
                    <p class="text-light w-75 mx-auto fs-4">
                        A Group of young and wonderful developers worked together to make this project possible.
                    </p>
                </div>
                <div class="row justify-content-center g-3">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card shadow-sm border-0">
                            <!-- Cover Photo -->
                            <img src="../assets/img/carousel/bg1.jpg" class="card-img-top" alt="Cover Photo" style="height: 120px; object-fit: cover;">

                            <!-- Profile Picture -->
                            <div class="d-flex justify-content-center" style="margin-top: -40px;">
                                <img src="../assets/img/developers/dev1 (1).jpg" class="rounded-circle border border-3" alt="Profile Picture" style="width: 100px; height: 100%;">
                            </div>

                            <div class="card-body text-center">
                                <h5 class="card-title">Selwyn Villar</h5>
                                <p class="card-subtitle mb-2 ">Project Leader</p>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-meta"></i></a>
                                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-instagram"></i></a>
                                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-tiktok"></i></a>
                                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-github"></i></a>
                                </div>
                                <small class="text-light d-block mt-3">Joined: 2024</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card shadow-sm border-0">
                            <!-- Cover Photo -->
                            <img src="../assets/img/carousel/bg1.jpg" class="card-img-top" alt="Cover Photo" style="height: 120px; object-fit: cover;">

                            <!-- Profile Picture -->
                            <div class="d-flex justify-content-center" style="margin-top: -40px;">
                                <img src="../assets/img/developers/dev2.jpg" class="rounded-circle border border-3" alt="Profile Picture" style="width: 100px; height: 100%;">
                            </div>

                            <div class="card-body text-center">
                                <h5 class="card-title">Joseph Paquinol</h5>
                                <p class="card-subtitle mb-2 ">Web Developer</p>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-meta"></i></a>
                                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-instagram"></i></a>
                                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-tiktok"></i></a>
                                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-github"></i></a>
                                </div>
                                <small class="text-light d-block mt-3">Joined: 2024</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card shadow-sm border-0">
                            <!-- Cover Photo -->
                            <img src="../assets/img/carousel/bg1.jpg" class="card-img-top" alt="Cover Photo" style="height: 120px; object-fit: cover;">

                            <!-- Profile Picture -->
                            <div class="d-flex justify-content-center" style="margin-top: -40px;">
                                <img src="../assets/img/developers/dev3.jpg" class="rounded-circle border border-3" alt="Profile Picture" style="width: 100px; height: 100%;">
                            </div>

                            <div class="card-body text-center">
                                <h5 class="card-title">Cyrel Morales</h5>
                                <p class="card-subtitle mb-2 ">Web Developer</p>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-meta"></i></a>
                                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-instagram"></i></a>
                                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-tiktok"></i></a>
                                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-github"></i></a>
                                </div>
                                <small class="text-light d-block mt-3">Joined: 2024</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card shadow-sm border-0">
                            <!-- Cover Photo -->
                            <img src="../assets/img/carousel/bg1.jpg" class="card-img-top" alt="Cover Photo" style="height: 120px; object-fit: cover;">

                            <!-- Profile Picture -->
                            <div class="d-flex justify-content-center" style="margin-top: -40px;">
                                <img src="../assets/img/developers/dev4.jpg" class="rounded-circle border border-3" alt="Profile Picture" style="width: 100px; height: 100%;">
                            </div>

                            <div class="card-body text-center">
                                <h5 class="card-title">Stephanie Losabia</h5>
                                <p class="card-subtitle mb-2 ">Graphic Designer</p>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-meta"></i></a>
                                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-instagram"></i></a>
                                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-tiktok"></i></a>
                                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-github"></i></a>
                                </div>
                                <small class="text-light d-block mt-3">Joined: 2024</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <!-- Footer -->
        <div id="foot">
    <footer class="text-center text-lg-start text-white">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-between p-3" style="background-color: #6351ce">
        <!-- Left -->
        <div class="me-5">
            <span>Get connected with us on social networks:</span>
        </div>
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links -->
        <section class="">
        <div class="container text-center text-md-start mt-2">
            <!-- Grid row -->
            <div class="row mt-3 justify-content-between">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-2">
                <!-- Content -->
                <h3 class="text-uppercase fw-bold"><span style="color: #FDAF7B">Task</span>enture</h3>
                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 10rem; background-color: #7c4dff; height: 2px">
                <p>"Success is the sum of small efforts, repeated day in and day out. Taking notes is just one of those small efforts that leads to big achievements."</p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold">Contacts:</h6>
                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 80px; background-color: #7c4dff; height: 2px">
                <p><i class="bi bi-home mr-3"></i> Email: <a href="#" class="text-white text-decoration-none">Taskenture@gmail.com</a></p>
                <p><i class="fas fa-envelope mr-3"></i> Facebook: <a href="#" class="text-white text-decoration-none">Facebook.com/Taskenture</a></p>
            </div>
            <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        </section>
        <!-- Section: Links -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Taskenture. IT2 Institute of Computing - DSNC. All rights reserved.
        </div>
    </footer>
    </div>

    <!-- Bootstrap JavaScript and JavaScript Vanilla-->
    <script src="../css/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../css/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <script src="../css/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>

    <script src="../js/app.js"></script>
</body>
</html>