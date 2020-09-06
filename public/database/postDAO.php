<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


//if($_POST['method'] == "addPost"){
//  echo $_POST[]
//  $created_time = $_POST['created'];
//  $text = $_POST['text'];
//  $creator = $_POST['creator'];
//  addPost($created_time, $text, $creator);
//}

function getAllPosts(){
  include "$_SERVER[DOCUMENT_ROOT]/config/conf.php";

  $dsn = "mysql:host=$servername;dbname=$dbName";

  $pdo = new PDO($dsn, $dbUsername, $dbPassword);
  $stmt = $pdo->query("SELECT 
  posts.text,
  posts.creator,
  posts.created_time,
  users.fname,
  users.id
 FROM
  users
 LEFT JOIN posts on posts.creator = users.id;");

  $data = $stmt->fetchAll();
  
  return $data;
}

function addPost($text, $creator){
  include "../config/conf.php";
  $created_time = time();
  $dsn = "mysql:host=$servername;dbname=$dbName";
  $pdo = new PDO($dsn, $dbUsername, $dbPassword);

  $sql = "INSERT INTO POSTS (created_time, text, creator) VALUES(???)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$created_time, $text, $creator]);
}