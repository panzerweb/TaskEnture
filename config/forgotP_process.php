<?php
    //Php Mailer is not in use! This feature will not work!
    //Do not test this on LocalHost servers, Use of Php Mailer will bypass this issue

    //Work Together With Database
    require_once("./database.php");
    //If the button for submitting link is clicked
    if (isset($_POST["submitLink"])) {
        //We will request for the input text field that accepts username and email as input
        $userOrEmail = mysqli_real_escape_string($connection, $_REQUEST["userOrEmail"]);
        //We will select all from the users_table where it matches with the request
        $selectFromQuery = "SELECT * FROM users_table WHERE (username = '$userOrEmail' OR email = '$userOrEmail')";
        //Perform mysqli_query on the query
        $resultFromQuery = mysqli_query($connection, $selectFromQuery);
        //Retrieve the number of rows from the mysqli_query
        $rows = mysqli_num_rows($resultFromQuery);

        if ($rows == 1) {
            //Let's select all from the users_table where it matches with the request
            $findQuery = mysqli_query($connection, "SELECT * FROM users_table WHERE (username = '$userOrEmail' OR email = '$userOrEmail')");
            if ($row = mysqli_fetch_array($findQuery)) {
                //retrieve the email from the query
                $retrievedEmail = $row["email"];
            }
            //token id generation for OTP
            $token = bin2hex(random_bytes(50));
            //Insert the values of the retrieved email and the token into the table in the query
            $insertToken = mysqli_query($connection, "INSERT INTO password_reset(reset_id,email,token) VALUES('', '$retrievedEmail', '$token')");
            //if the expression of $insertToken is true, then set up the Content and Format of your email
            if ($insertToken) {
                $FromName = "Taskenture";
                $FromEmail = "panzerweb2023@gmail.com";
                $ReplyTo = "taskentureinfo@gmail.com";
                $Credits = "All Rights Reserved | Taskenture";

                $headers  = "MIME-Version: 1.0\n";
                $headers .= "Content-type: text/html; charset=iso-8859-1\n";
                $headers .= "From: ".$FromName." <".$FromEmail.">\n";
                $headers .= "Reply-To: ".$ReplyTo."\n";
                $headers .= "X-Sender: <".$FromEmail.">\n";
                $headers .= "X-Mailer: PHP\n"; 
                $headers .= "X-Priority: 1\n"; 
                $headers .= "Return-Path: <".$FromEmail.">\n"; 

                $subject = "Received your password reset email";
                $message = "Your password reset:" . $token . "Reset your password with this link." . $Credits . ".";

                if (@mail($retrievedEmail, $subject, $message, $headers, '-f'.$FromEmail)) {
                    header("location: ./forgot_password.php?sentEmailOrUser=1");
                    $hide = '1';
                } else {
                    header("location: ./forgot_password.php?servererr=1");
                }
                
            }
            else{
                header("location: ./forgot_password.php?somethingwrong=1");
            }

        }else{
            header("location: ./forgot_password.php?error=" .$userOrEmail);
        }
    }
?>