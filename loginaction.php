<?php
	
	include("db.php");
	$username=$_POST["username"];
	$password=$_POST["password"];

	//To prevent SQLi
	if(preg_match('/-/',$password)||preg_match('/=/',$username))
	{
		echo'<script type="text/javascript">alert("For security purposes,you cant use entered special character in password field");window.location="login.php"</script>';
	}
	if(preg_match('/=/',$password) ||preg_match('/-/',$username))
	{
		echo'<script type="text/javascript">alert("For security purposes,you cant use entered special character in password field");window.location="login.php"</script>';
	}
	

	$query="select password from user_data where username='$username'";
	$qv=$con->query($query); 

	//fetching array from db
	//$test=$qv->fetch_array();
	
	if($row=$qv->fetch_array())
	{
	

		if(strcmp($password,$row['password'])==0)
		{

		 	session_start();
			$query="select * from user_data where username='$username'";

			$qv= $con->query($query);
			$row=$qv->fetch_array();
				if($row)
				{
					$_SESSION['username']=$row['username'];
					$_SESSION['type']=$row['utype'];
					$_SESSION['status']=$row['status'];
				
							//blocked users
							$aa="2";
							if(strcmp($aa,$row['utype'])==0)
							{	
								echo'<script type="text/javascript">window.location="admin/newuser.php"</script>';
							}	
				
				}
			//	echo'<script type="text/javascript">window.location="user/home.php"</script>';
				
					if($row['status']!=1)
					{
							echo'<script type="text/javascript">alert("Your account is blocked");window.location="login.php"</script>';
					}
					else
					{	
							echo'<script type="text/javascript">window.location="user/home.php"</script>';
					}	
		}
	/*	elseif ($row['status']==0) 
		{
			echo '<script type="text/javascript">alert("Login failed, Waiting for admin approval...");window.location="login.php"</script>';		}
*/		else
        {
               echo'<script type="text/javascript">alert("Login failed, Incorrect username or password");window.location="login.php"</script>';
        }
	}
	
	else 
    {
            echo'<script type="text/javascript">alert("Login failed, Incorrect username or password");window.location="login.php"</script>';
    }
?>