<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskEnture | SignUp</title>

    <!-- Bootstrap and CSS -->
    <link rel="stylesheet" href="../css/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/customcss/reg.css">
</head>
<body>

    <!-- Navbar -->
    <?php include("../templates/navbar.temp.php"); ?>

    <div class="container-lg py-5">
        <h1 class="fw-bold text-warning">Frequently Asked Questions</h1>

        <div class="accordion mt-4 pt-5" id="accordionFlushExample">
            <!-- FAQ 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        What is a to-do list?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        A to-do list is a list of tasks you need to complete. It helps you stay organized and remember what needs to be done.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        How do I add a task to my to-do list?
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        To add a task, simply click the "Add Task" button and type in your task. Then, press enter or click the "Save" button.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        How do I mark a task as complete?
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        To mark a task as complete, click the checkbox next to the task. The task will be crossed out to show it is done.
                    </div>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Can I organize my tasks into categories?
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Absolutely! You can create categories and assign tasks to them for better organization.
                    </div>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        Can I edit or delete a task?
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Yes, you can edit a task by clicking on it and making changes. To delete a task, click the "Delete" button next to it.
                    </div>
                </div>
            </div>
        </div>
    </div>

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