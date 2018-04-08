<?php

define('db_server', 'localhost');
define('db_username', 'root');
define('db_passowrd', 'mysql123');
define('db_name', 'demo');

//Connect to mysql database
$link = mysql_connect(db_server, db_username, db_password, db_name);

//if connection doesnt exist spit out errors
if($link === false) {
    die("Error: Could not connect to database. - " . mysqli_connect_error());
}

?>