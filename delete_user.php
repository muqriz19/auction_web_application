    <?php
    	include('connection.php');
    	$id=$_GET['id'];
    	mysqli_query($conn,"DELETE FROM user WHERE idUser='$id'");
    	header('location:account.php');
     
    ?>