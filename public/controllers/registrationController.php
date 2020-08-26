<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "../database/usersDAO.php";

$fName = $_POST['fName'];
$lName = $_POST['lName'];
$email = $_POST['email'];
$pass = $_POST['pw'];



addUser($fName, $lName, $email, $pass);
session_start();
$_SESSION['name'] = $fName;
header("Location: ../index.php");
