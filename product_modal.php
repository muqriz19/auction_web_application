<!-- Delete -->
    <div class="modal fade" id="del<?php echo $test['idProduct']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <center><h4 class="modal-title" id="myModalLabel">Delete Product</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"SELECT * FROM product WHERE idProduct='".$test['idProduct']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
				<img class="img-fluid" id="image-modal" src='data/product_images/<?php echo $drow['productImage'] ?>'>
                    <br>
					<h5><center>Product Name: <strong><?php echo $drow['productName']; ?></strong></center></h5>
					<h5><center>Product Description: <strong><?php echo $drow['productDesc']; ?></strong></center></h5>
					<h5><center>Starting Price: <strong>RM<?php echo $drow['startingPrice']; ?></strong></center></h5>
					<h5><center>Product Duration: <strong><?php echo $drow['productDuration']; ?> Mins</strong></center></h5>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"> Cancel</button>
                    <a href="delete_product.php?id=<?php echo $test['idProduct']; ?>" class="btn btn-danger"> Delete</a>
                </div>
 
            </div>
        </div>
    </div>
<!-- /.modal -->
 
<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $test['idProduct']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <center><h4 class="modal-title" id="myModalLabel">Edit Product</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"SELECT * FROM product where idProduct='".$test['idProduct']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit_product.php?id=<?php echo $erow['idProduct']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Product Name:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="productname" class="form-control" value="<?php echo $erow['productName']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Desciption:</label>
						</div>
						<div class="col-lg-10">
							<textarea class="form-control" name="product-desc" id="product-description" rows="5" placeholder="Describe the product" name="product-desc"><?php echo $erow['productDesc']; ?>	</textarea>

						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Starting Price:</label>
						</div>
						<div class="col-lg-10">
                        <input type="number" name="starting-price" class="form-control" id="starting-bid" placeholder="0" name="start-bid" value="<?php echo $erow['startingPrice']; ?>">

						</div>
					</div>


					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Duration:</label>
						</div>
						<div class="col-lg-10">
							<div class="form-group">
								<select class="form-control" id="product-duration" name="product-duration">
									<option value="<?php echo $erow['productDuration']; ?>">Current: <?php echo $erow['productDuration']; ?> Mins</option>
									<option value="15">15 Mins</option>
									<option value="30">30 Mins</option>
									<option value="45">45 Mins</option>
								</select>
							</div>
						</div>
					</div>

                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-warning"> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->