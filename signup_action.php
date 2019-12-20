<?php
	//db config file

	include("db.php");

	$uname=$_POST["uname"];
	$email=$_POST["email"];
	$pass=$_POST["pass"];


	$query="INSERT INTO user_data (username,passowrd,email) VALUES ('$uname','$pass','$email')";

	 if($con->query($query)=== TRUE)
       echo'<script type="text/javascript">alert("After verification you may login into your account");window.location="login.php"</script>';
    else
	   echo'<script type="text/javascript">alert("Error account not created, username already exists");window.location="signup.php"</script>';
    
?>