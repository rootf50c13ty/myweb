<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Admin pannel of reLearn</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"  style="padding-left:50px">RELEARN</a>
        <br>
        <br>
        <br>
      <!--input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"-->
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="logout.php"><h4>Sign out</h4></a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">

          <?php include('navbar.php')?>
          <!-- adding nav bar-->

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4" style="">
          <h2>New Users</h2>
          <div class="table-responsive" style="">
            <?php
            //inlcuding db file
            include('../db.php');
            // checkimg for logged in users , $_SESSION['type']==1 for confirming user is admin	or not			
            SESSION_START();
            if($_SESSION['uid'] && $_SESSION['type']==1) 
            {       
                $query="select * from user_details where status=0";
				$rr=$con->query($query);
				if(mysqli_num_rows($rr)>0)
				{
					// constructing table view
					echo '<table class="table table-striped table-sm"><thead><tr>
                    <th></th>
                    <th>User Name</th>
                    <th>Location</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Accept</th>
                    <th>Reject</th>
                    </tr>             
                    </thead>';
				    while($row=$rr->fetch_array())
				    {
                        echo "<tr><td>";
                        echo'<span data-feather="chevron-right"></span>';
                        echo "</td><td>";
                        echo $row['name'];
                        echo "</td><td>";
                        echo $row['location'];
                        echo "</td><td>";
				        echo $row['phone'];echo "</td><td>";echo $row['email'];
                        echo "</td><td>";
                        $uid=$row['uid'];
                        echo "<a href=acceptusers.php?uid=$uid>";
                        echo '<input type="button" value="Accept" style="background-color:green;height:30px;width:80px">';echo "</td><td>";
                        echo "<a href=blockedusers/removeconfirmnewusers.php?uid=$uid>";
                        echo '<input type="button" value="Reject" style="background-color:red;height:30px;width:80px">';
                        echo "</td></tr>";
                        echo "</td></tr>";
				    }
				    echo "</table>";
								
                }
				else  // query returns no data
                {
                    echo "<center><font color=red>No New users</font></center>";
                    //echo $_SESSION['uid']."   l    ".$_SESSION['username'];
                }
            }
            else
            {
                echo'<script>window.location="../login.php";</script>';
            }
            ?>
            
          </div>
        </main>
      </div>
    </div>
      
    <footer class="footer bg-dark" style="height:50px;padding-top:10px;position: fixed;left: 0;bottom: 0;width: 100%;color: white;text-align: center;">
      <div class="container">
          <span class="text-muted"><font color=white><center>All rights reserved &copy; 2017-2018</center></font></span>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="js/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

   
  </body>
</html>
