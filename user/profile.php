<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Home Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        </style>
    </head>
    
    <body>

            <?php
            //inlcuding db file
            include('../db.php');
            
            // checkimg for logged in users , $_SESSION['type']==1 for confirming the user level
            session_start();
            $username=$_SESSION['username'];
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
            

        ?> 

        <div class="header">
          <h1>Hello Friend</h1>
          <p>Welcome to Oootyy nice to meet you !.</p>
        </div>


        
    <div class="topnav">
      <a href="home.php">Home</a>
      <a class="active" href="profile.php"><?php echo ucfirst($username); ?></a> 
      <a href="temp.php">img upload</a> 
      <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#" onclick="changeLink('cat','1')">Season 1</a>
      <a href="#" onclick="changeLink('cat','2')">Season 2</a>
      <a href="#" onclick="changeLink('cat','3')">Season 3</a>
      <a href="#" onclick="changeLink('cat','4')">Season 4</a>
    </div>
  </div> 

      <a href="logout.php">Log Out</a>
      
      <button type="submit" onclick="window.location='postquote.php'">Post Quote</button>

           <div class="search-container">
            <form action="search.php">
              <input type="text" placeholder="Search.." name="que">
              <button type="submit">Search</button>
            </form>
          </div>
    </div>


    
          <div>
              <img src="../img/avataruser.png" width="140" height="140">
          </div>


    <form action="imguploadaction.php" method="post" enctype="multipart/form-data">
       
        <div>
          <button type="submit" name="upload">
            Upload
          </button>
          <input type="file" name="myfile"  required/>
          <span style="color:red;">Maximun Image Size 100KB</span><br/><br/>
          
        </div> 

    </form>
    
    <?php
           
            $username=$_SESSION['username'];
            $query1="select * from user_data where username='$username'";
            $rr=$con->query($query1);
            if($row = $rr->fetch_array())
            {
                $uid=$row['uid'];
            }    

            $query="select user_data.uid,quotes.quotes,quotes.status FROM user_data INNER JOIN quotes ON user_data.uid=quotes.uid WHERE quotes.status=1 AND user_data.username='$username'";

              $rr=$con->query($query);

              //if num or returned by the query is > 0
              if(mysqli_num_rows($rr)>0)
              {
                    // constructing table view
                      echo '

                      <table class="a" cellspacing="20" id="quotes">
                        <thead>
                          <tr>
                                    <th>Quote</th>
                                    <th>Season</th>                                         
                          </tr>
                        </thead>
                    
                    <tbody>';
            
                    while($row=$rr->fetch_array())
                    {
                          echo "
                          <tr>
                                   
                                  <td>";

                                  echo $row['quotes'];
                                  echo "  
                                  </td>
                                  <td>";
                                  echo $row['uid'];
/*
                              if($row['sid']==1)
                                  echo 'Season1';
                              elseif($row['sid']==2)
                                  echo 'Season2';
                              elseif($row['sid']==3)
                                  echo 'Season3';
                              else                                  
                                  echo 'Season4';
                                  //echo $row['sid'];
 */

                                  echo "
                                  </td>                             
                          </tr>";
                    }
                    echo "</tbody></table>";
                          
                } 

                else  // query returns no data
                {
                          echo "<center><font color=red>We dont have approved quotes..</font></center>";
                          //echo $_SESSION['uid']."   l    ".$_SESSION['username'];
                }

}

     ?> 
          </div>
        </main>

    <div class="footer">
        <p>Footer</p>
    </div>


  </body>
</html>