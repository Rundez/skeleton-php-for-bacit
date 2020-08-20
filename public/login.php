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

    <div class="container">
    <form action="Hello.php" method="POST">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">Put in in..</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="pw" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" name="checkbox" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Log in</button>
      </form>
    </div>
      

</body>

</html>