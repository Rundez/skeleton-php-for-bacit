<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

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

function getUsers($id)
{

}
