<?php
    include_once 'header.php';
?>
    <h2>Sign up</h2>
    <form action="includes/signup.inc.php" method="post">
        <input required type="text" name="name" placeholder="Full name...">
        <input required type="text" name="email" placeholder="Email...">
        <input required type="text" name="uid" placeholder="Username...">
        <input required type="password" name="pwd" placeholder="Password...">
        <input required type="password" name="pwdrepeat" placeholder="Retype password...">
        <button type="submit" name="submit">Sign Up</button>
    </form>
    </div>
    
    <?php 
        if(isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields!</p>";
            }
            if ($_GET["error"] == "invaliduid") {
                echo "<p>Choose a proper username!</p>";
            }
            if ($_GET["error"] == "invalidemail") {
                echo "<p>Enter valid email address!</p>";
            }
            if ($_GET["error"] == "passwordMismatch") {
                echo "<p>Passwords do not match!</p>";
            }
            if ($_GET["error"] == "uidTaken") {
                echo "<p>User with same username or email already exists!</p>";
            }
            if ($_GET["error"] == "stmtfailed") {
                echo "<p>Something went wrong! Try again later.</p>";
            }
            if ($_GET["error"] == "none") {
                echo "<p>Successfully registred.</p>";
            }
        }
    ?>

    </body>
</html>