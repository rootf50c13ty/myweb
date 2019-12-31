<?php
SESSION_START();

if($_SESSION['username'] && $_SESSION['type']==2)
{	
	include('../db.php');
	$uid=$_GET['uid'];
	$query="update user_data set status=1 where username=$username";
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