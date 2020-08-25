<?php session_start();
$_SESSION['name'] = 'Martin';
include "./config/conf.php";
echo $HTML5;
?>


<body>
    <?php
    echo $js;
    include("./templates/navbar.php")
    ?>

    <h1>Your info..</h1>
    <?php
    $user =  $_POST['email'];
    $pw = $_POST['pw'];
    ?>


    <div class="card-group">
        <div class="card" style="width: 18rem;">
            <img class="card border-primary mb-3" src="https://www.t-nation.com/system/publishing/articles/10003985/original/Build-Bigger-Biceps-With-Isometrics-new.png?1476721195" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php echo $user ?></h5>
                <p class="card-text"><?php echo $pw ?></p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img class="card border-primary mb-3" src="https://www.t-nation.com/system/publishing/articles/10003985/original/Build-Bigger-Biceps-With-Isometrics-new.png?1476721195" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php echo $user ?></h5>
                <p class="card-text"><?php echo $pw ?></p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img class="card border-primary mb-3" src="https://www.t-nation.com/system/publishing/articles/10003985/original/Build-Bigger-Biceps-With-Isometrics-new.png?1476721195" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php echo $user ?></h5>
                <p class="card-text"><?php echo $pw ?></p>
            </div>
        </div>

    </div>

    </html>
</body>

</html>