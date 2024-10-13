<!-- This is the header for the all profile related pages -->

<?php
    //We will work together once with the database
    require_once("./database.php");
    //if the logged session is not set or not true, then redirect to login.php
    if (!isset($_SESSION["login_sess"])) {
        header("location: ./login.php");
    }
    //Retrieve the username
    $loginemail = $_SESSION["login_email"];
    //Perform a query that selects * from the users_table WHERE the username is match
    $selectQuery = mysqli_query($connection, "SELECT * FROM users_table WHERE email = '$loginemail'");
    if ($row = mysqli_fetch_assoc($selectQuery)) {
        //retrieve the following columns of the row
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
    <title>Dashboard | Taskenture</title>

    <!-- Bootstrap and CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-5.3.3-dist/css/bootstrap.css">

    <link rel="stylesheet" href="../css/customcss/dashboard.css">
    <link rel="stylesheet" href="../css/customcss/profile.css">
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="sidebar col-auto col-md-3 col-xl-2 px-sm-2 px-0">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-light text-decoration-none">
                    <img src="../assets/logo/TaskentureLogo(W).png" alt="" width="50" class="d-block d-sm-none">
                    <span class="fs-3 fw-bold text-warning d-none d-sm-inline">TaskEnture</span>
                </a>
                <span class="fs-4 d-none d-lg-block mb-5">
                    Hi, 
                    <?php
                        echo htmlspecialchars($username);
                    ?>
                </span>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="../dashboard.php" class="nav-link align-middle px-0 text-light">
                            <i class="fs-4 bi bi-list-columns"></i><span class="ms-2 d-none d-sm-inline">My List</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="../starred.php" class="nav-link px-0 align-middle text-light">
                            <i class="fs-4 bi bi-star-fill"></i><span class="ms-2 d-none d-sm-inline">Starred</span> 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../label.php" class="nav-link px-0 align-middle text-light">
                            <i class="fs-4 bi-people"></i><span class="ms-2 d-none d-sm-inline">Labels</span> 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../trash_page.php" class="nav-link px-0 align-middle text-light">
                            <i class="fs-4 bi bi-trash-fill"></i><span class="ms-2 d-none d-sm-inline">Trash</span> 
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <!-- Image Showing -->
                    <!-- Image Showing -->
                    <?php
                        // Image presentation
                        if ($image == null) {
                            echo "<img src='../assets/img/no-photo.png' alt='No Image' class='profile-img no-photo'>
                                ";
                        } else {
                            echo "<img src='../assets/img/" . $image . "' class='profile-img uploaded-img'>";
                        }
                    ?>
                        <span class="d-none d-sm-inline mx-1">
                            <?php
                                echo htmlspecialchars($username);
                            ?>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="../config/profile_account.php">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="../config/logout.php">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>