<?php

include "connection.php";

if (isset($_POST['submit'])) {

	$name = mysqli_real_escape_string($con, $_POST['name']) ;
	$quali = mysqli_real_escape_string($con, $_POST['quali']) ;
	$phone = mysqli_real_escape_string($con, $_POST['phone']) ;
	$age = mysqli_real_escape_string($con, $_POST['age']) ;
	$city = mysqli_real_escape_string($con, $_POST['city']) ;

	$insert = " INSERT INTO form(name, qualification, phone, age, city) VALUES('$name','$quali','$phone','$age','$city')";
	$query = mysqli_query($con, $insert);

	header('location:index.php');

}

?>