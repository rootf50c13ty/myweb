<?php

SESSION_START();

if($_SESSION['username'] && $_SESSION['type']==2)
{
	include('../db.php');
	session_start();
	$delusername=$_SESSION['delusername'];

	$query="DELETE FROM user_data  WHERE username='$delusername'";
	$con->query($query);
	echo '<script>alert("The user has been removed");window.location= "newuser.php";</script>';
}

else
	echo'<script>window.location="../login.php";</script>';
		
?>
