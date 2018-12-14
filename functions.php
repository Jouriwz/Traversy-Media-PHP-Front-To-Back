<?php
    #FUNCTION - Block of code that can be repeatedly called

    /*
        Camel Case - myFunction() - variables/functions
        Lower Case - my_function() - variables/functions
        Pascal Case - MyFunction() - classes
    */

    // Create Simple Function
    function simpleFunction(){
        echo 'hello World', PHP_EOL;
    }

    // Run Simple Function
    simpleFunction();

    // Function With Params
    function sayHallo($name = 'World'){
        echo "Hello $name", PHP_EOL;
    }

    sayHallo('Joe');
    sayHallo();

    // Return Value
    function addNumbers($num1, $num2){
        return $num1 + $num2;
    }

    echo addNumbers(2,3), PHP_EOL;

    // By Reference

    $myNum = 10;

    function addFive($num){
        $num += 5;
    }

    function addTen(&$num){
        $num += 10;
    }

    addFive($myNum);
    echo "Value: $myNum", PHP_EOL;

    addTen($myNum);
    echo "Value: $myNum", PHP_EOL;
?>