<?php session_start();
include "./config/conf.php";
echo $HTML5;
?>

<body>
    <!-- Javascript bootstrap files and navbar element -->
    <?php echo $js;
    include("./templates/navbar.php") ?>
    <!-- Javascript bootstrap files and navbar element -->

    <script>
        fetch("/database/usersDAO.php?users=all")
        .then(response => response.json())
        .then(data => console.log(data));
           
    </script>



</body>

</html>