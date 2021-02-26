<?php


$conn = new mysqli('localhost','root','','cruds');

if($conn->connect_error){
    $error = $conn->connect_error;
    $n_error = $conn->connect_errno;
    header("Location: error.php?error=$error&n_error=$n_error");
}


?>