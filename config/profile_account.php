<?php include("../templates/profile_header.php") ?>

    <div class="col profile-col">
        <div class="row py-3 title-header">
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
                        echo "<img src='../assets/img/no-photo.png' alt='No Image' style='width: 100px; height: 100px; object-fit: cover; border-radius: 50%;'>
                            <p class='text-center'>No Image Found</p>";
                    } else {
                        echo "<img src='../assets/img/" . $image . "' style='width: 20vw; height: auto; object-fit: contain; padding: 0; border:2px solid #121212;'>";
                    }
                ?>
                <h3>Welcome! <span class="username-span text-success fw-bold"><?php echo $username; ?></span></h3>


                <!-- Table Showing the Personal Details -->
                <div class="table-responsive small">
                    <table class="table table-info table-striped table-hover">
                        <caption class="text-light">Logged User's registered information</caption>
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
                            <button type="submit" class="btn btn-danger w-100 my-1">Logout</button>
                        </a>
                        <a href="edit_profile.php" class="mx-2 text-decoration-none">
                            <button type="submit" class="btn btn-warning w-100 my-1">Edit Profile</button>
                        </a>
                        <a href="change_password.php" class="mx-2 text-decoration-none">
                            <button type="submit" class="btn btn-success w-100 my-1">Change Password</button>
                        </a>
                </div>         
            </div>
        </div>
    </div>
            
<?php include("../templates/profile_footer.php") ?>

