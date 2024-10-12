<!DOCTYPE html>
<?php 
    //First, we will require the database connection
    require_once("./database.php"); 

    //If the button with the name 'register' is clicked
    if(isset($_POST['register'])){
        //Sanitize Inputs
        $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'] ?? '';
        $passwordConfirm = $_POST['passwordConfirm'] ?? '';

        //initialize error array
        $error = [];

        //Validate First Name
            if(strlen($first_name) < 3 || strlen($first_name) > 20){
                $error[] = "First Name Should be between 3 and 20 characters only.";
            }
            if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $first_name)){
                $error[] = "Invalid Entry First Name. Please Enter letters without digits or special symbols";
            }

        //Validate Last Name
            if(strlen($last_name) < 3 || strlen($last_name) > 20){
                $error[] = "First Name Should be between 3 and 20 characters only.";
            }
            if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $last_name)){
                $error[] = "Invalid Entry Last Name. Please Enter letters without digits or special symbols";
            }

        //Validate Username
            if(strlen($username) < 3 || strlen($username) > 20){
                $error[] = "First Name Should be between 3 and 20 characters only.";
            }
            if(!preg_match("/^[A-Za-z][A-Za-z0-9_]*$/", $username)){
                $error[] = "Invalid Username. No space and no number at the start.";
            }

        //Validate Email    
            if(strlen($email) > 50){
                $error[] = "Max Length: Above 50 characters now allowed";
            }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error[] = "Invalid Email Format";
            }

        //Validate Password
            //if user does not confirm password
            //if the password and the confirm password does not match
            //Password should be between 6 and 50 characters
            if(empty($password) || $password != $passwordConfirm){
                $error[] = "Password not match!";
            }
            if(strlen($password) < 6 || strlen($password) > 50){
                $error[] = "Password should be between 6 and 50 characters only.";
            }

        //Checking of email and username
        if (empty($error)) {
            //Sanitize the input to prevent SQL Injections
            $first_name = mysqli_escape_string($connection, $first_name);
            $last_name = mysqli_escape_string($connection, $last_name);
            $username = mysqli_escape_string($connection, $username);
            $email = mysqli_escape_string($connection, $email);

            //Let's check if the email or username already exist in the database
            $existedQuery = "SELECT * FROM users_table WHERE (username = '$username' OR email = '$email')";
            $resultOfExistingQuery = mysqli_query($connection, $existedQuery);
            //If the database table query has values above 0, then check the key-value pairs of the query as it is an associative array
            if (mysqli_num_rows($resultOfExistingQuery) > 0) {
                $rows = mysqli_fetch_assoc($resultOfExistingQuery);
                //Check if the username and email input matches the username and email in the query
                if ($username == $rows['username']) {
                    $error[] = "Username Already Exist";
                }

                if ($email == $rows['email']) {
                    $error[] = "Email Address Already Exist";
                }

            }
        }

        //Insert user data if there are no errors
        if(empty($error)){
            $date = date('Y-m-d'); //Year - Month - Day
            //Password Hashing to prevent decryption from unknown hackers
            $hashConfig = array("cost" => 5); //Computational Cost is 5 (Default is 10), less secure but faster to compute.
            $password = password_hash($password, PASSWORD_BCRYPT, $hashConfig);

            //Insert data in the database
            $insertQuery = mysqli_query($connection, "INSERT INTO users_table(first_name, last_name, username, email, password, date) VALUES('$first_name', '$last_name', '$username', '$email', '$password', '$date')");

            if ($insertQuery) {
                $insertStatusDone = 2; //Means, it is registered successfully
            }
            else{
                $error[] = "Failed: Something Went Wrong";
            }
        }

        // Output error if there are any
        if (!empty($error)) {
            echo "<dialog id='errorDialog'>
                    <div class='dialog-content'>
                        <h2 class='text-light fs-1'>Error!</h2>";
            foreach($error as $err){
                echo "<p class='errmsg'>&#x26A0; $err</p>";
            }
            echo "  <button id='closeErrorDialog'>Close</button>
                    </div>
                </dialog>";
        }
    
    }
