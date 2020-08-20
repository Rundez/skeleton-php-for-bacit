<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "../database/usersDAO.php";

addUser(2, "Martin", "Ruud", "Ruude", "1234");
header("Location: ../Hello.php");
