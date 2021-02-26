<?php


$conn = new mysqli('localhost','root','','cruds');

handleConnError($conn);

function handleConnError($conn){
    if($conn->connect_error){
        $error = $conn->connect_error;
        $n_error = $conn->connect_errno;
        header("Location: ../index.php?error=$error&n_error=$n_error");
        die;
    }
    
}

function iUQuery($conn, $query){
    $conn->query($query);
    if($conn->error) {
        header("Location: index.php");
    }
}

?>