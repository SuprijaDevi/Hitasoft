<?php
    echo "Hello World!";
    echo "<pre>"; //Prints in next line
    $x = 5;
    var_dump($x); //Gives the data type

    /* Casting */
    $a = 5.5;
    $a = (int) $a;
    echo "Integer Casting: " . $a;
    echo "<br>";

    /* Math */
    echo "Pi value: " . (pi()); echo "<br>";
    echo "Random number: " . (rand()); echo "<br>";
    echo "Random num bt 10 & 50: " . (rand(10,50)); echo "<br>";

    /* Operators */
    $var1 = 10;
    $var2 = 15;
    $modulo = $var2 % $var1;
    echo "Modulo: " . $modulo; echo "<br>";

    /* If..else */
    echo "If else statement: ";
    if($var1 > $var2) {
        echo "Value 1 is greater";
    } else {
        echo "Value 2 is greater";
    }
    echo "<br>";

    /* Switch */
    switch($var1) {
        case "10":
            echo "The number is 10";
            break;
        case "15":
            echo "The number is 15";
            break;
        case "20":
            echo "The number is 20";
            break;
        default:
        echo "None of the above";
    } 
    echo "<br>";

    /* Loop */
    echo "For loop: ";
    for($x = 0; $x <= $var1; $x++) {
        echo  $x . " ";
    }
    echo "<br>";

    echo "Do-While loop: ";
    $x = 0;
    do {
        echo $x . " ";
        $x++;
    } while ($x < 5);
    echo "<br>";

    echo "For-each loop: ";
    $name = array("name1", "name2", "name3");
    foreach($name as $x) {
        echo $x . " ";
    }
    echo "<br>";

    /* Function */
    function message() {
        echo "Hellooo Worlldd !!";
    }
    message();

?>