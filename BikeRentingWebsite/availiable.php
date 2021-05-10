<?php
	//Super global variable "session"
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bikes Available</title>
</head>
<body>

<!--
<a href="logout.php">Logout</a>
-->

	<div class="dropdown">
		<button onclick="dropFunc()" class="dropbutton">Menu</button>
		<div id="myDropdown" class="dropdown-content">
			<a href="rent.php">Rent Bike</a>
			<a href="return.php">Return Bike</a>
			<a href="logout.php">Logout</a>
			<!-- Add more options -->
		</div>
		
		<script type="text/javascript">
			function dropFunc(){
				document.getElementById("myDropdown").classList.toggle("show");
			}
			
			window.onclick = function(event){
				if(!event.target.matches('.dropbutton')){
					var dropdowns = document.getElementsByClassName("dropdown-content");
					var i;
					for(i = 0; i < dropdowns.length; i++){
						var openDropdown = dropdowns[i];
						if(openDropdown.classList.contains('show')){
							openDropdown.classList.remove('show');
						}
					}
				}
			}
		</script>
						
	</div>
	
<style type="text/css">
	body {
		
	background-image: url('background_index.jpg');
	}
	
	#box{
		
		background-color: white;
		background-position; center;
		background-repeat: no-repeat;
		height: 500px;
		width: 600px;
		position: fixed;
		top: 40%;
		left: 50%;
		margin-top: -120px;
		margin-left: -300px;
		border: 10px solid #932432;
    }


	
	.bikes_for_rent{
	
	text-align: center;
	}
	
	.bikeList{
		margin-top: 30px;
		margin-left: 5px;
		margin-right: 5px;
		border: 2mm ridge rgba(60, 24, 116, .6);
	
	}
	
	.dropbutton{
		background-color: #3498DB;
		color: white;
		padding: 16px;
		width: 120px;
		font-size: 16px;
		border-bottom: 2px solid #3c1874;
		cursor: pointer;	
	}
	
	.dropbutton:hover, .dropbutton:focus{
		background-color: #2980B9;
	}
	
	.dropdown{
		position: relative;
		display: inline-block;
		margin-left: 1400px;	
	}
	
	.dropdown-content{
		display: none;
		position: absolute;
		background-color: #d3d3d3;
		min-width: 120px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
		border: 1px solid #301934;
	}
	
	.dropdown-content a{
		color: black;
		padding: 16px 10px;
		border-bottom: 2px solid #3c1874;
		text-decoration: none;
		display: block;
		text-align: center;
	}
	
	.dropdown-content a:hover {
		background-color: #ddd
		color: black;
	}
	
	.show{
		display:block;
	}

	
	.return_button{
		
		font-family: 'Courier New', monospace;
		text-align:center;
		background-color: #3498DB;
		color: white;
		padding: 10px;
		font-size: 16px;
		margin-left: 235px;
	
	}
</style>
	
	<div id="box">
	<h1 style="font-size: 45px; font-family: 'Courier New', monospace; text-align:center;">Available Bikes</h1>
		<div class = "bikes_for_rent">
			<div class = "bikeList" style="text-align:left;">
				<dl>
					<li style ="font-size:25px">Red Bike (ID: 1)</li>
						<dd> This bike features a red body, black seat, and chrome rims.</dd><br><br>
					<li style ="font-size:25px">Blue Bike (ID: 2)</li>
						<dd> This bike features a blue body, black seat, and chrome rims.</dd><br><br>
					<li style ="font-size:25px">White Bike (ID: 3)</li>
						<dd> This bike features a white body, black seat, and black rims.</dd><br><br>
				</dl>

			</div>
		</div>
		
		
		
	</div>
	
	
	
</body>
</html>