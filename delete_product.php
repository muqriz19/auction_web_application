    <?php
    	include('connection.php');
    	$id=$_GET['id'];
    	mysqli_query($conn,"DELETE FROM product WHERE idProduct='$id'");
    	header('location:account.php');
     
    ?>