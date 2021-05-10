# CSC-4330
This is the website that I built for my group's project that is written in PHP and stores user data to a SQL database with password and credit card encryption.
This website was built using XAMPP in the htdocs folder.

# Home Page
<img src="https://github.com/clabo15/CSC-4330/blob/cab3ab71bef7fc39e3465f9b06245f34133fbe92/WebsitePictures/Home.jpg">

The home page of the website is the landing page of the imaginary company Dowling Incorporated. It features a discription, about, and contact form. The header features a navigation bar named "Client Area" that takes you to the login and register page.



# Login Page
<img src="https://github.com/clabo15/CSC-4330/blob/cab3ab71bef7fc39e3465f9b06245f34133fbe92/WebsitePictures/Login.jpg">

The login page is a custom design that uses PHP to match user login info to the SQL database. If the user information matches the information in the database the the user will be directed to the bike rent page "/rent.php." If the info is incorrect, the user will be informed that they entered incorrect info. If the user does not have an account, the user can click "Click to Register" and be directed to "/signup.php."



# Register
<img src="https://github.com/clabo15/CSC-4330/blob/cab3ab71bef7fc39e3465f9b06245f34133fbe92/WebsitePictures/Register.jpg">

This page allows the user to input all of their information and it will be sent to the SQL database. The user password and credit card information will be encrypted and the encrypted values are stored in the database. If the user inputs a username or email that already exists in the database, the user will be informed that someone else already has that username and or the email is already in use.



# Rent Bike
<img src="https://github.com/clabo15/CSC-4330/blob/cab3ab71bef7fc39e3465f9b06245f34133fbe92/WebsitePictures/RentBike.jpg">

This page controls the rent bike reature. No unauthorized users can access this page. A user can enter a bike ID, found in "/availiable.php," and the bike ID will be stored under the bike ID section in the SQL database indicating the user has rented the bike with that ID. If the bike ID is already in use by someone else, the user will be informed that the bike is rented by someone else. The menu bar on the top right is a drop down menu with tabs to navigate the rest of the website or logout.



# Bike ID
<img src="https://github.com/clabo15/CSC-4330/blob/cab3ab71bef7fc39e3465f9b06245f34133fbe92/WebsitePictures/RentBike.jpg">

This page displays a list of bike IDs and a discription of the bike. No unauthorized users can access this page. Once the user has selected a bike, the user can navigate to the drop down menu and select the next desired page.



# Return Bike
<img src="https://github.com/clabo15/CSC-4330/blob/cab3ab71bef7fc39e3465f9b06245f34133fbe92/WebsitePictures/ReturnBike.jpg">

This page is similar to the Bike Rent page but with reverse functionality. No unauthorized users can access this page. The user can enter the bike ID of the rented bike and if it matches the bike ID in the SQL database, its value will be set to NULL, leaving the space blank, indicating that the bike was returned and the user will be informed that the bike was returned successfully. If the user enters a value that does not match the value in the SQL database, the user will be informed that they do not have that bike rented.


# SQL Tables
<img src="https://github.com/clabo15/CSC-4330/blob/cab3ab71bef7fc39e3465f9b06245f34133fbe92/WebsitePictures/SQL.jpg">

This is the structure of the SQL database showing how the tables are structured and their properties.



# SQL Database
<img src="https://github.com/clabo15/CSC-4330/blob/cab3ab71bef7fc39e3465f9b06245f34133fbe92/WebsitePictures/SQLDB.jpg">

This is the SQL database showing the current registered users.
