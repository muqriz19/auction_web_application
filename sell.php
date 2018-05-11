<?php
    //include auth.php file on all secure pages
    include("auth.php");
    include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sell</title>
    <link rel="stylesheet" type="text/css" href="css/awastyles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/fontawesome-all.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>

    <div class="container-fluid">

        
        <!-- Start Logo -->
        <div class="row">
                <div id="logo">
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
                    <h1 class="text-center">Sell</h1>
                    <p class="text-center">Hello, <?php echo $_SESSION['username']; ?>!</p>
                </div>

                <hr>

                <div class="nav-around">
                    <ul>
                        <li class=""><a href="index.php" class=""><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="account.php"><i class="fas fa-user"></i> Account</a></li>
                        <li><a href="product.php"><i class="fas fa-gavel"></i> Auction</a></li>
                        <li class="active"><a href="sell.php"><i class="fas fa-dollar-sign"></i> Sell</a></li>
                        <li style="float:right"><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul> 
                </div>



                <hr>

                <h4>Sell! Sell! Sell!</h4>
                <small id="" class="form-text text-muted">Input the product details required to sell.</small>

                <hr>

                <?php

                    if (isset($_POST['sell-products'])) {

                        
                        $productName = $_POST['product-name'];
                        $productDesc = $_POST['product-desc'];
                        $startBid = $_POST['start-bid'];
                        $duration = $_POST['product-duration'];
                        $productImage = $_FILES['file']['name'];
                        
                        $target_dir = "data/product_images/";
                        $target_file = $target_dir . basename($_FILES["file"]["name"]);

                        // Select file type
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    
                        // Valid file extensions
                        $extensions_arr = array("jpg","jpeg","png","gif");
                    
                        // Check extension
                        if( in_array($imageFileType,$extensions_arr) ){
                        
                        // Insert record
                        $query = "INSERT INTO product (idProduct, productName, productDesc, productImage, startingPrice, productDuration)
                            VALUES (NOT NULL, '$productName', '$productDesc', '$productImage', '$startBid', '$duration')";
                        mysqli_query($conn,$query);
                        
                        // Upload file
                        move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                    
                        }
                        
                    }

                ?>

                <form  method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="product-image"></i> Upload Image</label>
                        <input type="file" name="file" class="form-control-file" id="product-image" aria-describedby="fileHelp">
                        <small id="fileHelp" class="form-text text-muted">Upload a clear product image for better results.</small>
                    </div>

                    <div class="form-group">
                        <label for="product-name"></i> Product Name</label>
                        <input type="text" class="form-control" id="product-name" placeholder="Name of product" name="product-name">
                    </div>
                    
                    <div class="form-group">
                        <label for="product-description"> Description</label>
                        <textarea class="form-control" id="product-description" rows="5" placeholder="Describe the product" name="product-desc"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="starting-bid"></i> Starting Bid</label>
                        <input type="number" class="form-control" id="starting-bid" placeholder="0" name="start-bid">
                    </div>
                    
                    <div class="form-group">
                        <label for="product-duration">Duration</label>
                        <select class="form-control" id="product-duration" name="product-duration">
                            <option value="15">15 Mins</option>
                            <option value="30">30 Mins</option>
                            <option value="45">45 Mins</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary" name="sell-products">Submit</button>
                    
                </form>

                <br>


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