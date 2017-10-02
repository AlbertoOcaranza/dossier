<?php 

	require '../../config/database/database.php';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];


	$insert = "INSERT INTO messages (name, email, message) 
	VALUES ('$name', '$email', '$message')";
	$process = mysqli_query($ConnectionObject, $insert);


	if ($process) {
		echo "success";
	}else{
		echo "error";
	}

 ?>