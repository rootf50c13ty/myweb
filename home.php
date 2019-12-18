<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home Page</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<style>
/*
			<link rel="stylesheet" type="text/css"
          href="/home/ajin/lampstack-7.3.12-0/apache2//htdocs/myweb/css/style.css"/> */
			 
			/* Style the header */
				.header {
				  padding: 80px;
				  text-align: center;
				  background: #ACA5A5;
				  color: white;
				}

				/* Increase the font size of the <h1> element */
				.header h1 
				{
				  font-size: 40px;
				 /* font-family: 'MrRobot';
				  font-style: normal;
				  font-weight: normal;
				  src: local('MrRobot'), url('../css/MR ROBOT.woff') format('woff'); */
				}


				.navbar {
  overflow: hidden; /* Hide overflow */
  background-color: #333; /* Dark background color */
}

/* Style the navigation bar links */
.navbar a {
  float: left; /* Make sure that the links stay side-by-side */
  display: block; /* Change the display to block, for responsive reasons (see below) */
  color: white; /* White text color */
  text-align: center; /* Center the text */
  padding: 14px 20px; /* Add some padding */
  text-decoration: none; /* Remove underline */
}

/* Right-aligned link */
.navbar a.right {
  float: right; /* Float a link to the right */
}

/* Change color on hover/mouse-over */
.navbar a:hover {
  background-color: #ddd; /* Grey background color */
  color: black; /* Black text color */
}
			
		
		</style>

	</head>

	<body>

		<div class="header">
		  <h1>Hello Friends</h1>
		  <p>Welcome to Oootyy nice to meet you !.</p>
		</div>


		<div class="navbar">
		  <a href="#">Home</a>
		  <a href="#">Sign In</a>
		  <a href="#">Register</a>
		  <a href="#" class="right">About Us</a>
		</div>

	</body>
</html>