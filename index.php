<?php

    $name = "Hello Bhai";       //string
    $age = 50;                  //int
    $isCnic = true;             //boolean
    $marks = 80.65;             //float

    echo "$name";
    echo "<br> $age";
    echo "<br> $isCnic";
    echo "<br> $marks";

    // artihmetic operator

    $a = 20;
    $b = 30;
    $c = $a + $b;
    $d = $a - $b;
    $e = $a * $b;
    $f = $a / $b;
    $g = $a % $b;

    echo "<br> the sum of $a + $b is :" .$c;
    echo "<br> the sub of $a - $b is :" .$d;
    echo "<br> the mul of $a * $b is :" .$e;
    echo "<br> the div of $a / $b is :" .$f;
    echo "<br> the mod of $a % $b is :" .$g;
    
    // in-crement

    $apple = 70;
    // post increment
    echo "<br>" .$apple++; //70
    echo "<br>" .$apple; //71
    // pre increment
    echo "<br>" .++$apple; //72

    // post de-crement
    echo "<br>" .$apple--; //72
    echo "<br>" .$apple; //71

    // pre de-crement
    echo "<br>" .--$apple; //70

    $co = 200;
    echo "<br> $co";
    $co -=5;
    echo "<br> $co";
    $co +=40;
    echo "<br> $co";
    $co -=126;
    echo "<br> $co";
    $co +=95;
    echo "<br> $co";
    $co -=124;
    echo "<br> $co";
    $co +=116;
    echo "<br> $co";
    $co +=104;
    echo "<br> $co";

    



?>