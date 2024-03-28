<?php

include("config/one.php");

$id = $_GET['id'];
$sql = "delete from users where id = $id";
$result = mysqli_query($conn , $sql);

if($result == true){
    echo "<br> Your record has been Delete!";
}
else{
    echo "<br> No record has been Delete!";
}

?>