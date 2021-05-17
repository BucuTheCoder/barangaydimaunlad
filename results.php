<?php
	include('connect.php');

	$AGE;
	$MALE;
	$FEMALE;
	$PUROK;
	$type;

	function age(){
		$AGE = "SELECT COUNT(*) FROM people WHERE age BETWEEN 20 and 30";
		$result= mysqli_query($AGE);
		echo $result;
	}

?>