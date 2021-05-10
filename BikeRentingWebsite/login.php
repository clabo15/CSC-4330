<?php

session_start();

	include("connection.php");
	include("functions.php");
	
	//Check if request method is POST
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//Collect data from POST
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		
		$password = sha1($password);
		
		
		//Check if both are not empty
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
		
			//Read info from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			
			$result = mysqli_query($con, $query);
			
			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						echo "login successfull";
						header("Location: rent.php");
						die;
					}
				
				}
			
			}
			echo "Incorect username or password!";
			//echo '<script type="text/javascript">';
			//echo ' alert("JavaScript Alert Box by PHP")';  //not showing an alert box.
			//echo '</script>';
		}else
		{
		
			echo "Incorect username or password!";
		}
		
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>


<style type="text/css">
/* Background Image of Website */
body{
    margin: 0;
    padding: 0;
    background: url(background_index.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}

/* Background Image of Box */
.login_box{
    width: 400px;
    height: 500px;
    background: url(background_box.jpg);
    color: #ffffff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 72px 34px;
	border: 4mm ridge rgba(117, 82, 214, .6);
	box-shadow: 1px 2px 5px 6px #000000;
}

/* Avatar */
.boi{
    width: 110px;
    height: 110px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

/* Font for "Login" */
h1{
    margin: 0;
    padding: 0 0 30px;
    text-align: center;
    font-size: 40px;
}

/* Reference from index */
.login_box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

/* Dimensions of login text box */
.login_box input{
    width: 100%;
    margin-bottom: 22px;
}

/* Input font */
.login_box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 3px solid #ffffff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #ffffff;
    font-size: 16px;
}

/* Submit button */
.login_box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #936c93;
    color: #ffffff;
    font-size: 18px;
    border-radius: 20px;
}

/* Submit button action */
.login_box input[type="submit"]:hover
{
    cursor: pointer;
    background: #ffccff;
    color: #000;
}

/* Forgot password and register font */
.login_box a{
    text-decoration: none;
    font-size: 15px;
    line-height: 20px;
    color: darkgrey;
}

/* Color and weight of forgot password and register */
.login_box a:hover
{
    color: #ffccff;
	font-weight: bold;
}

.dropbutton{
		background-color: #3498DB;
		color: white;
		padding: 16px;
		width: 120px;
		font-size: 16px;
		border-bottom: 2px solid #3c1874;
		cursor: pointer;	
		margin-top: 7%;
		margin-left: 7%;
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
		margin-left: 5%;
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
</style>
	
	
	<!--
	<link rel="stylesheet" type="text/css" href="style.css">
	-->
	
		<div class="dropdown">
	
	
		<button onclick="dropFunc()" class="dropbutton">Menu</button>
		<div id="myDropdown" class="dropdown-content">
			<a href="index.php">Home</a>
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
	
	
	<div class="login_box">
	<img src="avatar.jpg" class="boi">
		<h1>Login</h1>
	
		<form method="post">
			<!-- <div style="font-size: 20px;margin: 10px;color: white;">Login</div> -->
			
			<input type="text" name="user_name" placeholder="Username"><br><br>
			<input type="password" name="password" placeholder="Password"><br><br>
			
			<input type="submit" value="Login"><br><br>
			
			<a href="signup.php">Click to Register</a><br><br>
		</form>
	
	</div>
	
</body>
</html>
