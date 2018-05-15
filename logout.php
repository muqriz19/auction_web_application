<?php
    session_start();
    // Destroying All Sessions

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log Out</title>
    <link rel="stylesheet" type="text/css" href="css/awastyles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/fontawesome-all.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    
    <div class="container-fluid">

        
        <!-- Start Logo -->
        <div id="logo">
            <div class="row">

                    <img src="images/logo.png" alt="Auction Web Application Logo">
            </div>
            
        </div>
            <!-- End Logo -->

        <hr>

        <div class="back simple-shadow">
            <div class="logout-banner">
            
                <h2 class="text-center">Logging Out!</h2>
                <p class="text-center">You will be redirect to the login page, shortly!</p>
            </div>

        </div>
            
        <hr>

        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <!-- Start Success Talk -->
                    <?php

                        if(session_destroy()) {
                            //echo "<p class='text-center logout'>Loging Out</p>";
                            header('Refresh: 5; url=login.php');
                            exit();

                        }
                    ?>
                <!-- End Success Talk -->
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