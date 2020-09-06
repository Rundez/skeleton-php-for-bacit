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
<form action="./controllers/registrationController.php" method="POST">
<div class="form-group">
    <label for="firstName">First name</label>
    <input type="text" class="form-control" name="fName" id="firstName">
  </div>
  <div class="form-group">
    <label for="lName">Last name</label>
    <input type="text" class="form-control" name="lName" id="exampleInputEmail1" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="pw" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>