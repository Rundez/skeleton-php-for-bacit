<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//API call
//if ($_GET['users']) {
//  getUsers();
//}
//userLogin("m.ruud93@gmail.com", 12346);

function addUser($firstname, $lastname, $username, $userPassword)
{
  include "../config/conf.php";

  $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // prepare and bind
  $stmt = $conn->prepare("INSERT INTO users (fname, lname, password, email) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $firstname, $lastname, $username, $userPassword);
  // set parameters and execute
  $stmt->execute();
  $stmt->close();
  $conn->close();
}

function getUsers()
{
  include "../config/conf.php";

  $dsn = "mysql:host=$servername;dbname=$dbName";

  $pdo = new PDO($dsn, $dbUsername, $dbPassword);
  $stmt = $pdo->query("select * from users");


  $row = $stmt->fetchAll();
  $data = json_encode($row);
  echo $data;
}

function userLogin($email, $password){
  include "../config/conf.php";

  $dsn = "mysql:host=$servername;dbname=$dbName";
  $pdo = new PDO($dsn, $dbUsername, $dbPassword);
  $stmt = $pdo->query("select * from users where email='$email' AND password='$password'");

  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
  // Returns true if a row with the email and password matches
  return (count($result) == 1 ? true : false);
}
