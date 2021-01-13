
<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <meta name="description" content="">
	  <meta name="author" content="">

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" type="text/css" href="css/style.css">

	  <title>Update Form</title>

</head>
<body>

	<div class="container">
		<div class="row mt-5">			
		<div class="col-lg-6 ">
			<div class="side">	
			<h1>Welcome to Our Institute</h1>
			<a class="btn" href="show_table.php">Check Details</a>
			</div>
		</div>

		<div class="col-lg-6">
		<h1 class="text-center">Registration Form</h1>
		<div class="container form">
		<form action="" method="POST">

	<?php 
		include "connection.php";

		$id = $_GET['id'];

		$select = " SELECT * FROM form WHERE id= '$id' ";
		$query = mysqli_query($con , $select);

		$result = mysqli_fetch_assoc($query);

		if(isset($_POST['submit'])){

			$name = mysqli_real_escape_string($con, $_POST['name']) ;
			$quali = mysqli_real_escape_string($con, $_POST['quali']) ;
			$phone = mysqli_real_escape_string($con, $_POST['phone']) ;
			$age = mysqli_real_escape_string($con, $_POST['age']) ;
			$city = mysqli_real_escape_string($con, $_POST['city']) ;

			
			$update = " UPDATE form SET id='$id', name ='$name', qualification='$quali', phone='$phone', age='$age', city='$city' WHERE id= '$id'";
		
			$updteQuery = mysqli_query($con, $update);
			if ($updteQuery){
				?>
				<script>
					alert("Data Updated Successfully");
				</script>
				<?php
				header('location:show_table.php');
			}
			else{
				?>
			<script>
					alert("Data Not Updated Please Try Again!");
				</script>
				<?php
			}
		}
	 ?>		
			<div class="form-group">
				<label>Name</label>
				<input class="form-control" value="<?php echo $result['name']; ?>" type="text" name="name" placeholder="Enter Name">		
			</div>
			<div class="form-group">
				<label>Qualification</label>
				<input class="form-control" value="<?php echo $result['qualification']; ?>" type="text" name="quali" placeholder="Enter Qualification">
			</div>
			<div class="form-group">
				<label>Phone No.</label>
				<input class="form-control" value="<?php echo $result['phone']; ?>" type="text" name="phone" placeholder="Enter Phone No.">
			 </div>
			<div class="form-group">	
				<label>Age</label>
				<input class="form-control" value="<?php echo $result['age']; ?>" type="text" name="age" placeholder="Enter Age">
			</div>
			<div class="form-group">	
				<label>City</label>
				<input class="form-control" value="<?php echo $result['city']; ?>" type="text" name="city" placeholder="Enter City">
			</div>

			<button class="btn btn-success btn-lg" type="submit" name="submit">Update</button>
			
		</form>
    	</div>
	  </div>
	</div>
</div>

</body>
</html>