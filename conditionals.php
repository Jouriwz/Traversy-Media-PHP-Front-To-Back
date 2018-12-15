<?php
    # CONDITIONALS

    /*
        ==  Equals
        === Matches data type
        <   Less than
        >   Greater than
        <=  Less than or equals to
        >=  Greater than or equals to
        !=  Not Equals
        !== Not identical
    */

    $num = 5;

    if($num == 5){
        echo '5 passed', PHP_EOL;
    } elseif($num == 6){
        echo '6 passed', PHP_EOL;
    } else {
        echo 'did not pass', PHP_EOL;
    }

    # NESTING IF

    $num = 6;

    if ($num > 4) {
        if ($num < 10) {
            echo "$num passed", PHP_EOL;
        }
    }

    /*
        LOGICAL OPERATORS

        and &&
        or  ||
        xor
    */

    if ($num > 4 || $num < 10) {
        echo "$num passed", PHP_EOL;
    }

    # SWITCH

    $favColor = 'red';

    switch ($favColor) {
        case 'red':
            echo 'Your favorite color is red', PHP_EOL;
            break;
        case 'blue':
            echo 'Your favorite color is blue', PHP_EOL;
            break;
        case 'green':
            echo 'Your favorite color is green', PHP_EOL;
            break;
        default:
            echo 'Your favorite color is something', PHP_EOL;
    }
?>