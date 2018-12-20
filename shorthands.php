<?php
    $loggedIn = false;

    // if($loggedIn){
    //     echo 'You are logged in';
    // } else {
    //     echo 'You are NOT logged in';
    // }

    // echo ($loggedIn) ? 'You are logged in' : 'You are NOT logged in';
    
    $isRegistered = ($loggedIn == true) ? true : false;
    echo $isRegistered;

    $age = 20;
    $score = 15;

    echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average': 'Exceptional'):($age > 10 ? 'Horrible':'Average'));