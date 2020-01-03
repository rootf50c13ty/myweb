<?php

    //including db file
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
 
    $quote=$_POST["quote"];
    $season=$_POST["season"];

    echo $season;
    echo "<br>";
    echo $uid;
    echo "<br>";
    echo "$quote";
    echo "<br>";

    $query="select * from seasons where season='$season'";
    $qv=$con->query($query);
    $row=$qv->fetch_array();
    if($row)
    {
        $seasonid=$row['sid'];
    }
    echo $seasonid;    

    //preventing sqli
    if(preg_match('/-/',$quote)||preg_match('/=/',$quote))
    {
        echo'<script type="text/javascript">alert("For security purposes,you cant use entered special character in the input field");window.location="postquote.php"</script>';
    }

    if(preg_match('/=/',$password) ||preg_match('/-/',$username))
    {
        echo'<script type="text/javascript">alert("For security purposes,you cant use entered special character in the input field");window.location="postquote.php"</script>';
    }

    //checking for dupilicate quote
    $query="select quotes from quotes";

    $res=$con->query($query);
    $flag=0;
    while($row=$res->fetch_array())
    {
       if(strcmp($quotes,$row['quotes'])==0)
           $flag=1;
    }

    if($flag==0)
    {
         //insert into table
        $query="INSERT INTO quotes (sid,uid,quotes,status) VALUES ($seasonid,$uid,'$quote',1)";

        if($con->query($query))
           echo'<script type="text/javascript">alert("Quote posted..");window.location="home.php"</script>';
        else
           echo'<script type="text/javascript">alert("Error posting");window.location="home.php"</script>';   
    }
    else
         echo'<script type="text/javascript">alert("Quote already posted");window.location="postquote.php"</script>';

?>