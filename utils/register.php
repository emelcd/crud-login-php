<?php include '../includes/conn.php'?>



<?php


$username = $_POST['username'];
$email = $_POST['email'];
$password = hash("sha256",$_POST['password']);



function checkUserEmail($conn, $email) {
    $sqlQ_checkEmail = "SELECT * FROM user_register WHERE email='$email'";
    $conn->query($sqlQ_checkEmail);
    if($conn->affected_rows > 0) {
        header("Location: ../index.php?error=Email");
    } 
}

checkUserEmail($conn,$email);


function insertUser($conn,$username,$email,$password){
    $sqlQ_register = "INSERT INTO cruds.user_register (username, email, passwd, creation_date) VALUES('$username', '$email', '$password', CURRENT_TIMESTAMP);";
    $conn->query($sqlQ_register);
    if($conn->error) {
        $error = $conn->error;
        header("Location: ../index.php?error=NOVALIDCHARSET");
        die;
    } 
    
}

insertUser($conn,$username,$email,$password);

header("Location: ../views/user_personal.php");




?>
