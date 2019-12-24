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
                            if (new RegExp(regex[i]).test(password) && password.lenghth >=0) 
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
     

            function fvalidation()                                    
            { 
                    var uname = document.forms["regform"]["uname"];               
                    var email = document.forms["regform"]["email"];    
                   
                   
                    if (uname.value == "")                                  
                    { 
                        window.alert("Please enter a username."); 
                        uname.focus(); 
                        return false; 
                    } 
                                  
                    if (email.value == "")                                   
                    { 
                        window.alert("Please enter a valid e-mail address."); 
                        email.focus(); 
                        return false; 
                    } 


            }


            function checkpass()
            {
                    var pwd1  = document.forms["regform"]["pass"];
                    var pwd2  = document.forms["regform"]["pass-rpt"];
                    var goodColor = "#66cc66";
                    var badColor = "#ff6666";

                    if(pwd1.value.length > 8)
                    {
                        pwd1.style.backgroundColor = goodColor;
                        message.style.color = goodColor;
                        message.innerHTML = "character number ok!"
                    }
                    else
                    {
                        pwd.style.backgroundColor = badColor;
                        message.style.color = badColor;
                        window.alert("Please enter a valid PaSSS."); 
                        message.innerHTML = " you have to enter at least 6 digit!"
                        return;
                    }

            }




        </script> 

</head>

	<body onload='document.regform.uname.focus()'>

     <div class="col-md-4 order-md-2 mb-4" id="warning" style="display:none;position:absolute;top:60%;transform:translateY(-60%);right:1%;transform:translateY(-1%);z-index: 1;">
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0" id="strength" style="display:none;"></h6>
                                <small class="text-muted"  id="strength-desc" style="display:none;">Your password must be at least 8 characters long, contain at least one number and have a mixture of uppercase and lowercase letters.</small>
                                <br>
                                <h6 class="my-0" id="match" style="display:none;"></h6>
                                <small class="text-muted" id="match-desc" style="display:none;">Please make sure both passwords are the same.</small>                                
                            </div>
                        </li>
                    </ul>

    </div>

    <div class="header">
	   <h1>
            Hello Friend
       </h1>
       <p>
            Welcome to Oootyy nice to meet you !.
       </p>
	
	</div>

	<div class="topnav">
    	<a  href="home.php">Home</a>
    	<a href="#about">About</a>
    	<a class="active" href="signup.php">Sign Up</a>
    	<a href="login.php">Log In</a>
    	<a href="#">Contact</a>
    	<div class="search-container">
    	    <form action="/action_page.php">
    	       <input type="text" placeholder="Search.." name="search">
    	       <button type="submit">Search</button>
    	    </form>
    	</div>
	</div>

    <form name=regform action="signup_action.php" class="needs-validation" onsubmit="return fvalidation()"  method="post" novalidate>
        <div class="container" align=center>
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <br>
            <br>
              
            <label for="uname">
                <b>Username</b>
            </label>                  
            <input type="text" id=username maxlength="15" placeholder="Enter username" name="uname"  required>

            <br>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>   
                    
            <br>

            <label for="pass"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" minlength=8 name="pass" id=password onkeyup="checkPass(); return false;" >
                
            <br>
            <label for="pass-rpt"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" minlenghth=8 name="pass-rpt" id=repassword onkeyup="checkPass(); return false;">
            <br>   
            <hr>
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

            <button type="submit" class="registerbtn" onclick="ValidateEmail(document.regform.email)">Register</button>
        </div>
                      
        <div class="container signin">
            <p>Already have an account? <a href="#">Sign in</a>.</p>
        </div>
    </form>



    <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
        (
        function() 
        {
            'use strict';

            window.addEventListener('load', function() 
            {
                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                            // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) 
                {
                    form.addEventListener('submit', function(event) 
                    {
                        if (form.checkValidity() === false) 
                        {
                            event.preventDefault();
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated');
                    }, false);
                });

            }, false);
            
        })();


    </script>

    <script src="./js/mailvalidation.js"></script>

</body>

</html>