<?php

    include("config/one.php");

    $sql = "update users set name = 'jhon' where id = 3";
    $result = $conn->query($sql);

    if($result == true){
        echo "<br> Your record has been updated!";
    }
    else{
        echo "<br> No record has been updated!"; 
    }


?>