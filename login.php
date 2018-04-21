<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/awastyles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/fontawesome-all.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>

<?php

    require('connection.php');

    //start this (user ((page)) specific session
    session_start();

    //check if form is submitted
    if(isset($_POST['username'])) {

        $username = stripslashes($_REQUEST['username']);
        //$username = mysqli_real_escape_string($conn,$username);
        
        //$password = stripslashes($_REQUEST['password']);
        //$password = mysqli_real_escape_string($conn,$password);
        //$password = md5($_REQUEST[$password]);

        //check whether user exist in db or not   
        $query = "SELECT * FROM  user WHERE userName='$username'";//AND userPassword='".md5($password)."'";

        echo "Query1=".$query;

        $result = mysqli_query($conn,$query) or die(mysqli_error($conn));

        $rows = mysqli_num_rows($result);

        echo $rows;
        
        if($rows == 1) {
            $_SESSION['username'] = $username;
            echo "fffff";
            // Redirect user to index.php
            header("Location: index.php");
            
        } else {

            echo "<div class='form'>
            <h3>Username/password is incorrect.</h3>
            <br/>Click here to <a href='login.php'>Login</a></div>";

        }


    } else {

    }

?>
    
    <div class="container-fluid">

        <!-- Start Logo -->
        <div class="row">
            <div class="img-circle mx-auto d-block logo">
                <img src="images/logo.png" alt="Auction Web Application Logo">
            </div>
        </div>

        <!-- End Logo -->
        <hr>

        <!-- Start Title -->
        <h2 class="text-center">Welcome to Auction Web Application</h2>

        <p class="text-center">Chat away to auction. The new way to auction using chat!</p>

        <!-- End Title -->

        <hr>

        <div class="row">
            <div class="col-2"></div>
            <div id="login-form" class="col-8 simple-shadow">
                <!-- Start Login Form -->

                <form action="" method="POST">
                    <div class="form-group">
                        <label for="login-username"></i> Username</label>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" name="username" id="login-username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="login-password"></i> Password</label>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" name="password" id="login-password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>

                    <p>New? Register <a href="register.php" id="registerLink">Here!</a></p>

                </form>

                <!-- End Login Form -->
            </div>
            <div class="col-2"></div>
        </div>
    </div>


    <!-- Start Footer -->
    <footer class="footer">
    <div class="container">
        <span class="text-muted">Copyright Muhammad Muqriz Bin Othman - 110043806 - Auction Web Application - <span class="text-muted"><a href="about_project.html">About Project</a></span></span>
    </div>
    </footer>
    <!-- End Footer -->

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper-utils.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>