<?php
    # LOOPS - Execute code set number of times

    /*
        For
        While
        Do.. While
        Foreach
    */

    # For loop
    # @params - init, condition, inc

    for($i = 0; $i <= 10; $i++){
        echo 'Number: '.$i, PHP_EOL;
    }

    #While Loop
    # @params - condition

    $a = 0;

    while($a < 10){
        echo $a, PHP_EOL;
        $a++;
    }

    # Do...While
    # @params - condition

    $b = 0;
    // will always run atleast once
    do{
        echo $b, PHP_EOL;
        $b++;
    }while($b < 10);

?>