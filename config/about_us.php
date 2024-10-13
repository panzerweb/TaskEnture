<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskEnture | SignUp</title>

    <!-- Bootstrap and CSS -->
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
            <p class="text-light w-75 mx-auto">Nothing is more rewarding than being rewarded for being productive and completing tasks of your life.</p>
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

    <!-- Bootstrap JavaScript and JavaScript Vanilla-->
    <script src="../css/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../css/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <script src="../css/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>

    <script src="../js/app.js"></script>
</body>
</html>