<?php
session_start();

	include("connection.php");
	include("functions.php");
	
	//Check if request method is POST
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//Collect data from POST
		$name = $_POST['name'];
		$user_name = $_POST['user_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$dob = $_POST['birthday'];
		$address = $_POST['address'];
		$ccn = $_POST['ccn'];
		
		//Salt for password and ccn encryption
		//$salt ="decrypt";
		$password_encrypted = sha1($password);
		$ccn_encrypted = sha1($ccn);
		
		
		
		
		
		//Check if both are not empty
		if(!empty($name) && !empty($email) && !empty($dob) && !empty($address) && !empty($ccn) && !empty($user_name) && !empty($password) && !is_numeric($user_name))
		{			
			
			//Save info to database
			$user_id = random_num(20); //Random number token generated for identifying user
			$query = "insert into users (user_id,name,user_name,email,password,birthday,address,ccn) values ('$user_id','$name','$user_name','$email','$password_encrypted','$dob','$address','$ccn_encrypted')";
			
			$tmp = "SELECT * FROM users WHERE email = '$email'";
			$tmp2 = "SELECT * FROM users WHERE user_name = '$user_name'";
			
			$result = $con->query($tmp);
			$result2 = $con->query($tmp2);
			
			$checkEmail = mysqli_query($con, $tmp);
			$checkUser = mysqli_query($con, $tmp2);
			
			
			if($result->num_rows>=1)
			{
				echo '<script>alert("That Email is in use.")</script>';
			}
			elseif($result2->num_rows>=1)
			{
				echo '<script>alert("That Username is in use.")</script>';
			}
			else
			{
		
			mysqli_query($con, $query);

			header("Location: login.php");
			die;
			}
			
		}else
		{
		
			echo "Please enter valid information";
		}
		
		
		
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
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
    width: 500px;
    height: 680px;
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

/* Font for "Register" */
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
    margin-bottom: 26px;
}

/* Input font */
.login_box input[type="text"], input[type="password"], input[type="email"], input[type="tel"] 
{
    border: none;
    border-bottom: 3px solid #ffffff;
    background: transparent;
    outline: none;
    height: 20px;
    color: #ffffff;
    font-size: 16px;
}
/* Invert the date picker indicator */
::-webkit-calendar-picker-indicator {
    filter: invert(1);
}

.login_box input[type="date"]
{
	border: none;
    border-bottom: 3px solid #ffffff;
    background: transparent;
    outline: none;
    height: 20px;
	
    color: solid #ffffff;
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
		<h1>Register</h1>
	
		<form method="post">
			<!-- <div style="font-size: 20px;margin: 10px;color: white;">Login</div> -->
			
			<input type="text" name="name" placeholder="Full Name"><br>
			<input type="text" name="user_name" placeholder="Username"><br>
			<input type="email" name="email" placeholder="example@gmail.com"><br>
			<input type="password" name="password" placeholder="Password"><br>
			<div id="DOB" style="font-size: 16px; color:#7F7E7E ;">Date Of Birth</div>
			<input type="date" name="birthday" style="color:#7F7E7E ;"><br>
			<input type="text" name="address" placeholder="Address"><br>
			<input type="tel" name="ccn" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="Valid Credit/Debit Card"><br>	
			
			<input type="submit" value="Register"><br><br>
			
			<a href="login.php">Click to Login</a><br><br>
		</form>
	
	</div>
	
</body>
</html>
