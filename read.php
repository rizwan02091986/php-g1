<?php

    include("config/one.php");

    $sql = "select * from users";
    $result = $conn->query($sql);

    if($result == true){
        echo "<pre>";
        print_r($result);
        echo "</pre>";

    }
    
    if($result->num_rows)


?>