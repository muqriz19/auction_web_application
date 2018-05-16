<!-- Delete -->
    <div class="modal fade" id="del<?php echo $test['idUser']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <center><h4 class="modal-title" id="myModalLabel">Delete User</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"SELECT * FROM user where idUser='".$test['idUser']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Firstname: <strong><?php echo $drow['fullName']; ?></strong></center></h5>
                    <h5><center>Email: <strong><?php echo $drow['email']; ?></strong></center></h5>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"> Cancel</button>
                    <a href="delete_user.php?id=<?php echo $test['idUser']; ?>" class="btn btn-danger"> Delete</a>
                </div>
 
            </div>
        </div>
    </div>
<!-- /.modal -->
 
<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $test['idUser']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <center><h4 class="modal-title" id="myModalLabel">Edit User</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"SELECT * FROM user where idUser='".$test['idUser']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit_user.php?id=<?php echo $erow['idUser']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Full Name:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="fullname" class="form-control" value="<?php echo $erow['fullName']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Email:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="email" class="form-control" value="<?php echo $erow['email']; ?>">
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