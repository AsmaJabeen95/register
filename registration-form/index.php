
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
	  <?php  include 'css/style.php' ?>
	  <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->

	  <title>Registration Form</title>
</head>
<body>

	<div class="container">
		<div class="row mt-5">			
		<div class="col-lg-6 col-md-6 col-sm-12 m-auto ">
			<div class="side">
				
			<h1 class="sideh">Welcome to Our Institute</h1>
			<a href="show_table.php">Check Details</a>
			</div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-12 m-auto">
		<h1 class="text-center">Registration Form</h1>
		<div class="container form">
		<form action="registration.php" method="POST">
			<div class="form-group">
				<label>Name</label>
				<input class="form-control" type="text" autocomplete="off" required name="name" placeholder="Enter Name">		
			</div>
			<div class="form-group">
				<label>Qualification</label>
				<input class="form-control" type="text" autocomplete="off" required name="quali" placeholder="Enter Qualification">
			</div>
			<div class="form-group">
				<label>Phone No.</label>
				<input class="form-control" type="number" autocomplete="off" required name="phone" placeholder="Enter Phone No.">
			 </div>
			<div class="form-group">	
				<label>Age</label>
				<input class="form-control" type="text" autocomplete="off" required name="age" placeholder="Enter Age">
			</div>
			<div class="form-group">	
				<label>City</label>
				<input class="form-control" type="text" autocomplete="off" required name="city" placeholder="Enter City">
			</div>

			<button class="btn btn-primary btn-lg" type="submit" name="submit">Submit</button>
			
		</form>
		</div>
		</div>
	</div>
</div>

</body>
</html>