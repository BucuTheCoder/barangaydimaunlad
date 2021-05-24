
<?php
	// mag base ka parin dun sa dati natin sinubmit yung mga condition dun
	// tapos dag dag lang ng ibang details like ilan residence ng purok 1,2,3.
	function total(){
		include('connect.php');

		$sql = "SELECT COUNT(*) count FROM people";
		$result = mysqli_query($connection, $sql);
		
		while($row = mysqli_fetch_assoc($result)){
			echo $output = $row['count'];
		}
	}



	function child(){
		include('connect.php');

		$sql = "SELECT COUNT(*) count FROM people WHERE age BETWEEN 1 and 13";
		$result = mysqli_query($connection, $sql);
		
		while($row = mysqli_fetch_assoc($result)){
			echo $output = $row['count'];
		}
}

	function teenagers(){
		include('connect.php');

		$sql = "SELECT COUNT(*) count FROM people WHERE age BETWEEN 14 AND 19";
		$result = mysqli_query($connection, $sql);

		while ($row = mysqli_fetch_assoc($result)) {
			echo $output = $row['count'];
		}
	}

	function adults(){
		include('connect.php');

		$sql = "SELECT COUNT(*) count FROM people WHERE age BETWEEN 20 AND 59";
		$result = mysqli_query($connection, $sql);

		while ($row = mysqli_fetch_assoc($result)) {
			echo $output = $row['count'];
		}
	}

	function seniors(){
		include('connect.php');

		$sql = "SELECT COUNT(*) count FROM people WHERE age BETWEEN 60 AND 100";
		$result = mysqli_query($connection, $sql);

		while ($row = mysqli_fetch_assoc($result)) {
			echo $output = $row['count'];
		}
	}

	function residents(){
		include('connect.php');

		$sql = "SELECT COUNT(*) count FROM people WHERE type = 'resident'";
		$result = mysqli_query($connection, $sql);

		while ($row = mysqli_fetch_assoc($result)) {
			echo $output = $row['count'];
		}
	}

	function boarders(){
		include('connect.php');

		$sql = "SELECT COUNT(*) count FROM people WHERE type = 'boarder'";
		$result = mysqli_query($connection, $sql);

		while ($row = mysqli_fetch_assoc($result)) {
			echo $output = $row['count'];
		}
	}

	function male(){
		include('connect.php');

		$sql = "SELECT COUNT(*) count FROM people WHERE gender = 'Male'";
		$result = mysqli_query($connection, $sql);

		while ($row = mysqli_fetch_assoc($result)) {
			echo $output = $row['count'];
		}
	}

	function female(){
		include('connect.php');

		$sql = "SELECT COUNT(*) count FROM people WHERE gender = 'Female'";
		$result = mysqli_query($connection, $sql);

		while ($row = mysqli_fetch_assoc($result)) {
			echo $output = $row['count'];
		}
	}



?>