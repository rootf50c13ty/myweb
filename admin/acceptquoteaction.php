<?php
session_start();


if($_SESSION['username'] && $_SESSION['type']==2) 
{	
	include('../db.php');
	$qid=$_GET['qid'];
	echo $qid;
	$query="update quotes set status=1 where qid='$qid'";
	$con->query($query);
}
else
	echo'<script>
			alert("Please login with valid admin credentials..");window.location="../login.php";
		</script>';
?>


<script>
	alert('Quote accepted..');window.location="newquotes.php";
</script>

