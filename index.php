<?php
    require('connection.php');
    include("auth.php");

    $user = (string)$_SESSION['username'];

    $userInfoData = mysqli_query($conn, "SELECT * FROM user WHERE userName='".$_SESSION['username']."'");

    $userData = mysqli_fetch_array($userInfoData);
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

        <div class="row">

            <div class="col-1"></div>

            <div id="panelback" class="col-10">

                <div>
                    <h1 class="text-center">Home</h1>
                    <p class="text-center">Hello, <?php echo $_SESSION['username']; ?>!</p>
                </div>

                <hr>

                <div class="nav-around">
                    <ul>
                        <li class="active"><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="account.php"><i class="fas fa-user"></i> Account</a></li>
                        <li><a href="product.php"><i class="fas fa-gavel"></i> Auction</a></li>
                        <li><a href="sell.php"><i class="fas fa-dollar-sign"></i> Sell</a></li>
                        <li style="float:right"><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul> 
                </div>

                <hr>

                <h4>Account</h4>
                <small id="fileHelp" class="form-text text-muted">Check your account.</small>

                <hr>

                <div class="user-info">
                    <h5>Hello <?php echo $userData['fullName']?>!</h5>
                    <p>How are you today?</p>
                    
                </div>

                <hr>

                <div class="promo1">

                    <h5 class="text-center"><strong>Promotion 1</strong></h5>
                    
                    <a href="product.php" ><img class="img-fluid divCenter" src="images/ad-banner-1.png" alt=""></a>

                </div>

                <br>

                <div class="promo1">

                <h5 class="text-center"><strong>Promotion 2</strong></h5>

                <a href="product.php" ><img class="img-fluid divCenter" src="images/ad-banner-2.jpg" alt=""></a>
                <br>
                </div>               

            <div class="col-1"></div>
        </div>

            </div>
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