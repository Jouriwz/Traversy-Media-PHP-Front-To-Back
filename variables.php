<?php
    // single line comment
    # Single line comment
    /*
        multiline
        comment
    */
    echo 'Hello World';
    echo PHP_EOL;
    print 'Hello World';
    echo PHP_EOL;

    #VARIABLES
    /*
        - Prefix $
        - Starts with a letter or an underscore
        - Only letters, numbers, and underscores
        - Case sensitive
    */

    #DATA TYPES
    /*
        String
        Integers
        Floats
        Booleans (True or false)
        Arrays
        Objects
        NULL
        Resource
    */

    $output = 'Hello World';
    echo $output, PHP_EOL;

    $num1 = 4;
    $num2 = 10;
    $sum = $num1 + $num2;
    echo $sum, PHP_EOL;

    $string1 = 'Hello';
    $string2 = 'World';
    $greeting = $string1 .' '. $string2.'!';
    echo $greeting, PHP_EOL;

    // double quotes parses strings
    $greeting2 = "$string1 $string2";
    echo $greeting2, PHP_EOL;

    $string3 = 'They\'re Here';
    echo $string3, PHP_EOL;

    $float1 = 4.4;
    $bool1 = true;

    // add third parameter 'true' to make it case insensitive
    define('GREETING', 'Hello Everyone');
    echo GREETING, PHP_EOL;
?>