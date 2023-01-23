<?php
    include_once 'header.php';
?>
<h2>Log In</h2>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username/Email..." require>
        <input type="password" name="pwd" placeholder="Password..." require>
        <button type="submit" name="submit">Log In</button>
    </form>
    </div>
    <?php 
        if(isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields!</p>";
            }
            if ($_GET["error"] == "wronglogin") {
                echo "<p>Incorrect login information!</p>";
            }
        }
    ?>
    </body>
</html>