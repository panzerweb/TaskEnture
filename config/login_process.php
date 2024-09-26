<?php
    //Work together with the database
    require_once("./database.php");
    //When the login button is clicked
    if (isset($_POST["login"])) {
        //retrieve the user or email input, as well as the password input field
        $userOrEmail = $_POST["userOrEmail"];
        $password = $_POST["password"];
        //SELECT all from the table where username and email are matched to the user or email input
        $selectQuery = "SELECT * FROM users_table WHERE (username = '$userOrEmail' OR email = '$userOrEmail')";
        $result = mysqli_query($connection, $selectQuery);
        //Get the number of rows of the query
        $rows = mysqli_num_rows($result);
            //If the rows inside the query has just a one value
            if ($rows == 1) {
                //fetch the associative arrays in the row
                $row = mysqli_fetch_assoc($result);
                //We verify the password in the field and the password in the database
                if(password_verify($password, $row['password'])){
                    //We create two session variables to get user data if login is successful
                    $_SESSION["login_sess"] = 1; //The user has logged in
                    $_SESSION['login_email'] = $row['email']; //storing the logged email
                    header("location: ../dashboard.php");
                }
                else{
                    header("location:login.php?login_error=" . $userOrEmail);
                }

            }else{
                header("location:login.php?login_error=" . $userOrEmail);
            }
    }
?>