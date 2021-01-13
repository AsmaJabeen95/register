<?php 

include "connection.php";

$id = $_GET['id'];

$delete = " DELETE FROM form WHERE id = $id ";

$query = mysqli_query($con , $delete);

if ($query) {
	?>
	<script>
		alert("Data Deleted Successfully");
	</script>
		
		<?php 
		header('location:show_table.php');
}
	else
	{
		?>
	<script>
		alert("Data is not Deleted");
	</script>
		
		<?php 
	}

 ?>