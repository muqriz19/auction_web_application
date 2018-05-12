<?php
    require('connection.php');
    include("auth.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account</title>
    <link rel="stylesheet" type="text/css" href="css/awastyles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/fontawesome-all.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>

    <div class="container-fluid">

        <div id="logo">

        <!-- Start Logo -->
        <div class="row">
                <div class="img-circle mx-auto d-block logo">
                    <img src="images/logo.png" alt="Auction Web Application Logo">
                </div>
        </div>
    
        <!-- End Logo -->
        </div>

        <hr>



        <div class="row">

            <div class="col-1"></div>

            <div id="panelback" class="col-10 simple-shadow">

                <div>
                    <h1 class="text-center">Account</h1>
                    <p class="text-center">Hello, <?php echo $_SESSION['username']; ?>!</p>
                </div>

                <hr>

                <div class="nav-around">
                    <ul>
                        <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active"><a href="account.php"><i class="fas fa-user"></i> Account</a></li>
                        <li><a href="product.php"><i class="fas fa-gavel"></i> Auction</a></li>
                        <li><a href="sell.php"><i class="fas fa-dollar-sign"></i> Sell</a></li>
                        <li style="float:right"><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul> 
                </div>

                <hr>

                <h4>Account</h4>
                <small id="fileHelp" class="form-text text-muted">Check your account.</small>

                <hr>

                <div class="all-users">
                    <h6><strong>All Users</strong></h6>

                    <table class="table table-bordered" id="user-table">
                        <thead>
                        <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Type</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <?php
                                //include("connection.php");
                                
                                $result = mysqli_query($conn, "SELECT * FROM user") ;
                                
                                while($test = mysqli_fetch_array($result))
                                {
                                    //$id = $test['id']; 
                                    echo"<td>".$test['idBidder']."</td>";
                                    echo"<td>".$test['fullName']."</td>";
                                    echo"<td>".$test['userName']."</td>";
                                    echo"<td>".$test['email']."</td>";
                                    echo"<td>".$test['types']."</td>"; 
                                    echo "</tr>";
                                }
                                mysqli_close($conn);
                            ?>
                    </table>                    

                </div>

                <br>

                <div class="all-products">
                    <h6>All Products</h6>

                    <table class="table table-bordered" id="product-table">
                        <thead>
                        <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Starting Price</th>
                        <th>Duration</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <?php
                                include("connection.php");
                                
                                $result = mysqli_query($conn, "SELECT * FROM product") ;
                                
                                while($test = mysqli_fetch_array($result))
                                {
                                    //$id = $test['id']; 
                                    echo"<td>".$test['idProduct']."</td>";
                                    echo"<td>".$test['productName']."</td>";
                                    echo"<td>".$test['productDesc']."</td>";
                                    echo"<td>".$test['startingPrice']."</td>";
                                    echo"<td>".$test['productDuration']."</td>"; 
                                    echo "</tr>";
                                }
                                mysqli_close($conn);
                            ?>
                    </table> 
                </div>
            </div>

            <div class="col-1"></div>
        </div>
    </header>

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