<?php

    $fruits = ["apple", "mango", "orange", "pine apple"];
    echo "<br>" .$fruits[1];

    array_push($fruits , "hello");

    // for each loop

    foreach ($fruits as $key){
        echo "<br> $key";
    }

    //associate array

    $employee = [
        "Alex" => "Web Dev",
        "Henry" => "App Dev",
        "Rossy" => "SQA"
    ];

    foreach($employee as $key => $value){
        echo "<br> $key : $value";
    }

?>