<!DOCTYPE html>
    <?php
        require_once("./database.php");
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskEnture | Login</title>

    <!-- Bootstrap and CSS -->
    <link rel="stylesheet" href="../css/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-5.3.3-dist/css/bootstrap.css">

    <link rel="stylesheet" href="../css/customcss/login.css">
</head>
<body>
    <div class="container-lg">
        <div class="row justify-content-center align-items-center my-5">
            <div class="col-lg-6 mx-auto my-5">
                <div class="login-form p-3 px-4 text-light">
                    <form action="./login_process.php" method="post" class="px-2">
                        <div class="form-group my-3">
                            <div class="d-flex justify-content-center mb-3">
                                <img src="../assets/logo/landscape.svg" alt="Brand Image" class="logo img-fluid my-1 text-center mx-auto">
                            </div>
                                <?php
                                    //retrieves an error if there are any
                                    if (isset($_GET["login_error"])) {
                                        $login_error = $_GET["login_error"];
                                    }
                                    //if the error is true, then display an HTML Dialog box
                                    if (!empty($login_error)) {
                                        echo "
                                                <dialog id='errorDialog'>
                                                    <div class='dialog-content'>
                                                        <h2>Error!</h2>
                                                        <p class='errmsg'>&#x26A0; Invalid login credentials, Please Try Again..</p>
                                                        <button id='closeErrorDialog'>Close</button>
                                                    </div>
                                                </dialog>
                                            ";
                                    }
                                ?>

                            <label for="label_txt">Username or Email</label>
                            <input type="text" name="userOrEmail" id="userOrEmail" value="<?php if(!empty($login_error)){echo $login_error;} ?>" class="form-control" required="">

                        </div>
                        <div class="form-group my-3">
                            <label for="label_txt">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required="">
                        </div>

                        <button type="submit" name="login" class="btn form_btn w-100 mt-3 mb-4">Login</button>

                        <!-- <p class="text-center">
                            <a href="./forgot_password.php" class="text-decoration-none text-warning forgot-password">Forgot Password?</a>
                        </p> -->
                        
                        <p class="text-center">Don't have an account?
                            <a href="./registration.php" class="mx-1 text-decoration-none text-warning">Signup</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

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