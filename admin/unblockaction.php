<?php
session_start();
if($_SESSION['username'] && $_SESSION['type']==2) 
{	
	include('../db.php');
	$uid=$_GET['uid'];
	$query="update user_data set status=1 where uid='$uid'";
	$con->query($query);
}
else
	echo'
		<script>
			alert("Please login with valid admin credentials..");window.location="../login.php";
		</script>';
?>
<script>
	alert('Unblocked the User!!!');window.location="activeusers.php";
</script>

