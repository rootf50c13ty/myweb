<?php

SESSION_START();

if($_SESSION['username'] && $_SESSION['type']==2)
{
	include('../db.php');
	session_start();
	$delqid=$_SESSION['delqid'];

	echo $delqid;

	$query="DELETE FROM quotes WHERE qid='$delqid'";
	$con->query($query);
	
	echo '<script>alert("The quote has been removed.");window.location= "acceptedquotes.php";</script>';
}

else
	echo'<script>window.location="../login.php";</script>';
		
?>
