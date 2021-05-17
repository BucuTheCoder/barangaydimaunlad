<?php
	session_start();
	
	if($_SESSION['status'] == 'invalid'){
		$_SESSION['status'] = 'invalid';
			header("location: login.php");
	} 
	else{
		header("location: index.php");
	}
?>