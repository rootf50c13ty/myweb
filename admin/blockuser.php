
<?php
include('../db.php');
$uid=$_GET['uid'];
//$query="DELETE FROM user_data WHERE uid=$uid";
session_start();
$_SESSION['blockuid']=$uid;
//$con->query($query);

//Alert msg before Blocking a user.
echo  

	'<script>
		
			var r = confirm("Alert !! Do you want to block this user? ");
			if(r == true )
			{
				window.location="blockaction.php";
			} 
			else
				window.location="activeusers.php";
		
	</script>';
	
?>

