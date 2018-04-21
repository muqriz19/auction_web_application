<?php
    //include auth.php file on all secure pages
    include("auth.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/awastyles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fountawesome/fontawesome-min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>

    <div class="container-fluid">

        <!-- Start Logo -->
        <div class="row">
                <div class="img-circle mx-auto d-block logo">
                    <img src="images/logo.png" alt="Auction Web Application Logo">
                </div>
        </div>
    
        <!-- End Logo -->

        <hr>

        <!-- Start About Project Title -->
        <h2 class="text-center">Home</h2>

        <!-- End About Project Title -->

        <hr>

        <div class="row">
            <div class="col-2"></div>
            <div id="about-project-desc" class="col-8 simple-shadow">
            </div>
            <div class="col-2"></div>
        </div>
    </div>


    <!-- Start Footer -->
    <footer class="footer">
        <div class="container">
            <span class="text-muted">Copyright Muhammad Muqriz Bin Othman - 110043806 - Auction Web Application</span>
        </div>
    </footer>
    <!-- End Footer -->

    <script src="js/awascript.js"></script>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper-utils.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>