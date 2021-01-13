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
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	   <title>Table Data</title>
</head>
<body>

	<div class="container">
		<table class="table">
			<thead>
				<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>QUALIFICATION</th>
				<th>PHONE N0.</th>
				<th>AGE</th>
				<th>CITY</th>
				<th colspan="2">Operations</th>
				</tr>
			</thead>
			<tbody>
				<?php 

				include "connection.php";

				$select = " SELECT * FROM form ";

				$query = mysqli_query($con,$select);

				while ($row = mysqli_fetch_assoc($query)) {

			 ?>
				<tr>
					<td><b><?php echo $row['id']; ?></b></td>
					<td><em><?php echo $row['name']; ?></em></td>
					<td><em><?php echo $row['qualification']; ?></em></td>
					<td><em><?php echo $row['phone']; ?></em></td>
					<td><em><?php echo $row['age']; ?></em></td>
					<td><em><?php echo $row['city']; ?> </em></td>

					<td><a href="update.php?id=<?php echo $row['id']; ?>"><i class="fa fa-edit" aria-hidden="true"></i></a></td>

					<td><a href="delete.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				</tr>
				<?php 
			 }
			?>
			</tbody>

		</table>
		<a class="btn btn-dark" href="index.php"> Back</a>
	</div>

</body>
</html>