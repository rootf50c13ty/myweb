
<?php
include('../db.php');
$username=$_GET['username'];
//$query="DELETE FROM user_data WHERE uid=$uid";
session_start();
$_SESSION['delusername']=$username;
//$con->query($query);

//Alert msg before deleting a user.
echo  

	'<script>
		
			var r = confirm("Be careful ,you are trying to delete a user");
			if(r == true )
			{
				window.location="deleteuser.php";
			} 
			else
				window.location="newuser.php";
		
		</script>';
	
?>

