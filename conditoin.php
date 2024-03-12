<?php

    $age = 20;
    $isCnic = false;
    if($age>=18){
        echo "<br> you can drive a car";
        if($isCnic == true){
            echo "<br> you can take my car";
        }
        else{
            echo "<br> you should purchase your own car";
        }
    }
    else{
        echo "<br> you can't drive a car";
    }

    for($i=0; $i<=10; $i++){
        if($i%2==0){
            echo "<br> this $i is even";
        }
        else{
            echo "<br> this $i is odd";
        }
    }

?>