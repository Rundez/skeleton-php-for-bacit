<?php
session_start();

$email = $_POST['email'];
$password = $_POST['pw'];
$method = $_POST['method'];

if($method == "login") {
    include "../database/usersDAO.php";
    
    if(userLogin($email, $password)){ 
        $_SESSION['name'] = $email;;
        header("Location: ../index.php");
    } else { 
        header("Location: ../login.php");
    }
}