<?php session_start();
if (!isset($_SESSION['name'])) {
    header('Location: login.php');
} else {
    $_SESSION['name'] = $_SESSION['name'];
}
include "./config/conf.php";
echo $HTML5;
?>


<body>
<script type="text/javascript">
    let session = "<?php echo $_SESSION['name'];?>"
</script>
<script src="./js/postScript.js"></script>

    <?php
    echo $js;
    include("./templates/navbar.php");
    include("./database/postDAO.php");
    $data = getAllPosts();
    ?>

    <div class="container" style="margin-top: 20px">
        <div class="writePost">
            <form method="POST" action="./controllers/postController.php">
                <h2>Say something to the community!</h2>
                <textarea name="text" class="form-control" id="postInput" rows="3">What's on your heart <?php echo $_SESSION['name']; ?>?</textarea>
                <input name="email" type="hidden" value="<?php echo $_SESSION['name']; ?>">
                <input type="hidden" name="method" value="insert">
                <button type="submit" class="btn btn-primary" style="margin-top:5px; margin-bottom: 10px">Submit</button>
            </form>
        </div>
        <?php
        foreach ($data as $post) {
            echo "
            <div class='media' style='width: 100%; margin-bottom:10px'>
                <img src='./img/persona.jpg' class=align-self-start mr-3' style='width:100px';>
                    <div class=media-body style='margin-left: 20px' >
                        <h5 class=mt-0>" . $post['fname'] . "</h5>
                        <p>" . $post['text'] . "</p>
                    </div>
            </div>
            <hr>
        ";
        } ?>
    </div>
</body>




</html>