<?php 
    $error = [];
    //If the button to update profile is clicked and set
    if (isset($_POST["update_profile"])) {
        // Retrieve information details from POST request
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $username = $_POST["username"];
        
        // Images configuration
        $folder = '../assets/img/';
        $file = $_FILES["image"]["tmp_name"];
        $file_name = $_FILES["image"]["name"];
        $file_name_array = explode('.', $file_name);
        $extension = end($file_name_array);
        $new_image_name = "profile_" . rand() . '.' . $extension;
    
        // Validate file size (5MB max)
        if ($_FILES['image']['size'] > 5000000) {
            $error[] = "Sorry! Your image is too large. Upload less than 5MB.";
        }
    
        // Validate file extensions
        if ($file != "") {
            $valid_extensions = ['jpg', 'jpeg', 'png', 'gif', 'PNG', 'JPG', 'GIF', 'JPEG'];
            if (!in_array($extension, $valid_extensions)) {
                $error[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            }
        }
    
        // Check if username already exists
        $selectFromQuery = "SELECT * FROM users_table WHERE email = '$email'";
        $result = mysqli_query($connection, $selectFromQuery);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($oldUsername != $username && $username == $row["username"]) {
                $error[] = "Username already exists.";
            }
        }
    
        // If there are no errors, update the profile
        if (empty($error)) {
            // Update image if a new one is uploaded
            if ($file != "") {
                $findImageQuery = "SELECT image FROM users_table WHERE email = '$email'";
                $resultOfFind = mysqli_query($connection, $findImageQuery);
                $row = mysqli_fetch_array($resultOfFind);
                $deleteImage = $row["image"];
                if ($deleteImage) {
                    unlink($folder . $deleteImage);
                }
                move_uploaded_file($file, $folder . $new_image_name);
                mysqli_query($connection, "UPDATE users_table SET image = '$new_image_name' WHERE email = '$email'");
            }
            
            // Update the other profile details
            $result = mysqli_query($connection, "UPDATE users_table SET first_name = '$first_name', last_name = '$last_name', username = '$username' WHERE email = '$email'");
            
            if ($result) {
                header("location: ./profile_account.php?profile_updated=1");
            } else {
                $error[] = "Something went wrong while updating.";
            }
        }
    }
    
    // Display errors if there are any
    if (!empty($error)) {
        foreach ($error as $err) {
            echo '<p class="errmsg">' . $err . '</p>';
        }
    }

?>