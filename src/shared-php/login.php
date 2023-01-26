<?php
    include_once './src/shared-php/nav.php';
?>


<html>
    <body>
    <?php
        $message = '';
        if(isset($_POST['LoginButton'])) {
            $Email = $_POST['LoginEmail'];
            $Psw = $_POST['LoginPsw'];
            session_destroy();
            session_start();

            $mysqli = new mysqli("localhost", "root", "", "examsdb");
            $query = "SELECT * FROM users WHERE Email='$Email' AND Psw='$Psw'";
            $result = $mysqli->query($query);
            if ($result->num_rows > 0) {
                // details match a record in the database
                echo "Welcome back!";
                $sessionid = session_id();
                $_SESSION["LoginEmail"] = $Email;
                @$_SESSION["logged_in"] = true;


                //get user info

                $conn = new mysqli("localhost", "root", "", "examsdb");
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM users where Email='$Email'";
                $result = $conn->query($sql);
            
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $_SESSION["UserId"] = $row["Id"];
                }
                } else {
                echo "0 results";
                }
                $conn->close();

              
            


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