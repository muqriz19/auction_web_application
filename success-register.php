<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Successful Register</title>
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

        



        <hr>

        <div class="row">
            <div class="col-sm-2"></div>

            <div class="success back yellow">

                <!-- Start Title -->
                <h2 class="text-center">Registration Successful!</h2>

                <p class="text-center">Congrats! You are now registered in Auction Web Application!</p>

                <p class="text-center">You will be redirected to the login page, shortly! Enjoy!</p>

                <!-- End Title -->

                <p class="text-center">Click here to <a href='login.php'>Login</a> or wait to be automatically redirected!</p>
            
                <!-- Start redirect login -->
                    <?php
                        header('Refresh: 7; url=login.php');
                        exit();

                    ?>

            </div>
            <div class="col-sm-2"></div>
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