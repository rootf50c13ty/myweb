<?php
session_start();


if($_SESSION['username'] && $_SESSION['type']==2) 
{	
	include('../db.php');
	$username=$_GET['username'];
	//echo $username;
	$query="update user_data set status=1 where username='$username'";
	$con->query($query);
}
else
	echo'<script>
			alert("Please login");window.location="../login.php";
		</script>';
?>


<script>
	alert('user accepted');window.location="newuser.php";
</script>

