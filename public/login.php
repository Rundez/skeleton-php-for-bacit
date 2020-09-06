<?php session_start();
include "./config/conf.php";
echo $HTML5;
?>

<body>

    <?php
    echo $js;
    include("./templates/navbar.php") 
    ?>

    <div class="container">
    <form action="./controllers/loginController.php" method="POST">
    <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" name="email" id="email" placeholder="Email">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="pw" id="exampleInputPassword1" placeholder="Password">
        </div>
        <input type="hidden" value="login" name="method">
        <button type="submit" class="btn btn-primary">Log in</button>
      </form>
    </div>
      

</body>

</html>