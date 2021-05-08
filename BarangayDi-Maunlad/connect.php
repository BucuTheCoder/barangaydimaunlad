<?php
	//connect to database
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "barangay_data";

	mysql_connect($host, $user, $password);
	mysql_select_db($database);


	//get information
	if(isset($_POST['uname'])){
		$uname= $_POST['uname'];
		$password = $_POST['password'];

		$sql = "select * from users where username='".$uname."' AND password = '".$pwd."' limit 1";

		$result = mysql_query($sql);

		if(mysql_num_rows($result == 1)){
			echo "HELLO USER";
			exit();
		}
	}
?>