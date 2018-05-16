    <?php
    	include('connection.php');
     
    	$id=$_GET['id'];
     
    	$fullname=$_POST['fullname'];
    	$email=$_POST['email'];

     
    	mysqli_query($conn,"UPDATE user SET fullName='$fullname', email='$email' WHERE idUser='$id'") or die($conn);
    	header('location:account.php');
     
?>