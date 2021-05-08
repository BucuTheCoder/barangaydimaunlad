<?php
	//connect to database
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = 'barangay_data';
	
	if(!$conn = mysqli_connect($host, $user, $password, $database)){
		die('Connection Error: '. mysqli_error());
	}	
?>