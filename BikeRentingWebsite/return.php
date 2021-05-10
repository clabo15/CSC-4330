<?php
	//Super global variable "session"
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
	
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "login_sample_db";	
	
	//Form Post
	if($_SERVER['REQUEST_METHOD'] == "POST"){	
		//Bike ID from user input
		$bike = $_POST['bike_id'];

		if(!empty($bike)){
			

			
	
			
			$tmp = "SELECT bike_id FROM users WHERE bike_id = '$bike'";
		
			$result = $con->query($tmp);
			
			if($result->num_rows<1){
				echo '<script>alert("User Has Not Rented That Bike!")</script>';
				
			}
			
			
		
			//Push bike ID to the DB
			else
			{
				
				$sql = "UPDATE users SET bike_id = NULL WHERE user_id = '{$_SESSION['user_id']}'";
			
				if($con->query($sql) == TRUE){
					echo '<script>alert("Bike Returned Successfully!")</script>';
				}
				else
				{
					echo "Error: " . $sql . "<br>" . $con->error;
				}

			}
			
			$con->close();
		}
	}
	
		
	
	
		
		
	
	
	
?>

<!DOCTYPE html>
<html>
<head>
<title>Return Bike</title>

</head>
<body>
	
	
	<div class="dropdown">
	
	
		<button onclick="dropFunc()" class="dropbutton">Menu</button>
		<div id="myDropdown" class="dropdown-content">
			<a href="rent.php">Rent Bike</a>
			<a href="availiable.php">Bike List</a>
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
    
	.logout_button{
		
		display: block;
		width: 115px;
		height: 25px;
		background: #4E9CAF;
		padding: 10px;
		text-align: center;
		border-radius: 5px;
		color: white;
		font-weight: bold;
		line-height: 25px;
		float: right;
	}
	
	.test{
		background-color: white;
		color: white;
		padding 16px;
		width: 300ps;
		border: none:
	}

	
	
	
	.bikes_for_rent{
		text-align: center;
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
	
	.rent_box{
		margin: auto;
		width: 60%;
		border: 4mm ridge rgba(60, 24, 116, .5);
		padding: 10px;
		margin-top: 20px;
		text-align: center;	
	}
	
	/* Add a black background color to the top navigation */
	.topnav {
		background-color: #333;
		overflow: hidden;
		display: flex;  
		flex-wrap: wrap;
	}

	/* Style the links inside the navigation bar */
	.topnav a {
		float: left;
		color: #f2f2f2;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		font-size: 17px;
	}
		
	/* Change the color of links on hover */
	.topnav a:hover {
		background-color: #ddd;
		color: black;
	}

	/* Add a color to the active/current link */
	.topnav a.active {
		background-color: #4CAF50;
		color: white;
	}
	
	.availiable_button{
		font-family: 'Courier New', monospace;
		text-align:center;
		background-color: #3498DB;
		color: white;
		padding: 10px;
		font-size: 16px;
	}
	
	.rent_button{
		font-family: 'Courier New', monospace;
		text-align:center;
		width: 140px;
		height: 40px;
		background-color: #3498DB;
		color: white;
		padding: 8px;
		font-size: 18px;
	}
	


	</style>
	
	
	<div id="box">
		<div id="gif">
		<img style="margin-left: 435px; position: absolute; margin-top: 300px;" src="bike.gif" width="200" height="200">
		<h1 style="font-family: 'Courier New', monospace; text-align:center;">Dowling Incorporated</h1>
			<div class = "bikes_for_rent">
			<p style="font-weight: bold; font-weight: bold; font-family: 'Courier New', monospace; text-align:center; font-size: 20px;">
				Here you can input the ID of the bike you rented to return the bike.
			</p>
				<!--
				<button onclick="location.href='availiable.php';" class="availiable_button">Bike List</button>
				-->
			</div>
		
			<div class="rent_box">
		
				<h1 style="font-family: 'Courier New', monospace;">Return Bike</h1>
	
				<form method="post">
				
					<input type="text" name="bike_id" size="30" style="text-align: center;" placeholder="Bike ID"><br><br>
					<div style="font-weight: bold; font-family: 'Courier New', monospace;" class="time_dis">
						Important: Bikes can only be rented for one hour!
					</div>
					<br>
					<input class="rent_button" type="submit" value="Return Bike">
				
				</form>
			</div>
			
			
		
		
		
		
		
	
	<!--
	<script type="text/javascript">
		var php_var = "<?php echo $user_data['user_name']; ?>";
		document.write("hello ",php_var);
	
	</script>
	-->
		</div>
	</div>
	
</body>
</html>