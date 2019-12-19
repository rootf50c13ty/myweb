<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home Page</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="/home/ajin/lampstack-7.3.12-0/apache2/htdocs/myweb/css/navbar.css" rel="stylesheet">

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
				  padding: 20px;
				  text-align: center;
				  background: #ddd;
				  margin-top: 20px;
				}



		</style>

	</head>

	<body>

		<div class="header">
		  <h1>Hello Friends</h1>
		  <p>Welcome to Oootyy nice to meet you !.</p>
		</div>


		
	<div class="topnav">
	  <a class="active" href="#home">Home</a>
	  <a href="#about">About</a>
	  <a href="#">Sign Up</a>
	   <a href="#">Sign In</a>
	    <a href="#">Contact</a>
	  <div class="search-container">
	    <form action="/action_page.php">
	      <input type="text" placeholder="Search.." name="search">
	      <button type="submit">Submit</button>
	    </form>
	  </div>
	</div>

	<div class="main">
    <h2>TITLE HEADING</h2>
    <h5>Title description, Dec 7, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    <br>
    <h2>TITLE HEADING</h2>
    <h5>Title description, Sep 2, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
  </div>

  	<div class="footer">
  <h2>Footer</h2>
</div>


	</body>
</html>