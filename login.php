<?php include "src/shared-php/header.php"?>
<?php include "src/shared-php/nav.php"?>
<html>
    <!--login-->
    <div class="login">
        <h1>login</h1>

        <form action=""></form>

        
    </div>

    <!--register-->
    <div class="register">
        <h1>register</h1>

        <div class="register_db">
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "examsdb";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "INSERT INTO users (firstname, lastname, email)
                VALUES ('John', 'Doe', 'john@example.com')";
                if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();
            ?>

        </div>


    </div>

</html>