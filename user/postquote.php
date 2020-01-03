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

				  position:fixed;
				  left:0px;
				  bottom:0px;
				  height:30px;
				  width:100%;	
				  padding: 20px;
				  text-align: center;
				  background: #ddd;
				  margin-top: 20px;
				}

				.dropdown 
				{
				  float: left;
				  overflow: hidden;
				}

				.dropdown .dropbtn 
				{
				  font-size: 16px; 
				  font-weight: bold; 
				  border: none;
				  outline: none;
				  color: red;
				  padding: 14px 16px;
				  background-color: inherit;
				  font-family: inherit;
				  margin: 0;
				}

				.navbar a:hover, .dropdown:hover .dropbtn 
				{
				  background-color: black;
				}

				.dropdown-content {
				  display: none;
				  position: absolute;
				  background-color: #f9f9f9;
				  min-width: 160px;
				  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
				  z-index: 1;
				}

				.dropdown-content a 
				{
				  float: none;
				  color: black;
				  padding: 12px 16px;
				  text-decoration: none;
				  display: block;
				  text-align: left;
				}

				.dropdown-content a:hover 
				{
				  background-color: #ddd;
				}

				.dropdown:hover .dropdown-content 
				{
				  display: block;
				}

				select 
				{ 
					width: 200px; 
					text-align:center; 
				}

		</style>

	</head>

	<body>
		
		<?php
	          //inlcuding db file
	          include('../db.php');
	          
	          // checkimg for logged in users , $_SESSION['type']==1 for confirming the user level

	          session_start();
	          if($_SESSION['username'] && $_SESSION['status']==1) 
	          {       

	              //selecting user data
	          	  $username=$_SESSION['username'];
	              $query="select * from user_data where username='$username'";
	              $rr=$con->query($query);
	              if($row = $rr->fetch_array())
	      		  {
	      		  	$uid=$row['uid'];
	      		  } 	
	          }

      	?>

		<div class="header">
		  <h1>Hello Friend</h1>
		  <p>Welcome to Oootyy nice to meet you !.</p>
		</div>


		
	<div class="topnav">
	  <a class="active" href="home.php">Home</a>
	  <a href="#about">About</a>
	  <a href="#">Contact</a>

	   <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Season 1</a>
      <a href="#">Season 2</a>
      <a href="#">Season 3</a>
      <a href="#">Season 4</a>
    </div>
  </div> 

	  <a href="logout.php">Log Out</a>

	  <div class="search-container">
		    <form action="/action_page.php">
		      <input type="text" placeholder="Search.." name="search">
		      <button type="submit">Search</button>
		    </form>
		  </div>
	</div>



	<main role="main">
               
        <div >
            <h5 style="text-align:center; font-size: 30px;">Post your Quote</h5>
            
            <form action="postquoteaction.php" method="post" id="postquote">
             

                <div align=center>
                    <div>
                        <span>Add your Quote..</span>
                    </div>

                    <textarea name="quote" id="quo" value="" aria-label="With textarea"  rows="4" cols="50" style="resize:none;" required autofocus>
                    	
                    </textarea>
                </div>

                <br>
                
                <div align=center>
                    <div >
                        <label for="inputseasonselect">Select Season</label>

                       <br>
                    </div>

	                <div>

	                    <select name="season" id="inputGroupSelect03">
	                        
	                        <option selected >Choose</option>
	                        <?php

		                        $query="SELECT * FROM seasons ORDER BY season";
		                        $res=$con->query($query);
		                        
		                        while($row=$res->fetch_array())
		                        {
		                            $opt=$row['season'];
		                            echo"<option >$opt</option>";
	                        	}
	                        ?>
	                </div>

                    </select>

                </div>
                <br>
                
           

            <button type="submit" form="postquote" onclick="return validate()">Post</button>

             </form>

        </div>
      
    </main>      



	</body>
</html>