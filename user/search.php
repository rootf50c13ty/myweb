<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Post a new question</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Iconic CSS -->
    <link href="../css/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="../css/offcanvas.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="../css/sticky-footer.css" rel="stylesheet">
    
  </head>

  <body class="bg-light" onload="verifyLog()">
    <?php
        session_start();
        include("../db.php");
        if(empty($_SESSION['uid']))
        {
            $user="log in";
            $uid=0;
    ?>
        <input type='hidden' id='no-log'>
    <?php 
        }
        else
        {
            $uid=$_SESSION['uid'];
            $query= "SELECT * FROM user_details where uid=".$uid;
            $run = $con->query($query);
            if($row = $run->fetch_array())
                $user=$row['username'];
        }           
        
    ?>
    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="main.php">reLearn</a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
          </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link login-required" href="profile.php">
                        <?php echo ucfirst($user); ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="quiz.php">Quizzes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link login-required" href="saved_questions.php">Saved content</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link login-required" href="logout.php">Sign out</a>
                </li>

            </ul>
            <button type="button" class="btn btn-info login-required-button" onclick="window.location='newpost.php'">Post question</button>&nbsp;&nbsp;&nbsp;
            <form class="form-inline my-2 my-lg-0" action="search.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="que">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <main role="main" class="container" style="max-width:80%;">
               
        <div class="my-3 p-3 bg-white rounded box-shadow">   
    
    <?php
           
            $question=strtolower($_GET['que']);
            
            // removing special characters
            $question=preg_replace('/[^A-Za-z\ ]/', '', $question);
            $question= str_replace('-', ' ', $question); // Replaces all spaces with hyphens.

            //preventing sqli
            if(preg_match('/=/',$question))
            {
                    echo'<script type="text/javascript">alert("For security purposes,you cant use entered special character in question field");window.location="newpost.php"</script>';
            }


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
            ?>
          </div>
        </main>

            <!-- searching ends here-->      
            <!-- searching ends here-->      
            <!-- searching ends here-->      
            <!-- searching ends here-->      
            <!-- searching ends here-->     
            
            
    <footer class="footer bg-dark">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
            window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../js/holder.min.js"></script>
    <script src="../js/jquery-3.2.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/offcanvas.js"></script>
  </body>
</html>