<?php
    session_start();
    //Destroy Session
    if (session_destroy()) {
        header("location: ./login.php");
    }
?>