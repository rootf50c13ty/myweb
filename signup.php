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
           
            var password = "";
            var confirm  = "";
            var message = "";
            var good_color = "#66cc66";
            var bad_color  = "#ff6666";
            var uname = "";               
            var email = "";    
            //var pass = "";  
            
            function formValidation()
            {
                
                uname = document.forms["regform"]["uname"];               
                email = document.forms["regform"]["email"];    
                //pass = document.forms["regform"]["pass"]; 

                //Store the password field objects into variables ...
                password = document.getElementById('pass');
                confirm  = document.getElementById('repassword');
                //Store the Confirmation Message Object ...
                message = document.getElementById('confirm-message2');
                //Compare the values in the password field 
                //and the confirmation field 

                
                if (uname.value == "")                                  
                { 
                   // window.alert("Please enter your name."); 
                    message.style.color           = bad_color;
                    message.innerHTML             = "Please enter your name.";
                    
                    name.focus(); 
                    return false; 
                } 
                   
                else if (!checkPass()) {
                    return  false;
                }

                else if (!ValidateEmail()) {
                    return false;
                }
                else{
                    //return true because all validations are satisfied
                    return true;
                }


               


                /*if (address.value == "")                               
                { 
                    window.alert("Please enter your address."); 
                    address.focus(); 
                    return false; 
                } 
               
                if (phone.value == "")                           
                { 
                    window.alert("Please enter your telephone number."); 
                    phone.focus(); 
                    return false; 
                }
               
               
                if (what.selectedIndex < 1)                  
                { 
                    alert("Please enter your course."); 
                    what.focus(); 
                    return false; 
                }*/
               
                
            }


            function checkPass()
            {
                password = document.getElementById('pass');
                confirm  = document.getElementById('repassword');
                message = document.getElementById('confirm-message2');
                
                if (password.value == "")                        
                { 
                    //window.alert("Please enter your password"); 
                    message.style.color           = bad_color;
                    message.innerHTML             = "Please enter your password"; 
                    password.focus(); 
                    return false; 
                }
                else if (confirm.value == "")                        
                { 
                    //window.alert("Please enter your password"); 
                    message.style.color           = bad_color;
                    message.innerHTML             = "Please enter your password"; 
                    confirm.focus(); 
                    return false; 
                }  
                else if(password.value == confirm.value)
                {
                    //The passwords match. 
                    //Set the color to the good color and inform
                    //the user that they have entered the correct password 
                    confirm.style.backgroundColor = good_color;
                    message.style.color           = good_color;
                    message.innerHTML             = "Passwords Match!";
                    return true;

                }
                else
                {
                    //The passwords do not match.
                    //Set the color to the bad color and
                    //notify the user.
                    confirm.style.backgroundColor = bad_color;
                    message.style.color           = bad_color;
                    message.innerHTML             = "Passwords Doesn't Match!";
                    return false;
                }
                
            }

            function ValidateEmail()
            {
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                message = document.getElementById('confirm-message2');
                email = document.forms["regform"]["email"];  

                if (email.value == "")                                   
                { 
                    //window.alert("Please enter a valid e-mail address.");
                    message.style.color           = bad_color;
                    message.innerHTML             = "Please enter a valid e-mail address."; 
                    email.focus(); 
                    return false; 
                } 
                else if(email.value.match(mailformat))
                {
                    //document.form1.text1.focus();
                    return true;
                }
                else
                {
                    //alert("You have entered an invalid email address!");
                    message.style.color           = bad_color;
                    message.innerHTML             = "You have entered an invalid email address!"; 
                    email.focus();
                    return false;
                }
            }



        </script> 

</head>

    <body onload='document.regform.uname.focus()'>

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

    <form name=regform action="signup_action.php" method="post" onsubmit="return formValidation()">
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
            <input type="text" placeholder="Enter Email" id=email name="email" required >   
                    
            <br>

            <label for="pass"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" minlength=8 name="pass" id=pass required onblur="checkPass();">
                
            <br>
            <label for="pass-rpt"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" minlenghth=8 name="pass-rpt" id=repassword required onkeyup="checkPass();">
            <br>
            <span id="confirm-message2"></span>
            <hr>
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

            <button type="submit" class="registerbtn" >Register</button>
        </div>
                      
        <div class="container signin">
            <p>Already have an account? <a href="#">Sign in</a>.</p>
        </div>
    </form>
 

    </script>

</body>

</html>