?>
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

    <!-- Navigational Bar -->
    <nav class="navbar navbar-expand-lg bg-light navbar-dark">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="navbar-brand fw-bold fs-3 text-light" href="#">
                <span class="text-warning">Task</span>enture
            </a>
            <!-- Toggler Button to trigger Offcanvas -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Offcanvas -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <!-- Brand -->
                    <a class="navbar-brand fw-bold fs-3 text-light" href="#">
                        <span class="text-warning">Task</span>enture
                    </a>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <!-- Navbar Items -->
                    <ul class="navbar-nav justify-content-start align-self-center flex-grow-1 pe-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Learn More
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#">About</a></li>
                                <li><a class="dropdown-item" href="#">FAQs</a></li>
                            </ul>
                        </li>
                    </ul>

                    <!-- Login Button -->
                    <form class="d-flex align-items-center mt-2">
                        <a href="./login.php" class="btn btn-success px-3 rounded-3">Login</a>
                    </form>
                </div>
            </div>
        </div>
    </nav>

<<<<<<< Updated upstream
    <div class="container-lg">
        <div class="row justify-content-center align-items-start">
            <!-- Brand Title and Image -->
            <div class="col-12 col-md-6 col-lg-6 mt-5 brand">
                <div class="d-flex justify-content-center">
                    <img src="../assets/logo/Taskenturelogo2.svg" alt="" class="mx-auto">
                </div>
                <h1 class="fw-bold mx-auto">Stop Procrastinating and Master your Task</h1>
                <p class="lead text-light mx-auto">Create Task, do them, and earn badges and achievements along the way as your productivity soars high</p>
            </div>

            <!-- Form for Signup -->
            <div class="sign-up col-12 col-md-6 col-lg-6 text-light my-5 rounded-4">
                <!-- Success Message -->
                 <?php if(isset($insertStatusDone)){ ?>
                        <dialog id="uploadDialog"> <!-- 'open' attribute makes the dialog visible -->
                            <div class="dialog-content">
                                <p class="success-mess">Successfully Registered!</p>
                                <a href="login.php" class="btn btn-success">Login here...</a>
                            </div>
                        </dialog>
                <?php }else{?>
                    <div class="signup-form px-4">
                        <form action="" method="post">
                            <h1 class="lead display-6 text-center pt-5 pb-3 fw-bold">Sign Up For Free</h1>
                            <span class="text-light">Username must be 1 to 20 characters, containing only letters a to z, numbers 0 to 9, hyphens, or underscores, and cannot include any inappropriate terms.</span>
                            <div class="form-group my-4">
                                <label class="label_txt">First Name</label>
                                <input type="text" class="form-control" name="first_name" value="<?php if(isset($error)){ echo $_POST['first_name'];} ?>" required="">
                            </div>

                            <div class="form-group my-4">
                                <label class="label_txt">Last Name</label>
                                <input type="text" class="form-control" name="last_name" value="<?php if(isset($error)){ echo $_POST['last_name'];} ?>" required="">
                            </div>

                            <div class="form-group my-4">
                                <label class="label_txt">Username</label>
                                <input type="text" class="form-control" name="username" value="<?php if(isset($error)){ echo $_POST['username'];} ?>" required="">
                            </div>

                            <div class="form-group my-4">
                                <label class="label_txt">Email</label>
                                <input type="email" class="form-control" name="email" value="<?php if(isset($error)){ echo $_POST['email'];} ?>" required="">
                            </div>

                            <div class="form-group my-4">
                                <label class="label_txt">Password</label>
                                <input type="password" name="password" class="form-control" required="">
                            </div>

                            <div class="form-group my-4">
                                <label class="label_txt">Confirm Password</label>
                                <input type="password" name="passwordConfirm" class="form-control" required="">
                            </div>

                            <button type="submit" name="register" class="btn form_btn w-100 mt-3 mb-4">Sign Up</button>
                            <p class="text-center pb-4">Have an account? <a href="login.php" class="text-decoration-none text-warning">Log in</a></p>                            
                        </form>
=======
    <section>
        <div class="container-lg">
            <div class="row justify-content-center align-items-start">
                <!-- Brand Title and Image -->
                <div class="col-12 col-md-12 col-lg-6 mt-5 brand">
                    <div class="d-flex justify-content-center">
                        <img src="../assets/logo/Taskenturelogo2.svg" alt="" class="mx-auto">
>>>>>>> Stashed changes
                    </div>
                    <h1 class="fw-bold mx-auto">Stop Procrastinating and Master your Task</h1>
                    <p class="lead text-light mx-auto">Create Task, do them, and earn badges and achievements along the way as your productivity soars high</p>
                </div>

                <!-- Form for Signup -->
                <div class="sign-up col-12 col-md-12 col-lg-6 text-light my-5 rounded-4">
                    <!-- Success Message -->
                    <?php if(isset($insertStatusDone)){ ?>
                            <dialog id="uploadDialog"> <!-- 'open' attribute makes the dialog visible -->
                                <div class="dialog-content">
                                    <p class="success-mess">Successfully Registered!</p>
                                    <a href="login.php" class="btn btn-success">Login here...</a>
                                </div>
                            </dialog>
                    <?php }else{?>
                        <div class="signup-form px-4">
                            <form action="" method="post">
                                <h1 class="lead display-6 text-center pt-5 pb-3 fw-bold">Sign Up For Free</h1>
                                <span class="text-light">Username must be 1 to 20 characters, containing only letters a to z, numbers 0 to 9, hyphens, or underscores, and cannot include any inappropriate terms.</span>
                                <div class="form-group my-4">
                                    <label class="label_txt">First Name</label>
                                    <input type="text" class="form-control" name="first_name" value="<?php if(isset($error)){ echo $_POST['first_name'];} ?>" required="">
                                </div>

                                <div class="form-group my-4">
                                    <label class="label_txt">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" value="<?php if(isset($error)){ echo $_POST['last_name'];} ?>" required="">
                                </div>

                                <div class="form-group my-4">
                                    <label class="label_txt">Username</label>
                                    <input type="text" class="form-control" name="username" value="<?php if(isset($error)){ echo $_POST['username'];} ?>" required="">
                                </div>

                                <div class="form-group my-4">
                                    <label class="label_txt">Email</label>
                                    <input type="email" class="form-control" name="email" value="<?php if(isset($error)){ echo $_POST['email'];} ?>" required="">
                                </div>

                                <div class="form-group my-4">
                                    <label class="label_txt">Password</label>
                                    <input type="password" name="password" class="form-control" required="">
                                </div>

                                <div class="form-group my-4">
                                    <label class="label_txt">Confirm Password</label>
                                    <input type="password" name="passwordConfirm" class="form-control" required="">
                                </div>

                                <button type="submit" name="register" class="btn form_btn w-100 mt-3 mb-4">Sign Up</button>
                                <p class="text-center pb-4">Have an account? <a href="login.php" class="text-decoration-none text-warning">Log in</a></p>                            
                            </form>
                        </div>
                        <?php }?>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Remaining Section part -->

    <section class="pt-5 mt-5">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="#401F71" style="transform: scaleY(-1);"><path d="M0 0v60c9 0 18-3 25-10 13-14 36-14 50 0s36 14 50 0c13-14 36-14 50 0s36 14 50 0c13-14 36-14 50 0s36 14 50 0c13-14 36-14 50 0s36 14 50 0c13-14 36-14 50 0s36 14 50 0c13-14 36-14 50 0s36 14 50 0c13-14 36-14 50 0s36 14 50 0c13-14 36-14 50 0s36 14 50 0c13-14 36-14 50 0s37 13 50 0c14-14 37-14 50 0 7 7 16 10 25 10V0H0Z"></path></svg>

        <div class="container-fluid remaining-container">
            <div class="container-lg">
                <h1 class="fw-bold">Objective</h1>
                <div class="row mb-5 align-items-center">
                    <div class="col-12 col-lg-5">
                        <img src="../assets/img/objective.svg" class="w-100 p-3">
                    </div>
                    <div class="col-12 col-lg-7">
                        <h2 class="fw-bold fs-1 mb-3">Purpose of this Website</h2>
                        <p class="text-light">
                            Taskenture is a free habit-building and 
                            ToDo Web Application that treats your real life like a game. 
                            With in-game rewards to motivate you, 
                            Taskenture can help you achieve your goals to become healthy, hard-working, and happy.
                        </p>
                        <p class="text-light">
                            Health and Fitness, School and Work, or maybe your personal life? Taskenture is here to help you manage it all!
                            There are only a handful of todo apps in the World Wide Web that makes your tasking
                            a GAMING!
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h1 class="fw-bold pt-5 pb-4 text-center">Key Features</h1>
                    <p class="text-center text-light w-75 mx-auto">
                        Taskenture lets you have this features so that our users can 
                        enjoy our simple web application to its fullest. And our team
                        is working our best to optimize the website as we are in its development.
                    </p>
                </div>
            </div>
            <div class="row mt-5 pb-5 key-features-card">
                <div class="col-12 col-lg-4 mb-3">
                    <div class="container-lg text-center text-light">
                        <img src="../assets/img/simpleui.svg"  alt="" class="w-100">
                        <h3 class="mt-5 mb-3">Friendly User Interface</h3>
                        <p class="card-text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Totam est eos, repudiandae minus pariatur dolorem porro dolore mollitia.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-3">
                    <div class="container-lg text-center text-light">
                        <img src="../assets/img/taskmanage.svg"  alt="" class="w-100">
                        <h3 class="mt-5 mb-3">Task Management</h3>
                        <p class="card-text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Totam est eos, repudiandae minus pariatur dolorem porro dolore mollitia.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-3">
                    <div class="container-lg text-center text-light">
                        <img src="../assets/img/getreward.svg"  alt="" class="w-100">
                        <h3 class="mt-5 mb-3">Friendly User Interface</h3>
                        <p class="card-text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Totam est eos, repudiandae minus pariatur dolorem porro dolore mollitia.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Gamify Section -->
            <div class="row justify-content-center align-items-center px-3" style="padding-top: 10rem; padding-bottom: 10rem;">
                <div class="col-12 col-lg-4">
                    <img src="../assets/img/award.svg"  alt="" class="text-center w-100">
                </div>
                <div class="col-12 col-lg-6">
                    <h1 class="fw-bold fs-1 mb-3">Badges and Achievements</h1>
                    <p class="text-light text-left">
                        Earn Badges and Achievements as you complete your task and hoard everything.
                        Show off to your friends, and most important? Show yourself that you are capable.
                        Taskenture hopes that with this badges and achievements, we are able to help you
                        stay motivated and on the go for every task in your life.
                    </p>

                    <!-- /* From Uiverse.io by reshades */  -->
                    <a href="#" class="gamify-btn btn">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.65-6.75M19.5 12l-6.75 6.75"></path>
                        </svg>
                        <div class="text">
                            Badges and Achievements
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>





    <footer>
        <div class="footer-content text-center text-light">
            <p style="font-size: 15px"> © 2024 Taskenture. IT2 Institute of Computing - DSNC. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JavaScript and JavaScript Vanilla-->
    <script src="../css/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../css/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <script src="../css/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>

    <script src="../js/app.js"></script>

</body>
</html>