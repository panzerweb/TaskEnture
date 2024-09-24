<?php
    //Work Together with database
    require_once("./database.php");
    //if the logged session is not set or not true, then redirect to login.php
    if (!isset($_SESSION['login_sess'])) {
        header("location: ./login.php");
    }
    //retrieve the logged email and store it in the $email variable
    $email = $_SESSION["login_email"];
    //Perform a query in the database and Select all from the users_table
    $findResult = mysqli_query($connection, "SELECT * FROM users_table WHERE email = '$email'");
    //Fetch the row of an associative array within the query in the database
    if ($row = mysqli_fetch_array($findResult)) {
        //retrieve the following columns of the row
        $username = $row["username"];
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
    <title>Document</title>

    <!-- Bootstrap and CSS -->
    <link rel="stylesheet" href="../css/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-5.3.3-dist/css/bootstrap.css">
</head>
<body>
    <div class="container-lg">
        <div class="row justify-content-center bg-dark text-light w-100 mx-auto my-5 rounded-5">
            <!-- Profile Column -->
            <div class="col-lg-6 mx-auto p-4 my-5">
                <center>
                    <!-- Profile Updated -->
                    <?php if (isset($_GET['profile_updated'])) {?>
                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <img src="..." class="rounded me-2" alt="...">
                                <strong class="me-auto">Taskenture</strong>
                                <small>Just Now...</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Profile Saved!
                            </div>
                        </div>
                    <?php }?>
                    <!-- Password Updated -->
                    <?php if (isset($_GET['password_updated'])) {?>
                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <img src="..." class="rounded me-2" alt="...">
                                <strong class="me-auto">Taskenture</strong>
                                <small>Just Now...</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Password Updated!
                            </div>
                        </div>
                    <?php }?>
                    <!-- Image Showing -->
                    <?php
                        //Image presentation
                        if ($image == null) {
                            echo "
                                    <img src='../assets/img/no-photo.png' alt='No Image'>
                                    <p class='text-center'>No Image Found</p>
                                ";
                        } else {
                            echo "<img src = './assets/img/" . $image . "' style='height:80px;width:auto;border-radius:50%;'>";
                        }
                        
                    ?>
                    <h3>Welcome! <span class="username-span text-success fw-bold"><?php echo $username; ?></span></h3>
                </center>

                <!-- Table Showing the Personal Details -->
                <div class="table-responsive">
                    <table class="table table-info table-striped table-hover">
                        <tr>
                            <th>First Name:</th>
                            <td><?php echo $first_name ?></td>
                        </tr>
                        <tr>
                            <th>Last Name:</th>
                            <td><?php echo $last_name ?></td>
                        </tr>
                        <tr>
                            <th>Username:</th>
                            <td><?php echo $username ?></td>
                        </tr>
                        <tr>
                            <th>Email Address:</th>
                            <td><?php echo $email ?></td>
                        </tr>
                    </table> 
                </div>  
                <div class="button-group text-center">
                    <a href="logout.php" class="mx-2">
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </a>
                    <a href="edit_profile.php" class="mx-2">
                        <button type="submit" class="btn btn-warning">Edit Profile</button>
                    </a>
                    <a href="change_password.php" class="mx-2">
                        <button type="submit" class="btn btn-success">Change Password</button>
                    </a>
                </div>            
            </div>

            <!-- Achievements and Badge Column -->
             <!-- NOTE: To be Updated with Php Scripts for main functionality -->
            <div class="col-lg-6 mx-auto p-4 my-5">
                <div class="table-responsive">
                    <h1>Badges</h1>
                    <table class="table table-danger table-stripped table-hover">
                        <tr>
                            <th>Rookie</th>
                            <td>Completed your first task</td>
                            <td><img src="" alt="Badge"></td>
                        </tr>
                    </table>
                    <h1>Achievements</h1>
                    <table class="table table-danger table-stripped table-hover">
                        <tr>
                            <th>Deleter</th>
                            <td>Deleted your first task</td>
                            <td><img src="" alt="Badge"></td>
                        </tr>
                    </table>
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
