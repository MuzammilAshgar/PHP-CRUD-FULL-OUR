<?php
include('../conntion.php');
$u_id = $_GET['id'];
$sql = "SELECT * FROM $table WHERE id = $u_id";
$run = mysqli_query($conn,$sql);
if($run == true){
     $rows =$run->fetch_assoc();
     $id = $rows['id'];
     $name = $rows['name'];
     $email = $rows['email'];
     $address = $rows['address'];
     $phone = $rows['phone'];
	 $acc = $rows['acc'];
}
else{
    header("Location:../error/index.php");
}
if (isset($_POST['submit'])) {
    $name = $_POST['uname'];
    $email = $_POST['uemail'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
	$acc = $_POST['acc'];
    
    unset($sql);
    $sql = "UPDATE $table set 
    name='$name',
    email='$email',
    address='$address',
    phone='$phone'
    WHERE id = $u_id 
     ";
    if (mysqli_query($conn,$sql)) {
        header("Location:../../../index.php");
    }     
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updata Date</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Roution/Css/Style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="Roution/Js/app.js"></script>

</head>
<body>
    <!-- Edit Modal HTML -->

		<div class="modal-content">
			<form method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Edit Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" name="uname" required value="<?php echo $rows['name'] ?>">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="uemail" required value="<?php echo $rows['email'] ?>">
					</div>
					<div class="form-group">
						<label>Address</label>
						<input type="text" class="form-control" name="address" require value="<?php echo $rows['address'] ?>">
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control" name="phone" required value="<?php echo $rows['phone'] ?>">
					</div>		
					<div class="form-group">
						<label>Account</label>
						<input type="text" class="form-control" name="acc" required value="<?php echo $rows['acc'] ?>">
					</div>					
				</div>
				<div class="modal-footer">
					<a type="submit" href="../../../index.php"> <input type="button"  class="btn btn-default" data-dismiss="modal" value="Cancel"></a>
					<input type="submit" name="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	
    
</body>
</html>
