<?php
    include_once './src/shared-php/nav.php';
?>


<html>
    <body>
    <?php
    $message = '';
        if(isset($_POST['SubmitButton'])) {

            $FirstName = $_POST['FirstName'];
            $LastName = $_POST['LastName'];
            $Email = $_POST['Email'];
            $Psw = $_POST['Psw'];

            $message = $FirstName;


            $mysqli = new mysqli("localhost", "root", "", "examsdb");
            $query = "SELECT * FROM users WHERE Email='$Email'";
            $result = $mysqli->query($query);
            if ($result->num_rows > 0) {

                echo "This email is already taken";
            } else {

                $conn = new mysqli("localhost", "root", "", "examsdb");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "INSERT INTO users (FirstName, LastName, Email, Psw) VALUES ('".$FirstName."','".$LastName."','".$Email."','".$Psw."')";
                if ($conn->query($sql) === TRUE) {
                    echo "You account has been created successfully";
                    header( 'location:login.php' ) ;
                  } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                  }
                  
                $conn->close();
            }
            $mysqli->close();
        }
    ?>
        <div class="signup">
            <form action="" method="post">
                <?php
                echo'
                <label>First Name:<input type="text" name="FirstName" id="FirstName" value ="'.@$FirstName.'" require autocomplete="false">
                <label>Last Name:<input type="text" name="LastName" id="LastName" value="'.@$LastName.'" require autocomplete="false">
                <label>Email:<input type="Email" name="Email" id="Email" value="'.@$Email.'" require autocomplete="true">
                ';
                ?>
                <label>Password:<input type="password" name="Psw" id="psw" require autocomplete="false">
                <label><input type="submit" name="SubmitButton" value="Register">
            </form>

        </div>

    
    </body>
</html>