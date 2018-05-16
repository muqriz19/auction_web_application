<?php


    if(isset($_GET['id'])) {
        //include auth.php file on all secure pages
        include("connection.php");
        include("auth.php");

        $ID = mysqli_real_escape_string($conn, $_GET['id']);
    
        $sql = "SELECT * FROM product WHERE idProduct= '$ID'";
        $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");
        $row = mysqli_fetch_array($result);

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>
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

            <div id="panelback" class="col-10 simple-shadow">

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
                
                <div id="all-box" class="simple-shadow">

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="product-image">

                                <img class="img-fluid" src="data/product_images/<?php echo $row['productImage'] ?>" alt="">
                            </div>

                        </div>


                        <div class="col-sm-8">
                            <div id="product-details">

                                <h4><?php echo $row['productName']; ?></h4>
                                <p><?php echo $row['productDesc']; ?></p>
                                <h5>Starting Bid RM<?php echo $row['startingPrice']; ?></h5>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            
                            <div id="auction-info">

                                <h4 class="text-center">Time Left: <span id="countdown" class="timer"><?php echo $row['productDuration']; ?></span></h4>
                                
                                <h4 class="text-center">Highest Bid: RM<span id="highBid"><?php echo $row['startingPrice']; ?></span></h4>
                            </div>
                        </div>
                    </div>               

                    <div class="row">
                        <div class="col-sm-12">
                            <div id="wrapper">
                                <div id="menu">
                                    <div requirestyle="clear:both"></div>
                                </div>
                                
                                <div id="chatbox" class="card">
                                </div>
                                
                                <form name="bid" method>
        
                                    <div class="form-group" id="chat-message">
                                        <div class="input-group">
                                            <input id="bid-input" type="text" name="usermsg" class="form-control input-sm chat_input" placeholder="Write your message here..." />
                                            <span class="input-group-btn">
                                            <button name="submitmsg" id="submitmsg" class="btn btn-primary">Bid</button>
                                            </span>
                                        </div>
                                    </div>
                                </form>                             
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <br>


            </div>

            <div class="col-1"></div>
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

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/easytimer.js"></script>
    <script>

    timedata = parseInt(document.getElementById("countdown").innerHTML);

    if (timedata === 15) {
        timedata = 900;

    } else if(timedata === 30) {
        timedata = 1800;

    } else if (timedata === 45) {
        timedata = 2700;

    }
    console.log(timedata);

    var time = new Timer();

    time.start({countdown: true, startValues: {seconds: timedata}});
    $('#countdown').html(time.getTimeValues().toString());
    time.addEventListener('secondsUpdated', function (e) {
        $('#countdown').html(time.getTimeValues().toString());
    });
    time.addEventListener('targetAchieved', function (e) {
        $('#countdown').html('Auction Has Ended');
    });

                

    </script>
    <script src="js/awascript.js"></script>
    <script src="js/popper-utils.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>