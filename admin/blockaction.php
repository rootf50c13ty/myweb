<?php

SESSION_START();

if($_SESSION['username'] && $_SESSION['type']==2)
{
	include('../db.php');
	session_start();
	$blockuid=$_SESSION['blockuid'];

	//echo $blockqid;

	$query="update user_data set status=2 where uid='$blockuid'";
	$con->query($query);
	
	echo '<script>alert("The User has been Blocked.");window.location= "activeusers.php";</script>';
}

else
	echo'<script>window.location="../login.php";</script>';
		
?>
