<?php
    //We will work together once with the database
    require_once("./config/database.php");
    //if the logged session is not set or not true, then redirect to login.php
    if (!isset($_SESSION["login_sess"])) {
        header("location: ./login.php");
    }
    //Retrieve the username
    $loginemail = $_SESSION["login_email"];
    //Perform a query that selects * from the users_table WHERE the username is match
    $selectQuery = mysqli_query($connection, "SELECT * FROM users_table WHERE email = '$loginemail'");
    if ($row = mysqli_fetch_assoc($selectQuery)) {
        $username = $row["username"];
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
    <link rel="stylesheet" href="./css/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap-5.3.3-dist/css/bootstrap.css">

    <link rel="stylesheet" href="./css/customcss/dashboard.css  ">
</head>
<body>
    <!-- Whole Content of the Web Application System -->
    <div class="container-fluid overflow-x-hidden">
        <div class="row flex-nowrap">
            <!-- Sidebar -->
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-light min-vh-100">
                    <i class="fs-1 bi bi-bootstrap-fill d-block d-md-none"></i>
                    <a href="" class="d-flex align-items-center pb-1 mb-md-0 me-md-auto text-light text-decoration-none">
                        <span class="fs-2 d-none d-sm-inline fw-bold text-warning">Dashboard</span>
                    </a>
                    <a href="./config/profile_account.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-light text-decoration-none">
                        <!-- Retrieve the username -->
                        <span class="fs-4 d-none d-sm-inline">
                            Hi!
                            <?php echo htmlspecialchars($username); ?>
                        </span>
                    </a>
                    <ul class="nav nav-pills text-light flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li>
                            <a href="#" class="nav-link px-0 align-middle text-light">
                                <i class="fs-3 bi bi-star-fill"></i><span class="ms-1 d-none d-sm-inline">Starred</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#submenu3" data-bs-toggle="dropdown" class="nav-link px-0 align-middle dropdown-toggle text-light" aria-expanded="false">
                                <i class="fs-4 bi-grid"></i> 
                                <span class="ms-1 d-none d-sm-inline">Priorities</span> 
                            </a>
                                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" id="submenu3">
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-0 dropdown-item text-light">
                                            <i class="fs-4 mx-2 bi bi-person-fill"></i>
                                            <span class="d-none d-sm-inline">Personal</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0 dropdown-item text-light">
                                            <i class="fs-4 mx-2 bi bi-person-workspace"></i>
                                            <span class="d-none d-sm-inline">Professional</span>
                                        </a>
                                    </li>
                                </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle text-light">
                            <i class="fs-3 bi bi-trash3-fill"></i></i> <span class="ms-1 d-none d-sm-inline">Trash</span> </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <!-- Retrieve the image -->
                        <a href="#" class="d-flex align-items-center text-light text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php
                                //Image presentation
                                if ($image == null) {
                                    echo "
                                            <img src='./assets/img/no-profile.png' alt='No Image'>
                                        ";
                                } else {
                                    echo "<img src = './assets/img/" . $image . "' style='height:80px;width:auto;border-radius:50%;'>";
                                }
                                
                            ?>
                            <!-- Retrieve the username -->
                            <span class="d-none d-sm-inline mx-1">
                                <?php echo htmlspecialchars($username); ?>
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="./config/profile_account.php">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="./config/logout.php">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ======================================================= -->
            <!-- Table for the Main Todo App Function -->
            <!-- ======================================================= -->
            <div class="row justify-content-center w-100 flex-nowrap">
                <div class="col-lg-12 my-2 mx-2 col-auto">
                    <h1>My List</h1>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap JavaScript and JavaScript Vanilla-->
    <script src="./css/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="./css/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <script src="./css/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
</body>
</html>