<?php
	$$host="localhost";
	$user="root";
	$pass="f50c13ty";
	$db_name="myweb";

	$con = new mysqli($host,$user, $pass, $db_name);
	if($con)
	{
		echo "Db connected successfully";
	}

	else
	{

		echo "db connection failed !!!";
	}

?>

