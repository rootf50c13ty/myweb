<?php
	//db config file

	include("db.php");

	$uname=$_POST["uname"];
	$email=$_POST["email"];
	$pass=$_POST["pass"];

echo $uname;
echo "<br>";
echo $email;
echo "<br>";
echo $pass;
echo "<br>";

	$query= "INSERT INTO user_data (username,password,email,status) VALUES ('$uname','$pass','$email',false)";

	 if($con->query($query))
       echo'<script type="text/javascript">alert("Sign Up Successfull !!!..After verification you may login into your account");window.location="login.php"</script>';
    else
	   echo'<script type="text/javascript">alert("Error account not created, username already exists");window.location="signup.php"</script>';
  

?>