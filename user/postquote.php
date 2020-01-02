<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home Page</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="/home/ajin/lampstack-7.3.12-0/apache2/htdocs/myweb/css/navbar.css" rel="stylesheet">

		<title>Post a new Quote </title>

		<style>
/*
			<link rel="stylesheet" type="text/css"
          href="/home/ajin/lampstack-7.3.12-0/apache2//htdocs/myweb/css/style.css"/> */
			 
			/* Style the header */
				.header 
				{
				  padding: 50px;
				  text-align: center;
				  background: #333;
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

				* {box-sizing: border-box;}

				body {
				  margin: 0;
				  font-family: Arial, Helvetica, sans-serif;
				}

				.topnav {
				  overflow: hidden;
				  background-color: #e9e9e9;
				}

				.topnav a {
				  float: left;
				  display: block;
				  color: black;
				  text-align: center;
				  padding: 14px 16px;
				  text-decoration: none;
				  font-size: 17px;
				}

				.topnav a:hover {
				  background-color: #ddd;
				  color: black;
				}

				.topnav a.active {
				  background-color: #2196F3;
				  color: white;
				}

				.topnav .search-container {
				  float: right;
				}

				.topnav input[type=text] {
				  padding: 6px;
				  margin-top: 8px;
				  font-size: 17px;
				  border: none;
				}

				.topnav .search-container button {
				  float: right;
				  padding: 6px 10px;
				  margin-top: 8px;
				  margin-right: 16px;
				  background: #ddd;
				  font-size: 17px;
				  border: none;
				  cursor: pointer;
				}

				.topnav .search-container button:hover {
				  background: #ccc;
				}

				@media screen and (max-width: 600px) {
				  .topnav .search-container {
				    float: none;
				  }
				  .topnav a, .topnav input[type=text], .topnav .search-container button {
				    float: none;
				    display: block;
				    text-align: left;
				    width: 100%;
				    margin: 0;
				    padding: 14px;
				  }
				  .topnav input[type=text] {
				    border: 1px solid #ccc;  
				  }
				}

								/* Main column */
				.main {   
				  flex: 70%;
				  background-color: white;
				  padding: 20px;
				}

				/* Fake image, just for this example */
				.fakeimg {
				  background-color: #aaa;
				  width: 100%;
				  padding: 20px;
				}
		
				/* Footer */
				.footer {
				  bottom: 0;
				  padding: 20px;
				  text-align: center;
				  background: #ddd;
				  margin-top: 20px;
				}



		</style>

	</head>

	<body>




		<div class="header">
		  <h1>Hello Friend</h1>
		  <p>Welcome to Oootyy nice to meet you !.</p>
		</div>


		
	<div class="topnav">
	  <a class="active" href="home.php">Home</a>
	  <a href="#about">About</a>
	  <a href="#">Contact</a>
	  <a href="logout.php">Log Out</a>

	  <div class="search-container">
		    <form action="/action_page.php">
		      <input type="text" placeholder="Search.." name="search">
		      <button type="submit">Search</button>
		    </form>
		  </div>
	</div>




	</body>
</html>