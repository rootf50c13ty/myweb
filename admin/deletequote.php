<?php
	
	include('../db.php');
	$qid=$_GET['qid'];
	//$query="DELETE FROM user_data WHERE uid=$uid";
	session_start();
	$_SESSION['delqid']=$qid;
	//$con->query($query);
	echo $qid;
	//Alert msg before deleting a user.
	echo  

	'<script>
		
			var r = confirm("Be careful ,you are trying to delete an active Quote !!! ");
			if(r == true )
			{
				window.location="deletequoteaction.php";
			} 
			else
				window.location="newquotes.php";
		
    </script>';
	
?>

