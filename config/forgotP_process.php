<?php
    //Work Together With Database
    require_once("./database.php");
    //If the button for submitting link is clicked
    if (isset($_POST["submitLink"])) {
        //We will request for the input text field that accepts username and email as input
        $userOrEmail = $_REQUEST["userOrEmail"];
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
                //
                $retrievedEmail = $row["email"];
            }
        }
    }
?>