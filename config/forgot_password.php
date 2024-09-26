<?php
    //Work together with Database
    require_once("./database.php");
    //If the logged in session is true, then redirect to the dashboard or profile dashboard
    if (isset($_SESSION["login_sess"])) {
        header("location: ./profile_account.php");
    }

    //If the link is sent successfully
    if (isset($_GET["sentEmailOrUser"])) {
        echo "<div class='success-message'>Reset Link was sent to your email!</div>";
    }
    //This get methods has no basis or existing references, but rather for future references
    //If there is error, then display error
    if (isset($_GET["error"])) {
        $error = $_GET["error"];
        echo "<p class='errormessage'>No User Found</p>";
    }
    //If there is server error, then display error
    if (isset($_GET["servererr"])) {
        echo "<p class='errormessage'>Server Failed! Please try again.</p>";
    }
    //If something went wrong
    if (isset($_GET["somethingwrong"])) {
        echo "<p class='errormessage'>Error 404</p>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskEnture | Forgot Password</title>

    <!-- Bootstrap and CSS -->
    <link rel="stylesheet" href="../css/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-5.3.3-dist/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <form action="forgotP_process.php" method="post" class="bg-dark text-light w-50 mx-auto p-3">
                    <d  iv class="login_form">
                        <div class="form-group">
                        <!-- If the process of being successful is yet to be done -->
                        <?php if(!isset($_GET["sentEmailOrUser"])) {?>
                            <label for="label_text">Username or Email Address</label>
                            <input type="text" class="form-control" name="userOrEmail" id="userOrEmail" value="<?php if(!empty($error)){echo $error;} ?>">
                            <button class="btn btn-primary btn-group form_btn" type="submit" name="submitLink">Send Link</button> 
                        <?php }?>
                        </div>   
                    </div>

                    <p class="text-center">Have an account? <a href="login.php">Log in</a></p>                            
                    <p class="text-center">Don't have an account?<a href="./registration.php">Signup</a></p>

                </form>
            </div>
        </div>
    </div>

     
    <!-- Bootstrap JavaScript and JavaScript Vanilla-->
    <script src="../css/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../css/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <script src="../css/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>

</body>
</html>