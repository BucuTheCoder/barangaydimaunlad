<?php

	// check if user is logged in.
	session_start();
	//if user is not login go to login page.
	if($_SESSION["valid"] != true){
        header("location: login.html");
}
?>