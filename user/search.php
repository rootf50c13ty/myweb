<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home Page</title>
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
                .footer 
                {
                 
                  padding: 20px;
                  text-align: center;
                  background: #ddd;
                  margin-top: 20px;
                  position:fixed;
                  left:0px;
                  bottom:0px;
                  height:30px;
                  width:100%;
                }

                .dropdown 
                {
                  float: left;
                  overflow: hidden;
                }

                .dropdown .dropbtn 
                {
                  font-size: 16px; 
                  font-weight: bold; 
                  border: none;
                  outline: none;
                  color: red;
                  padding: 14px 16px;
                  background-color: inherit;
                  font-family: inherit;
                  margin: 0;
                }

                .navbar a:hover, .dropdown:hover .dropbtn 
                {
                  background-color: black;
                }

                .dropdown-content {
                  display: none;
                  position: absolute;
                  background-color: #f9f9f9;
                  min-width: 160px;
                  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                  z-index: 1;
                }

                .dropdown-content a 
                {
                  float: none;
                  color: black;
                  padding: 12px 16px;
                  text-decoration: none;
                  display: block;
                  text-align: left;
                }

                .dropdown-content a:hover 
                {
                  background-color: #ddd;
                }

                .dropdown:hover .dropdown-content 
                {
                  display: block;
                }

                      #quotes 
                {
                  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                  border-collapse: collapse;
                  
                }

                #quotes td, #quotes th 
                {
                  border: 1px solid #ddd;
                  padding: 8px;
                }

                #quotes tr:nth-child(even)
                {
                    background-color: #f2f2f2;
                }

                #quotes tr:hover 
                {
                    background-color: #ddd;
                }

                #quotes th 
                {
                  padding-top: 12px;
                  padding-bottom: 12px;
                  text-align: left;
                  background-color: #4CAF50;
                  color: white;
                }

                table.a 
                {
                  table-layout: auto;
                  width: 80%;  
                  
                }


        </style>

    </head>
    
    <body>

        <?php
              //inlcuding db file
              include('../db.php');
              
              // checkimg for logged in users , $_SESSION['type']==1 for confirming the user level
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

        ?> 

        <div class="header">
          <h1>Hello Friend</h1>
          <p>Welcome to Oootyy nice to meet you !.</p>
        </div>


        
    <div class="topnav">
      <a class="active" href="home.php">Home</a>
      <a href="profile.php">My Profile</a>  
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

   
               
    <div align=center>   
    
    <?php

            $question=strtolower($_GET['que']);
           // echo $question;

            $question=preg_replace('/[^A-Za-z\ ]/', '', $question);
            // Replaces all spaces with hyphens.
            $question= str_replace('-', ' ', $question); 

            //preventing sqli
            if(preg_match('/=/',$question))
            {
                    echo'<script type="text/javascript">alert("For security purposes,you cant use entered special character in the search field..");window.location="home.php"</script>';
            }

            $query="select seasons.season,quotes.quotes,quotes.status FROM seasons INNER JOIN quotes ON seasons.sid=quotes.sid WHERE quotes.status=1 AND quotes.quotes LIKE '%$question%'";


              $rr=$con->query($query);

              //if num or returned by the query is > 0
              if(mysqli_num_rows($rr)>0)
              {
                    // constructing table view
                      echo '

                      <table align=center class="a" cellspacing="20" id="quotes">
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
                                  echo $row['season'];
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

/*            
         
            

           


            //filter the string and finding keywords
            function filterSearchKeys($question)
            {
                $query = trim(preg_replace("/(\s+)+/", " ", $question));
                $words = array();
                // expand this list with your words.
                include("post/word.php");
                $c = 0;
                foreach(explode(" ", $query) as $key)
                {
                    if (in_array($key, $list))
                    {
                        continue;
                    }
                    $words[] = $key;
                    if ($c >= 15)
                    {
                         echo $key."<br>";
                        break;
                    }
                    $c++;
                }
                return $words;
            }

            $words= filterSearchKeys($question);
            $keyword="";
            $i=0;
            while($i<sizeof($words))
            {

                $keyword=$keyword.$words[$i].",";
                $i++;
            }

            $query="select keywords,qid from questions";
            $res=$con->query($query);
            $l=0;
            while($row=$res->fetch_array())
            {
                $keywordsdb=$row['keywords'];
               // echo "<br>$keywordsdb ";
                $list=preg_split("/,/",$keywordsdb);
                $i=0;
                while($i<sizeof($list))
                {
                    $i++;
                }
                $i=0;
                $count1=0;
                while($i<sizeof($words))
                {
                    $j=0;
                    while($j<sizeof($list)) 
                    {
                        $cword=$words[$i];
                        $clist=$list[$j];

                        if(strcmp($cword,$clist)==0)
                        {
                            $count1++;
                        }
                        //echo "<br>";
                        $j++;
                    }
                    $i++;
                } 
                $qid1=$row['qid'];
                $array[$l]["qid"]=$qid1;
                $array[$l]["count"]=$count1;

                $data[] = array('qid' => $qid1,'count' => $count1);
                $l++;
            }
        
            $i=0;

            foreach ($data as $key => $row) {
                $qid[$key]  = $row['qid'];
                $count[$key] = $row['count'];

            }

            //sorting array to get maximum similar qid 1st
            array_multisort($count,SORT_DESC,$qid,SORT_DESC,$data);

            //printing the question"
            //printing the question"
            //printing the question"
            //printing the question"
            $que=$_GET['que'];

            echo"<br>YOUR QUERY    :$que";
            echo'<main role="main" class="container">
            <div class="my-3 p-3 bg-white rounded box-shadow">
            <h6 class="border-bottom border-gray pb-2 mb-0">Matching Posts</h6>';
          
            $i=0;
            foreach ($data as $key => $row) 
            { 
                $qid=$row['qid'];
                $mp=$row['count'];
                //removing unmatched question
                if($row['count']>0)
                {
                $query= "SELECT * FROM QUESTIONS where qid='$qid'";
                $run = $con->query($query);
                $row = $run->fetch_array();
                $qrate=$row['up']-$row['down'];;
                echo "<div class='media text-muted pt-3'>
                        <p class='media-body pb-3 mb-0 small lh-125 border-bottom border-gray'>
                          <a href='post.php?p=$qid' style='color:#000000; text-decoration:none;'>".$row['question']."</a>
                            <strong class='d-block text-gray-dark' style='font-size:10px;'>@username</strong></p>
                              <div style='float:right;'>
                                <span class='badge badge-secondary badge-pill'>$qrate</span>&nbsp;&nbsp;";

                                //check if user has rated
                                $query1= "select * from rate where pid='$qid' and uid='$uid' and ptype='question'";
                                $rr1 = $con->query($query1);
                                $row1 = $rr1->fetch_array();
                                if(mysqli_num_rows($rr1)==0)
                                {
                                    //user has not rated
                                    echo "<a href='rate/rateque.php?id=$qid&r=1&src=main'><span class='oi oi-thumb-up'></span></a>&nbsp;
                                    <a href='rate/rateque.php?id=$qid&r=-1&src=main'><span class='oi oi-thumb-down'></span></a>&nbsp;
                                    </div></div>";
                                }
                                else
                                {
                                    if(mysqli_num_rows($rr1)>0)
                                    {
                                        if($row1['rating']>0)
                                        {
                                            //user has rated up  
                                            echo "<span class='oi oi-thumb-up'></span>&nbsp;
                                            <a href='rate/rateque.php?id=$qid&r=-1&src=main'><span class='oi oi-thumb-down'></span></a>&nbsp;
                                            </div>
                                            </div>";
                                        }
                                        else
                                        {   
                                            //user has rated down
                                            echo "<a href='rate/rateque.php?id=$qid&r=1&src=main'><span class='oi oi-thumb-up'></span></a>&nbsp;
                                            <span class='oi oi-thumb-down'></span>&nbsp;
                                            </div>
                                            </div>";
                                        }
                                    }
                                }
                 }
             }
      */      ?> 
    </div>
        </main>

    <div class="footer">
        <p>Footer</p>
    </div>


  </body>
</html>