    <?php
    	include('connection.php');
     
    	$id=$_GET['id'];
     
		$productname=$_POST['productname'];
		$productdescription=$_POST['product-desc'];
		$startprice=$_POST['starting-price'];
		$productduration=$_POST['product-duration'];

     
    	mysqli_query($conn,"UPDATE product SET productName='$productname', productDesc='$productdescription', startingPrice='$startprice', productDuration='$productduration' WHERE idProduct='$id'") or die($conn);
    	header('location:account.php');
     
?>