<?php
    include_once './src/shared-php/nav.php';
?>


<html>
    <body>
    <?php
        @$_SESSION['LoginEmail'] = $_GET['LoginEmail'];
        @$_SESSION['LoginPsw'] = $_GET['LoginPsw'];
    $message = '';
        if(isset($_POST['LoginButton'])) {
            $Email = $_POST['LoginEmail'];
            $Psw = $_POST['LoginPsw'];

            $mysqli = new mysqli("localhost", "root", "", "examsdb");
            $query = "SELECT * FROM users WHERE Email='$Email' AND Psw='$Psw'";
            $result = $mysqli->query($query);
            if ($result->num_rows > 0) {
                // details match a record in the database
                echo "Welcome back!";
                session_start();
                $_SESSION["LoginEmail"] = $Email;
                $_SESSION["LoginPsw"] = $Psw;

                $LoginEmail = $_SESSION['LoginEmail'];
                $LoginPsw = $_SESSION['LoginPsw'];

                @$LoginEmail = $_SESSION['LoginEmail'];
                @$LoginPsw = $_SESSION['LoginPsw'];

            } else {
                // details do not match any records in the database
                echo "Sorry, your username or password is incorrect.";
            }
            $mysqli->close();
        }
    ?>
        <div class="login">
            <form action="" method="post">
                <?php
                echo'
                <label>Email:<input type="Email" name="LoginEmail" id="LoginEmail" value="'.@$Email.'" require autocomplete="true">';
                ?>
                <label>Enter Password:<input type="password" name="LoginPsw" id="LoginPsw" require autocomplete="true">
                <label><input type="submit" name="LoginButton" value="Login">
            </form>

        </div>

    
    </body>
</html>