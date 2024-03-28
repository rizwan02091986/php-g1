<?php

include("config/one.php");

$id = $_GET['id'];
$sql = "update users set name = 'Jack' where id = $id";
$result = mysqli_query($conn , $sql);

if($result == true){
    echo "<br> Your record has been updated!";
}

else{
    echo "<br> No record has been updated!"; 
}

?>