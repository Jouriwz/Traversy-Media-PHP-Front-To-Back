<?php
    #Array - variable that holds multiple values
    /*
        - Indexed
        - Associative
        - Multi-dimensional
    */

    // indexed
    $people = array('Kevin', 'Jeremy', 'Sara');
    $ids = array(23, 55, 12);
    $cars = ['Honda', 'Toyota', 'Ford'];
    $cars[3] = 'Chevy';
    // leaving the index empty automaticly adds it to the last position in the array
    $cars[] = 'BMW';
    
    echo $people[1], PHP_EOL;
    echo $ids[2], PHP_EOL;
    echo $cars[4], PHP_EOL;
    echo count($cars), PHP_EOL;
    // print_r is basicly echo for arrays
    print_r($cars);
    // handy debugging function
    var_dump($cars);

    // Associative arrays
    $people2 = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
    $ids2 = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];

    echo $people2['Brad'], PHP_EOL;
    echo $ids2[22], PHP_EOL;

    // add into a associative array
    $people2['Jill'] = 42;
    echo $people2['Jill'], PHP_EOL;
    print_r($people2);
    var_dump($people2);

    // Multi-Dimensional array
    $cars2 = array(
        array('Honda', 20, 10),
        array('Toyota', 30, 20),
        array('Ford', 23, 12),
    );

    echo $cars2[1][2], PHP_EOL;

?>