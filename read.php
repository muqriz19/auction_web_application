<?php
include("connection.php");

$sql = "SELECT * FROM bidding ORDER BY idBidding ASC";

$result = mysqli_query($conn, $sql) or die("Bad Query: $sql");

while($test = mysqli_fetch_array($result)) {
    $username=$row["username"];
    $text=$row["text"];
    $time=date('G:i', strtotime($row["time"]));
}

?>