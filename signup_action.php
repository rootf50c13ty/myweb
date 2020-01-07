<?php
	//db config file

	include("db.php");

	$uname=$_POST["uname"];
	$email=$_POST["email"];
	$pass=$_POST["pass"];
	$passrpt=$_POST["pass-rpt"];



	$query= "INSERT INTO user_data (username,password,email,status) VALUES ('$uname','$pass','$email',false)";

	 if($con->query($query))
       echo'<script type="text/javascript">alert("Sign Up Successfull !!!..After verification you may login into your account");window.location="login.php"</script>';
    else
	   echo'<script type="text/javascript">alert("Error!! Account not created, username already exists");window.location="signup.php"</script>';
  


	// Initialize variables to null.
/*	$nameError ="";
	$emailError ="";
	$passwordError ="";
	if(isset($_POST['submit']))
	{
		if (empty($_POST["name"])) 
		{
		$nameError = "Name is required";
		} 
		else 
		{
			$name = test_input($_POST["name"]);
			// check name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z]*$/",$name)) 
			{
				$nameError = "Only letters are white space allowed";
			}
		}
		if (empty($_POST["email"])) 
		{
			$emailError = "Email is required";
		}
	    else 
	    {
			$email = test_input($_POST["email"]);
			// check if e-mail address syntax is valid or not
			if (!preg_match("/([w-]+@[w-]+.[w-]+)/",$email)) 
			{
				$emailError = "Invalid email format";
			}
		}
*/

?>