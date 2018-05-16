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
    <title>Account</title>
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

                <div class="user-info">
                    <h5 class="text-center">Personal Details</h5>
                    <p><strong>Full Name: </strong> <?php echo $userData['fullName']; ?></p>
                    <p><strong>Username: </strong> <?php echo $userData['userName']; ?></p>
                    <p><strong>Email: </strong> <?php echo $userData['email']; ?></p>
                    <p><strong>Type: </strong> <?php echo $userData['types']; ?></p>
                </div>

                <hr>

                <div class="all-users">
                    <h5><strong>All Users</strong></h5>

                    <table class="table table-bordered simple-shadow" id="user-table">
                        <thead>
                        <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <?php
                                //include("connection.php");
                                
                                $result = mysqli_query($conn, "SELECT * FROM user");
                                
                                while($test = mysqli_fetch_array($result))
                                {
                                    //$id = $test['id']; 
                                    echo"<td>".$test['idUser']."</td>";
                                    echo"<td>".$test['fullName']."</td>";
                                    echo"<td>".$test['userName']."</td>";
                                    echo"<td>".$test['email']."</td>";
                                    echo"<td>".$test['types']."</td>"; 
                                    echo "<td><a style='width: 100%;' href='#edit{$test['idUser']}' data-toggle='modal' class='btn btn-primary'> Edit</a>  <a style='width: 100%;' href='#del{$test['idUser']}' data-toggle='modal' class='btn btn-warning'> Delete</a>";
                                    include ('user_modal.php');
                                    echo "</td>";
                                    echo "</tr>";
                                }
                                mysqli_close($conn);
                            ?>
                    </table>                    

                </div>

                <br>

                <div class="all-products">
                    <h5>All Products</h5>

                    <table class="table table-bordered simple-shadow" id="product-table">
                        <thead>
                        <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Starting Price</th>
                        <th>Duration</th>
                        <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <?php
                                include("connection.php");
                                
                                $result = mysqli_query($conn, "SELECT * FROM product");
                                
                                while($test = mysqli_fetch_array($result))
                                {
                                    echo "<td>".$test['idProduct']."</td>";
                                    echo "<td>".$test['productName']."</td>";
                                    echo "<td>".$test['productDesc']."</td>";
                                    echo "<td>".$test['startingPrice']."</td>";
                                    echo "<td>".$test['productDuration']."</td>";
                                    echo "<td><a style='width: 100%;' href='#edit{$test['idProduct']}' data-toggle='modal' class='btn btn-primary'> Edit</a>  <a style='width: 100%;' href='#del{$test['idProduct']}' data-toggle='modal' class='btn btn-warning'> Delete</a></td>";
                                    include ('product_modal.php');
                                    echo "</tr>";
                                }
                                mysqli_close($conn);
                            ?>
                    </table> 
                </div>

                <!-- <div id="CRUD">
                

                </div> -->
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