<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Accepted Quotes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
  
      /* Style the header */
        .header 
        {
          padding: 50px;
          text-align: center;
          background: #333;
          color: white;
        }

        /* Increase the font size of the <h1> element */
        .header h1 
        {
          font-size: 40px;
         /* font-family: 'MrRobot';
          font-style: normal;
          font-weight: normal;
          src: local('MrRobot'), url('../css/MR ROBOT.woff') format('woff'); */
        }

        * {box-sizing: border-box;}

        body {
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
          overflow: hidden;
          background-color: #e9e9e9;
        }

        .topnav a {
          float: left;
          display: block;
          color: black;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
        }

        .topnav a:hover {
          background-color: #ddd;
          color: black;
        }

        .topnav a.active {
          background-color: #2196F3;
          color: white;
        }

        .topnav .search-container {
          float: right;
        }

        .topnav input[type=text] {
          padding: 6px;
          margin-top: 8px;
          font-size: 17px;
          border: none;
        }

        .topnav .search-container button {
          float: right;
          padding: 6px 10px;
          margin-top: 8px;
          margin-right: 16px;
          background: #ddd;
          font-size: 17px;
          border: none;
          cursor: pointer;
        }

        .topnav .search-container button:hover {
          background: #ccc;
        }

        @media screen and (max-width: 600px) {
          .topnav .search-container {
            float: none;
          }
          .topnav a, .topnav input[type=text], .topnav .search-container button {
            float: none;
            display: block;
            text-align: left;
            width: 100%;
            margin: 0;
            padding: 14px;
          }
          .topnav input[type=text] {
            border: 1px solid #ccc;  
          }
        }

                /* Main column */
        .main {   
          flex: 70%;
          background-color: white;
          padding: 20px;
        }

        /* Fake image, just for this example */
        .fakeimg {
          background-color: #aaa;
          width: 100%;
          padding: 20px;
        }
    
        /* Footer */
        .footer {
          padding: 20px;
          text-align: center;
          background: #ddd;
          margin-top: 20px;
        }

        #quotes {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  
}

#quotes td, #quotes th 
{
  text-align: center;
  border: 1px solid #ddd;
  padding: 8px;
}

#quotes tr:nth-child(even){background-color: #f2f2f2;}

#quotes tr:hover 
{
  background-color: #ddd;
  text-align: center;
}

#quotes th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
}

table.a {
  table-layout: auto;
  width: 80%;  
}


    </style>

  </head>

  <body>

    <div class="header">
      <h1>Admin</h1>
      <p>Welcome to Oootyy nice to meet you !.</p>
    </div>

    <div class="topnav">
      <a href="newuser.php">New Users</a>
      <a href="newquotes.php">New Quotes</a>
      <a class="active" href="acceptedquotes.php">Accepted Quotes</a>
      <a href="activeusers.php">Active Users</a>
      <a href="logout.php">Logout</a>
      <div class="search-container">
        <form action="/action_page.php">
          <input type="text" placeholder="Search.." name="search">
          <button type="submit">Search</button>
        </form>
      </div>
    </div>
  
    <div align=center>
      <h2 align=center> Accepted Quotes.. </h2>


<?php
          include('../db.php');
          session_start();
          if($_SESSION['username'] && $_SESSION['type']==2) 
          {    

              //selecting new users , status==o
              $query="select * from quotes where status=1";
              $rr=$con->query($query);

              //if num or returned by the query is > 0
              if(mysqli_num_rows($rr)>0)
              {
                    // constructing table view
                      echo '

                      <table class="a" cellspacing="20" id="quotes">
                        <thead>
                          <tr>
                                    
                                    <th>Season ID</th>
                                    <th>User ID</th>
                                    <th>Quote</th>
                                    <th>Delete Quote</th>
                                                                       
                          </tr>
                        </thead>

                    <tbody>';
                 
                 while($row=$rr->fetch_array())
                  {
                          echo "<tr>
                                   
                                  <td>";
                                  echo $row['sid'];
                                  echo "  
                                  </td>
                                  <td>";
                                  echo $row['uid'];
                                  echo "
                                  </td>
                                  <td>";
                                  echo $row['quotes'];
                                  echo "
                                  </td>
                                  <td>";
                                  $qid=$row['qid'];
                                  echo "<a href=deletequote.php?qid=$qid>";
                                  echo '<input type="button" value="Delete" style="background-color:#cc0000; color:#ffffff; font-weight: bold; height:30px;width:80px">';
                                  echo "
                                  </td>
                                  </tr>";
                                  
                  }
                  echo "</tbody></table>";
                          
                }

                else  // query returns no data
                {
                          echo "<center><font color=red>No Accepted Users..</font></center>";
                          //echo $_SESSION['uid']."   l    ".$_SESSION['username'];
                }
          }

          else
          {
                      echo'<script>window.location="../login.php";</script>';
          } 

?>
      </div>  
  </body>
</html>