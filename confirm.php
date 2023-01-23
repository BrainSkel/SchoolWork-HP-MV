<html>
    <body>

        <?php

            $id = urldecode($_GET["id"]);
            $first_name = urldecode($_GET["first_name"]);
            $last_name = urldecode($_GET["last_name"]);
            $age = urldecode($_GET["age"]);
            $user_email = urldecode($_GET["user_email"]);


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
                    $sql = "INSERT INTO examinees (FirstName, LastName, Age, Email, Examiner_id) 
                    VALUES ('".$first_name."','".$last_name."','".$age."','".$user_email."','".$id."')";
                    if ($conn->query($sql) === TRUE) {
                    echo "You are registered";
                    } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                    $conn->close();
                ?>

    <body>
</html>