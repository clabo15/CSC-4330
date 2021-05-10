<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dowling Incorporated</title>
</head>
<body>

<style type="text/css">

* {
	margin: 0;
	padding: 0;
}
body {
	text-align: center;
}
.wrapper {
	width: 1170px;
	margin: 0 auto;
}
header {
	height: 100px;
	background: #262626;
	width: 100%;
	z-index: 10;
	position: fixed;
}
.logo {
	margin-left: -10%;
	float: left;
	line-height: 100px;
}
.logo a {
	text-decoration: none;
	font-size: 30px;
	font-family: poppins;
	color: #fff;
	letter-spacing: 5px;
}
nav {
	float: right;
	line-height: 100px;
}
nav a {
	text-decoration: none;
	font-family: poppins;
	letter-spacing: 4px;
	font-size: 20px;
	margin: 0 10px;
	color: #fff;
}
.banner-area {
	width: 100%;
	height: 500px;
	position: fixed;
	top: 100px;
	background-image: url(background_index.jpg);
	-webkit-background-size: cover;
	background-size: cover;
	background-position: center center;
}
.banner-area h2 {
	padding-top: 8%;
	font-size: 70px;
	font-family: poppins;
	text-transform: uppercase;
	color: #fff;
}
.content-area {
	width: 100%;
	position: relative;
	top: 450px;
	background: #ebebeb;
	height: 1500px;
}
.content-area h2 {
	font-family: poppins;
	letter-spacing: 4px;
	padding-top: 30px;
	font-size: 40px;
	margin: 0;
}
.content-area p {
	padding: 2% 0px;
	font-family: poppins;
	line-height: 30px;
}

input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}


</style>

<div class="box-area">
		<header>
			<div class="wrapper">
				<div class="logo">
					<a href="#">Dowling Incorporated</a>
				</div>
				<nav>
				<a href="/login/login.php">Client Area</a>
				</nav>
			</div>
		</header>
		<div class="banner-area">
			<h2>bicycle rental services</h2>
		</div>
		<div class="content-area">
			<div class="wrapper">
					<h2>Description</h2>
					<p>Dowling Incorporated currently has 3 bikes in service.  If you are interested in trying out our service, proceed to the client area section.  There a user can make an account that will be used to reference your bike renting activities.  Dowling Incorporated securely encrypts your valuable information and will not distribute user data.  Once a user has been logged in, a bike can be rented and returned at the user’s discretion.  We hope you enjoy the service.  Stay cool and cycle on!</p>
				<div id="about">
					<h2>About</h2>
					<p>Dowling Incorporated is a small bike-sharing business owned by Mr. Dowling that specializes in leasing bicycles to individuals for a set amount of time.  Dowling Incorporated uses accounts to store and manage customer information to provide a quick, reliable service for everyone. If you would like to contact Mr. Dowling, please see the contact form below.</p>
				</div>
			</div>
		<br><br><br><br><br>
		
			<div class="container">
			<h2>Contact</h2>

			<label for="fname">First Name</label>
			<input type="text" id="fname" name="firstname" placeholder="Your name..">
			<label for="lname">Last Name</label>
			<input type="text" id="lname" name="lastname" placeholder="Your last name..">
			<label for="email">Email</label>
			<input type="text" id="email" name="email" placeholder="example@gmail.com">
			<label for="subject">Subject</label>
			<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
			<input type="submit" value="Submit">

	
			</div>
		</div>
	

	
</body>
</html>