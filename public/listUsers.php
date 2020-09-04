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
        fetch("/database/usersDAO.php?users=all", {
                method: 'get',
                mode: "same-origin",
                credentials: "same-origin",
                headers: {
                    "Content-Type": "application/json"
                }
            })
            .then(response => response.json())
            .then(data => {
                console.log(data)
                let output = '<h2>Lists of Users</h2>';
                output += '<ul>';
                data.forEach((data) => {
                    output += `
                            <li>
                                ${data.fname}
                            </li>
                        `;
                });
                output += '</ul>'
                document.getElementById("list").innerHTML = output;
            })
    </script>

    <div id="container" class="container">
    <div id="list">
        
    </div>

    </div>



</body>

</html>