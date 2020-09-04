<?php session_start();
if(!isset($_SESSION['name'])){ 
    header('Location: login.php');
}
include "./config/conf.php";
echo $HTML5;
?>

<body>
<?php
    echo $js;
    include("./templates/navbar.php")
    ?>

    <h1>Welcome to the index page, <?php echo $_SESSION['name'] ?> </h1>
</body>
</html>