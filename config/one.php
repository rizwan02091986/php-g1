<?php

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "php-g1";

    $conn = new mysqli($serverName, $userName, $password, $dbName);

    if($conn){
        echo "<br> Connection Successful!";
    }
    else{
        echo "<br> Connection Failed!";
    }

?>