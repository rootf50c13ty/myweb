<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home Page</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="style.css" rel="stylesheet">

        <link href="./css/signup_page.css" rel="stylesheet">

         <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/form-validation.css" rel="stylesheet">

        <script>
            function checkPass()
            {
                //toggle visibility
                if(document.getElementById('warning').style.display == 'none')
                    document.getElementById('warning').style.display = 'block';
                
                if(document.getElementById('match').style.display == 'none')
                    document.getElementById('match').style.display = 'block';
                
                if(document.getElementById('match-desc').style.display == 'none')
                    document.getElementById('match-desc').style.display = 'block';
                
                if (document.getElementById('password').value==document.getElementById('repassword').value)  
                {
                    document.getElementById('match').style.color='#28a745';
                    document.getElementById('match').innerHTML='Passwords match';
                    document.getElementById('match-desc').style.display = 'none';
                }
                else
                {
                    document.getElementById('match').style.color='#dc3545' ;
                    document.getElementById('match').innerHTML='Passwords do not match';
                }
            }
            function checkPasswordStrength() 
            {
                //toggle visibility
                if(document.getElementById('warning').style.display == 'none')
                    document.getElementById('warning').style.display = 'block'; 
                
                if(document.getElementById('strength').style.display == 'none')
                    document.getElementById('strength').style.display = 'block';
                
                if(document.getElementById('strength-desc').style.display == 'none')
                    document.getElementById('strength-desc').style.display = 'block';
                

                var password=document.getElementById('password').value;

                //TextBox left blank.
                if (password.length == 0) 
                {
                    document.getElementById('strength').innerHTML = "Password is Very Weak";
                    document.getElementById('strength').style.color = '#dc3545' ;
                    return;
                }

                //Regular Expressions.
                var regex = new Array();
                regex.push("[A-Z]"); //Uppercase Alphabet.
                regex.push("[a-z]"); //Lowercase Alphabet.
                regex.push("[0-9]"); //Digit.
                regex.push("[$@$!%*#?&]"); //Special Character.

                var passed = 0;

                //Validate for each Regular Expression.
                for (var i = 0; i < regex.length; i++) 
                    if (new RegExp(regex[i]).test(password)) 
                        passed++;

                //Validate for length of Password.
                if (passed > 2 && password.length > 8) 
                    passed++;

                //Display status.
                var color = "";
                var strength = "";
                switch (passed) 
                {
                    case 0:
                        strength = "Very Weak";
                        color = "#dc3545";
                        break;
                    case 1:
                        strength = "Weak";
                        color = "#dc3545";
                        break;
                    case 2:
                        strength = "Good";
                        color = "#ffc107";
                        break;
                    case 3:
                        strength = "Strong";
                        color = "#28a745";
                        break;
                    case 4:
                        strength = "Very Strong";
                        color = "darkgreen";
                        break;
                }
                if(passed>2)
                    document.getElementById('strength-desc').style.display = 'none';
                    
                document.getElementById('strength').innerHTML = "Password is "+strength;
                
                document.getElementById('strength').style.color = color;
            }
        </script>

</head>

	<body>





		<div class="header">
		  <h1>Hello Friend</h1>
		  <p>Welcome to Oootyy nice to meet you !.</p>
		</div>
	<div class="topnav">
	  <a  href="#home">Home</a>
	  <a href="#about">About</a>
	  <a class="active" href="#">Sign Up</a>
	   <a href="#">Sign In</a>
	    <a href="#">Contact</a>
	  <div class="search-container">
	    <form action="/action_page.php">
	      <input type="text" placeholder="Search.." name="search">
	      <button type="submit">Search</button>
	    </form>
	  </div>
	</div>

                <form action="signup_action.php" method="post" novalidate>
                      <div class="container" align=center>
                        <h1>Register</h1>
                        <p>Please fill in this form to create an account.</p>
                        <hr>

                    <br<

                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter username" name="uname" required>

                    <br>

                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email" name="email" required>
                    <br>
                        <label for="pass"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="pass" required>
                    <br>
                        <label for="pass-rpt"><b>Repeat Password</b></label>
                        <input type="password" placeholder="Repeat Password" name="pass-rpt" required>
                     <br>   
                        <hr>
                        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                        <button type="submit" class="registerbtn">Register</button>
                      </div>
                      
                      <div class="container signin">
                        <p>Already have an account? <a href="#">Sign in</a>.</p>
                      </div>
                    </form>

	</body>

</html>