<?php

    //loops
    //for loop

    for($i=0; $i<=10; $i++){
        echo "<br> this is for loop" .$i;
    }

    for($q=1; $q<=10; $q++){
        echo "<br> 19 X $q =" .$q*19;
    }
    $tableNum = 64;
    for($w=1; $w<=10; $w++){
        echo "<br> $tableNum X $w =" .$tableNum*$w;
    }

    //while loop

    $number = 80;
    while($number<=85){
        echo "<br> this is while loop $number";
        $number++;
    }

    // do while loop
    $app = 30;
    do{
        echo "<br> this is do while loop $app";
        $app++;
    }
    while($app<=33);

?>