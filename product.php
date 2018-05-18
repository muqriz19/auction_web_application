<?php
    
    //include auth.php file on all secure pages
    include("auth.php");
    include("connection.php");


    $result = mysqli_query($conn, "SELECT idProduct, productName, productImage, startingPrice FROM product ORDER BY idProduct DESC LIMIT 15");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auction</title>
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
                    <h1 class="text-center">Auction</h1>
                    <p class="text-center">Hello, <?php echo $_SESSION['username']; ?>!</p>
                </div>

                <hr>

                <div class="nav-around">
                    <ul>
                        <li class=""><a href="index.php" class=""><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="account.php"><i class="fas fa-user"></i> Account</a></li>
                        <li class="active"><a href="product.php"><i class="fas fa-gavel"></i> Auction</a></li>
                        <li><a href="sell.php"><i class="fas fa-dollar-sign"></i> Sell</a></li>
                        <li style="float:right"><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul> 
                </div>



                <hr>

                <h4>Ready to Auction?</h4>
                <small id="" class="form-text text-muted">Checkout the all the available products for auction.</small>

                <hr>
                   
                
                <div class='row'>
                    <?php

                        if(mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<div class='col-sm-6'>";
                                echo "<div id='box'>";
                                echo "<h5 class='text-center'>{$row['productName']}</h5>";
                                echo "<hr>";
                                echo "<img id='box-image' class='img-fluid' src=data/product_images/{$row['productImage']} alt={$row['productImage']}>";
                                echo "<hr><p class='text-center'>Starting Price - RM{$row['startingPrice']}</p>";
                                echo "<hr><a id='max-btn' href='details.php?id={$row['idProduct']}' class='btn btn-success'><i class='fas fa-gavel'></i></a>";

                                echo "</div></div><br>";

                            }
                        } else {
                            echo "Nothing";
                        }

                    ?>

                </div>

                <br>


            </div>

            <div class="col-1"></div>
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