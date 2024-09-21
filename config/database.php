<?php
    session_start();

    $dbHost = 'localhost';
    $dbName = 'Taskenture';
    $dbUser = 'root';
    $dbPass = '';

    $connection = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
        if (mysqli_connect_errno()) {
            echo "Failure to Connect to MySQL Database" . mysqli_connect_errno();
        }
?>
