<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home Page</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="style.css" rel="stylesheet">

</head>

	<body>

		<div class="header">
		  <h1>Hello Friend</h1>
		  <p>Welcome to Oootyy nice to meet you !.</p>
		</div>
	<div class="topnav">
	  <a  href="home.php">Home</a>
	  <a href="#about">About</a>
	  <a href="signup.php">Sign Up</a>
	   <a class="active" href="login.php">Log In</a>
	    <a href="#">Contact</a>
	  <div class="search-container">
	    <form action="/action_page.php">
	      <input type="text" placeholder="Search.." name="search">
	      <button type="submit">Search</button>
	    </form>
	  </div>
	</div>

<div align=center>
	
     <form action="loginaction.php" method="post">
        <div align=center>
     <!--      <img srcc="images/logo1.png" alt=""> -->
            <h1 >Sign In</h1>
      
        </div>

        <div >

       	    <label for="inputEmail">Username</label>
            <input name="username" type="text" id="username" class="form-control" placeholder="Username" required autofocus autocomplete="off">
        
        </div>

        <br>

        <div >

        	<label for="password">Password</label>
            <input name="password" type="password" id="password" class="form-control" placeholder="Password" required autocomplete="off">
          
        </div>

        <br>

        <button type="submit">Sign in</button>
        
        <br>
        <br>

        <div >
            <a  href="signup.php" role="button">Click here to Register</a>
        </div>

        <br>

        <div >
            <a href="user/home.php" role="button">Click here to go back</a>
        </div>
        
    </form>

</div>


	
	

    	<div class="footer">
		  <h2>EXit </h2>
		</div>

	</body>
	

</html>