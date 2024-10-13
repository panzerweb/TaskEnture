<?php include("../templates/profile_header.php") ?>

    <div class="col profile-col" style="max-height: 100vh; overflow-y: auto;">
        <div class="row py-2 title-header">
            <h1 class="align-self-start">Profile Details</h1>
        </div>

        <div class="row justify-content-center align-items-center text-center mx-auto my-3">
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
                    // Image presentation
                    if ($image == null) {
                        echo "<img src='../assets/img/no-photo.png' alt='No Image' style='width: 150px; height: 150px; object-fit: cover; border-radius: 50%;'>
                            <p class='text-center text-light'>No Image Found</p>";
                    } else {
                        echo "<img src='../assets/img/" . $image . "' style='width: 30vw; height: 100%; max-width: 300px; max-height: 300px; object-fit: cover; border-radius: 10px; border:2px solid #121212; padding: 0;'>";
                    }
                ?>

                <h3 class="text-dark">Welcome! <span class="username-span text-warning fw-bold"><?php echo $username; ?></span></h3>


                <!-- Table Showing the Personal Details -->
                <div class="table-responsive small">
                    <table class="table table-striped table-hover">
                        <caption class="text-dark">Logged User's registered information</caption>
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
                <div class="d-flex justify-content-center flex-column flex-md-row">
                        <a href="logout.php" class="mx-2 text-decoration-none">
                            <button type="submit" class="btn btn-warning w-100 my-1">Logout</button>
                        </a>
                        <a href="edit_profile.php" class="mx-2 text-decoration-none">
                            <button type="submit" class="btn btn-warning w-100 my-1">Edit Profile</button>
                        </a>
                        <a href="change_password.php" class="mx-2 text-decoration-none">
                            <button type="submit" class="btn btn-warning w-100 my-1">Change Password</button>
                        </a>
                </div>   
                
                <!-- Table for Badges-->
                <div class="table-responsive small my-3">
                    <table class="table table-striped table-hover align-middle text-center">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Badge</th>
                                <th scope="col">Badge Name</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="../assets/img/badges/Rookie.svg" alt="" class="w-100">
                                </td>
                                <td>
                                    <p>Rookie</p>
                                </td>
                                <td>
                                    Completed First Task
                                </td>
                            </tr>
                        </tbody>
                    </table> 
                </div>  
                <!-- Table for Achievements-->
                <div class="table-responsive small my-3">
                    <table class="table table-striped table-hover align-middle text-center">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Badge</th>
                                <th scope="col">Badge Name</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="../assets/img/achievements/New Mindset.svg" alt="" class="w-100">
                                </td>
                                <td>
                                    <p>New Mindset</p>
                                </td>
                                <td>
                                    First Task Ever
                                </td>
                            </tr>
                        </tbody>
                    </table> 
                </div>  
            </div>

            
        </div>
    </div>
            
<?php include("../templates/profile_footer.php") ?>

