<?php
    echo date('d'), PHP_EOL; // Day
    echo date('m'), PHP_EOL; // Month
    echo date('y'), PHP_EOL; // Year
    echo PHP_EOL;
    echo date('l'), PHP_EOL; // Day of the week
    echo PHP_EOL;
    echo date('d-m-y'), PHP_EOL; // Day/Month/Year
    echo PHP_EOL;
    echo date('h'), PHP_EOL; // Hour
    echo date('i'), PHP_EOL; // Minute
    echo date('s'), PHP_EOL; // Seconds
    echo date('a'), PHP_EOL; // AM or PM
    echo PHP_EOL;
    // Set Time Zone
    date_default_timezone_set('Europe/Amsterdam');
    echo date('h:i:sa'), PHP_EOL; // Hour Minute Second PM or AM

    /*
        Unix timestamp is a long integer containing the number 
        of seconds between the Unix Epoch (january 1 1970 00:00:00
        GMT and the time specified.)
    */

    $timestamp = mktime(10,14,54,9,10,1981);
    echo $timestamp, PHP_EOL;

    echo date('d-m-y h:i:sa', $timestamp), PHP_EOL;

    $timestamp2 = strtotime('7:00pm March 22 2016');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Sunday');
    $timestamp5 = strtotime('2+ Days');

    echo $timestamp2, PHP_EOL;

    echo date('d-m-y h:i:sa', $timestamp5);

    // php.net/manual/en/function.date.php link for documentation date
?>