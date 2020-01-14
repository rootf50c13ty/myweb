<?php
	   
	   	include("../db.php");

    	session_start();
    	if($_SESSION['username'] && $_SESSION['status']==1) 
    	{        
			
			//selecting user data
	        $username=$_SESSION['username'];
	        $query="select * from user_data where username='$username'";
	        $rr=$con->query($query);
	        if($row = $rr->fetch_array())
	        {
	            $uid=$row['uid'];
	        }   
	    }    


	    	$username=$_SESSION['username'];
		    $output_dir = "../img/";
			$allowedExts = array("jpg", "jpeg", "gif", "png","JPG");
			$extension = @end(explode(".", $_FILES["myfile"]["name"]));

			    if(isset($_POST['upload']))
			    {
				    //Filter the file types , if you want.
				    if ((($_FILES["myfile"]["type"] == "image/gif")
					    || ($_FILES["myfile"]["type"] == "image/jpeg")
					    || ($_FILES["myfile"]["type"] == "image/JPG")
					    || ($_FILES["myfile"]["type"] == "image/png")
					    || ($_FILES["myfile"]["type"] == "image/pjpeg"))
					    && ($_FILES["myfile"]["size"] < 504800)
					    && in_array($extension, $allowedExts)) 
				    {
					      if ($_FILES["myfile"]["error"] > 0)
						  {
						    echo "Return Code: " . $_FILES["myfile"]["error"] . "<br>";
						  }

					    if (file_exists($output_dir. $_FILES["myfile"]["name"]))
					    {
					      unlink($output_dir. $_FILES["myfile"]["name"]);
					    }	
						else
						{
						    $pic=$_FILES["myfile"]["name"];
						    $conv=explode(".",$pic);
						    $ext=$conv['1'];	
							    
						    //move the uploaded file to uploads folder;
					          move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$user.".".$ext);
						    
						    $pics=$output_dir.$user.".".$ext;
						  
						      
						    $url=$user.".".$ext;
						    
						    
						    $update="update user_data set imgurl='$url' where username='$username'";
						    
						    if($sp->query($update))
						    {
							   echo '<div data-alert class="alert-box success radius">';
							   echo  '<b>Success !</b>  Image Updated' ;
							   echo  '<a href="#" class="close">&times;</a>';
							   echo '</div>';
							   header('refresh:3;url=home.php'); 
						    }
						    else
						    {
							    echo '<div data-alert class="alert-box alert radius">';
							    echo  '<b>Error !</b> ' .$sp->error ;
							    echo  '<a href="#" class="close">&times;</a>';
							    echo '</div>';
						    }
						    
						    
						    
						}
						    
				    }	
				    else
				    {
				    
				        echo '<div data-alert class="alert-box warning radius">';
				        echo  '<b>Warning !</b>  File not Uploaded, Check image' ;
				        echo  '<a href="#" class="close">&times;</a>';
						echo '</div>';
			 
				    }

			    }	    
?>