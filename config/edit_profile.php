<?php 
    //Start Output Buffering
    //temporarily holds any output (like HTML, echo statements, or print statements) from your PHP script before sending it to the browser.
    ob_start();
    include("../templates/profile_header.php") 
?>

<div class="col profile-col">
    <div class="row py-3 title-header">
        <h1 class="align-self-start">Edit Profile</h1>
    </div>
    <div class="row justify-content-center align-items-center text-center mx-auto my-3">
        <form action="" enctype="multipart/form-data" method="post">

            <!-- Call the editing process -->
            <?php include("./edit_process.php") ?>

            <form action="" enctype="multipart/form-data" method="post">
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
                <div class="input-group mb-3">
                    <label class="input-group-text bg-info text-white" for="imageUpload" style="cursor: pointer;">Choose Image</label>
                    <input type="file" class="form-control d-none" id="imageUpload" name="image" accept="image/*" onchange="updateFileName()">
                    <input type="text" class="form-control" id="fileName" placeholder="No file chosen" readonly>
                </div>
                <!-- Form fields for profile information -->
                <div class="input-group flex-nowrap my-3 w-100 mx-auto">
                    <span class="input-group-text bg-secondary text-white" id="addon-wrapping">First Name</span>
                    <input type="text" class="form-control" name="first_name" value="<?php echo $first_name ?>" placeholder="First Name" aria-label="First Name" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap my-3 w-100 mx-auto">
                    <span class="input-group-text bg-secondary text-white" id="addon-wrapping">Last Name</span>
                    <input type="text" class="form-control" name="last_name" value="<?php echo $last_name ?>" placeholder="Last Name" aria-label="Last Name" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap my-3 w-100 mx-auto">
                    <span class="input-group-text bg-danger text-white" id="addon-wrapping">Username</span>
                    <input type="text" class="form-control" name="username" value="<?php echo $username ?>" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                    <!-- Button for the updating -->
                    <button class="btn btn-warning" id="update_profile" name="update_profile">Save Profile</button>
                </div>
            </form>
        </form>
    </div>
</div>

<script>
    //Retrieves the file name from edit_profile.php and displays the name of the file
    function updateFileName(){
        const imageUpload = document.getElementById("imageUpload");
        const fileName = document.getElementById("fileName");

        if (imageUpload.files.length > 0) {
            fileName.value = imageUpload.files[0].name;
        } else {
            fileName.value = "No File Chosen!"
        }
    }
</script>

<?php ob_end_flush() ?>
<?php include("../templates/profile_footer.php") ?>
