<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>
    <?php include("./templates/navbar.php") ?>

    <h1>Your info..</h1>
    <?php
    $user =  $_POST['email'];
    $pw = $_POST['pw'];

    include("./config/conf.php");

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
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