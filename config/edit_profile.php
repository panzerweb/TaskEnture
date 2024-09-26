<?php
    //Work Together with the database
    require_once("./database.php");
    //Check if the user is logged in, if not redirect to login page
    if (!isset($_SESSION["login_sess"])) {
        header("location: ./login.php");
    }
    //Retrieve the login_email and select all from users_table that match
    $login = $_SESSION["login_email"];
    $selectQuery = mysqli_query($connection, "SELECT * FROM users_table WHERE email = '$login'");
    //Fetch array from query and store the columns
    if ($row = mysqli_fetch_array($selectQuery)) {
        $username = $row["username"];
        $oldUsername = $row["username"];
        $first_name = $row["first_name"];
        $last_name = $row["last_name"];
        $email = $row["email"];
        $image = $row["image"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>

    <!-- Bootstrap and CSS -->
    <link rel="stylesheet" href="../css/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-5.3.3-dist/css/bootstrap.css">
</head>
<body>
    <div class="container-lg">
        <div class="row justify-content-center bg-dark text-light w-100 mx-auto my-5 rounded-5">
            <div class="col-lg-12 mx-auto p-4 my-5">
                <center>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="login-form">
                        <img src="" alt="Brand Image">
                        <br>
                        
                        <?php
                            //If the button to update profile is clicked and set
                            if (isset($_POST["update_profile"])) {
                                
                            }
                        ?>
                    </div>
                </form>
                </center>
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
