<?php
    # substr()
    # Returns a portion of a string

    // $output = substr('Hallo', 1, 3);
    $output = substr('Hallo', -2);
    echo $output, PHP_EOL;

    # strlen()
    # Returns the lenght of a string

    $output = strlen('Hello World');
    echo $output, PHP_EOL;

    # strpos()
    # Finds the position of the first occurence of a sub string

    $output = strpos('Hello World', 'o');
    echo $output, PHP_EOL;

    # strrpos()
    # Finds the position of the last occurence of a sub string

    $output = strrpos('Hello World', 'o');
    echo $output, PHP_EOL;

    # trim()
    # Strips whitespace

    $text = 'Hello World                           ';
    var_dump($text);

    $trimmed = trim($text);
    var_dump($trimmed);

    # strtoupper
    # Makes everything uppercase

    $output = strtoupper('hello world');
    echo $output, PHP_EOL;

    # strtolower
    # Makes everything lowercase

    $output = strtolower('HELLO WORLD');
    echo $output, PHP_EOL;

    # ucwords()
    # Capitalize every word

    $output = ucwords('hello world');
    echo $output, PHP_EOL;

    # str_replace()
    # Replace all accurences of a search string with a replacement

    $text = 'Hello World';
    # first what we are gonn search for, second what we are gonna replace it with, third the actual string we are searching
    $output = str_replace('World', 'Everyone', $text);
    echo $output, PHP_EOL;

    # is_string()
    # Check if string

    $val = 'hello';
    $output = is_string($val);

    echo $output;

    $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');

    foreach ($values as $value) {
        if(is_string($value)){
            echo "{$value} is a string", PHP_EOL;
        }
    };

    # gzcompress()
    # Compress a string

    $string = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
    Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, 
    nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. 
    Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, 
    rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. 
    Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, 
    consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus 
    viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. 
    Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.';

    $compressed = gzcompress($string);

    echo $compressed, PHP_EOL;

    $original = gzuncompress($compressed);

    echo $original, PHP_EOL;