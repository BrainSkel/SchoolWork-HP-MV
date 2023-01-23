<?php include "src/shared-php/header.php"?>
<?php include "src/shared-php/nav.php"?>
<header>
    <link rel="stylesheet" href="/src/css/registerforexam.css">
</header>
<html>





    <body>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tooted</title>
    <link rel="icon" href="src/pictures/logo.ico">
    <link rel="stylesheet" href="./src/css/nav.css">
    <link rel="stylesheet" href="./src/css/tooted.css">

    <script src="src/js/main.js"></script>
    <script src="src/js/tooted.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    
      


</head>

<body>
    <div class="page">
        <div class="tooted" id="tooted">
                <!-- JS JSON tooted-->
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
                    $sql = "SELECT * FROM `users`";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<div class='users'><p>". $row["usersName"] ."</p>
                            <div class='expand-Details' id='expand-Details'>
                            <form action='insertForExam.php'>
                            <input type='hidden' name='id' value=".$row["id"].">
                            <input type='submit' value='Register'>
                            </form>
                            </div>";
                        }
                    } else {
                        echo "error";
                    }

                    $conn->close();
                ?>
        </div>
    </div>
</body>
</html>

        


        <script src="/src/js/registerforexam.js"></script>
    </body>
</html>