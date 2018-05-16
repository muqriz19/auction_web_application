<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="css/awastyles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/fontawesome-all.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>

<?php

    require('connection.php');

    //If form submitted, insert values into the database.
    if (isset($_REQUEST['fullname'])){
        
        /*

            stripslashes() removes backslashes
            escapes special characters in a string
            mysqli_real_escape_string()

        */
        $fullname = stripslashes($_POST['fullname']);
        $fullname = mysqli_real_escape_string($conn,$fullname);

        $username = stripslashes($_POST['username']);
        $username = mysqli_real_escape_string($conn,$username);

        $email = stripslashes($_POST['email']);
        $email = mysqli_real_escape_string($conn,$email);

        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($conn,$password);

        $dateofbirth = stripcslashes($_POST['dob']);
        $dateofbirth = date("Y-m-d H:i:s", strtotime($dateofbirth));

        $types = stripslashes($_POST['types']);
        $types = mysqli_real_escape_string($conn,$types);

        $user = "INSERT INTO user (idUser, fullName, userName, dateOfBirth, email, userPassword, types)
            VALUES (NULL, '$fullname', '$username', '$dateofbirth',  '$email', '".md5($password)."', '$types')";

            
            $result = mysqli_query($conn, $user) or die(mysqli_error($conn));

            header('Location: success-register.php');
            exit();
    }

?>
    
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
            <div class="col-2"></div>
            <div id="register-form" class="col-8 simple-shadow">
                <!-- Start Login Form -->

                <div class="title">
            
            <!-- Start Title -->
            <h2 class="text-center">New? Register Away!</h2>
            
            <p class="text-center">Kindly input your registration details to create an account.</p>
            
            <!-- End Title -->
        </div>
          
          <hr>

                <form name="registration" action="" method="post">
                    <div class="form-group">
                        <label for="register-fullname"></i> Full Name</label>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="fullname" class="form-control" id="register-fullname" placeholder="Full Name" aria-label="Full Name" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <label for="register-lastname"></i> Last Name</label>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="lastname"  class="form-control" id="register-lastname" placeholder="Last Name" aria-label="Last Name" aria-describedby="basic-addon1">
                        </div>
                    </div> -->
                    
                    <div class="form-group">
                        <label for="register-username"></i> Username</label>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="username" class="form-control" id="register-username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="register-dob"></i> Date of Birth</label>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="far fa-calendar-alt"></i></span>
                        </div>
                        <input type="date" name="dob" class="form-control" id="register-dob" placeholder="Date of Birth" aria-label="Date of Birth" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="register-email"></i> Email</label>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                        </div>
                        <input type="email" name="email" class="form-control" id="register-email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="register-password"></i> Password</label>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control" id="register-password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <label for="register-confirm-pass"></i> Confirm Password</label>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" id="register-confirm-pass" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="basic-addon1">
                        </div>
                    </div> -->

                    <div class="form-group">
                        <label> Type</label>
                        <br>
                        <input type="radio" name="types" value="bidder" checked> Bidder
                        <br>
                        <input type="radio" name="types" value="seller"> Seller
                        <br>
                        <input type="radio" name="types" value="webadmin"> Web Admin
                        <br>
                    </div>
                    

                    <button type="submit" class="btn btn-primary" name="store">Register</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                    <p>Already registered? Login <a href="login.php">here</a>!</p>

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
    <script src="js/popper.min.js"></script>
    <script src="js/popper-utils.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>