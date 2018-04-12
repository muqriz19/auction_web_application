<?php

    //Database Credentials - Server, user, password and database name
    $conn = mysqli_connect('localhost', 'muqriz', 'admin', 'auction_web_application_DB');

    // Check connection else show error message
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>