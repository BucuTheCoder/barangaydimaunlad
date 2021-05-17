<?php
	include('results.php');
?>

<!DOCTYPE html>
<html lang=en>
<head>
	<title> BGAPP </title>
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<div class="graphic">
		<h1 title="infograph"> BRGY. DI-MAUNLAD <span>INFO-GRAPHIC</span> </h1> 
		<h2 title="title-info"> See Our Neighborhood </h2>
	<div id="border">
			<h3> TOTAL NUMBERS OF CHILD, TEENAGERS, ADULT AND SENIOR CITIZEN IN THE COMMUNITY </h3>
			<div class=display>
				<div class= "column">
				<img src="icons/child-icon.png" width="250px" height="250px">
				</div>
				
				
				<div class="column"> 
				<img src="icons/teens-icon.png" width="200px" height="200px" />
				</div>
				

				<div class="column"> 
				<img src="icons/adult-icon.png" height="200px" width="200px" />
				</div>

				<div class="column">
				<img src="icons/elderly-icon.png" height="200px" width="200px" />
				</div>
			</div> <!--end of icon--->

			<div class=display>
				<div class="column">
				<div class="box2">
				<h3>Number of Child</h3>
				<p id="object"></p>
				<script src="script.js"></script>
				</div>
				</div>

				<div class="column">
				<div class="box2">
				<h3>Number of Teenagers</h3>
				<p id="objec1"></p>
				</div>
				</div>
				

				<div class="column">
				<div class="box2">
				<h3>Number of Adult</h3>
				<p id="objec2"></p>
				</div>
				</div>

				<div class="column">
				<div class="box2">
				<h3>Number of Senior</h3>
				<p id="objec3"></p>
				</div>
				</div>
			
			</div> <!---END OF DISPLAY--->


			<div class="display">
				<img id="bIcon" src="icons/boarder.png">
				<p class="text"> THE TOTAL NUMBERS OF RESIDENT IN THE BARANGAY <br>
					<span id= "object1">100</span></p>
		   		<img id="bIcon" src="icons/boarder.png">		
		   		<p class="text">THE TOTAL NUMBERS OF BOARDERS IN THE BARANGAY <br>
		   	        <span id= "object1">100</span></p>
		  	</div>
			
			<h2> THE TOTAL NUMBERS OF MALE AND FEMALE IN THE COMMUNITY </h2>

			<div class="display">
				<img id="male" src="icons/male.png">
				<p class="text"> THE TOTAL NUMBERS OF MALE<br>
					<span id= "object1">100</span></p>
		   		<img id="female" src="icons/female.png">		
		   		<p class="text">THE TOTAL NUMBERS OF FEMALE <br>
		   	        <span id= "object1">100</span></p>
		  	</div>
	</div>
</div>
			
	
</body>


</html>