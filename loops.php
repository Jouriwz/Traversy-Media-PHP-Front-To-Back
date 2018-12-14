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

    #Foreach
    $people = array('Brad', 'Jose', 'William');

    foreach ($people as $person) {
        echo $person, PHP_EOL;
    }

    $people = array('cars', 'Jose', 'William');

    foreach ($people as $person) {
        echo $person, PHP_EOL;
    }

    #Foreach
    $people = array('Brad', 'Jose', 'William');

    foreach ($people as $person) {
        echo $person, PHP_EOL;
    }

    $cars = array('BWM' => 'Harald Krüger', 'Tesla' => 'Elon Musk', 'Ford' => 'James Hackett');

    foreach ($cars as $car => $CEO) {
        echo $CEO.': '.$car, PHP_EOL;
    }


?>