<?php
    include('connection.php');

    $username=substr($_GET["username"], 0, 32);
    $text=substr($_GET["text"], 0, 128);
    //escaping is extremely important to avoid injections!
    $nameEscaped = htmlentities(mysqli_real_escape_string($db,$username)); //escape username and limit it to 32 chars
    $textEscaped = htmlentities(mysqli_real_escape_string($db, $text)); //escape text and limit it to 128 chars

    $query = "INSERT INTO bidding ('userName', 'message') VALUES ('$nameEscaped', '$textEscaped')";

?>