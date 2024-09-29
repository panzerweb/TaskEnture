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
            if(strlen($username) < 3 || strlen($username) > 50){
                $error[] = "First Name Should be between 3 and 50 characters only.";
            }
            if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $username)){
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand fw-bold fs-3 text-light" href="#">
                        <span class="text-warning">Task</span>enture
                    </a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Learn More
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">About</a></li>
                                <li><a class="dropdown-item" href="#">FAQs</a></li>
                            </ul>
                        </li>
                    </ul>
                <form class="d-flex">
                    <a href="./login.php" class="btn px-3 rounded-3">Login</a>
                </form>
                </div>
            </div>
    </nav>

    <div class="container-lg">
        <div class="row justify-content-center align-items-start">
            <!-- Brand Title and Image -->
            <div class="col-lg-6 mt-5 brand">
                <img src="../assets/logo/Taskenturelogo.svg" alt="" class="img-fluid mx-5">
                <h1 class="fw-bold">Stop Procrastinating and Master your Task</h1>
                <p class="lead text-light">Create Task, do them, and earn badges and achievements along the way as your productivity soars high</p>
            </div>

            <!-- Form for Signup -->
            <div class="sign-up col-lg-6 text-light my-5 rounded-4">
                <!-- Success Message -->
                 <?php if(isset($insertStatusDone)){ ?>
                        <dialog id="uploadDialog"> <!-- 'open' attribute makes the dialog visible -->
                            <div class="dialog-content">
                                <p class="success-mess">Successfully Registered!</p>
                                <a href="login.php" class="btn btn-success">Login here...</a>
                            </div>
                        </dialog>
                <?php }else{?>
                    <div class="signup-form px-3">
                        <form action="" method="post">
                            <h1 class="lead display-6 text-center pt-5 pb-3 fw-bold">Sign Up For Free</h1>
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


    <!-- Bootstrap JavaScript and JavaScript Vanilla-->
    <script src="../css/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../css/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <script src="../css/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>

    <script src="../js/app.js"></script>

</body>
</html>