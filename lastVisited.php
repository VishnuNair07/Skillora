<?php
date_default_timezone_set('Asia/Kolkata');

    $present_time = date("Y-m-d H:i:s");
    $expiry = 60*24*60*60 + time();


    setcookie("Lastvisit" , $present_time , $expiry);

    if(isset($_COOKIE["Lastvisit"])){
        echo "cookie has been set<br>";
        echo "The present time of the system is <br>";
        echo $present_time;
        echo "<br>Last Visited time and date is <br>";
        echo $_COOKIE["Lastvisit"];
    }
    else{
        echo " You have got some old cookies";
    }

?>