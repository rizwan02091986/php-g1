<?php

    include("config/one.php");

    $sql = "delete from users where id = 3";
    $result = $conn->query($sql);

    if($result == true){
        echo "<br> Your record has been updated!";
    }
    else{
        echo "<br> No record has been updated!"; 
    }


?>