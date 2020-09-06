<?php
include "../database/postDAO.php";

switch ($_POST["method"]) {
    case "getAllPosts":
        getAllPosts();
    case "insert":
        $email = $_POST["email"];
        $text = $_POST["text"];
        addPost($text, $email);
        header("Location: ../index.php");
}