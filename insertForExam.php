<head>
</head>
<header>
    <link rel="stylesheet" href="/src/css/insertforexam.css">
</header>
<body class="body-design">
    <div class="ostukorvOsta">
        <form action="/sendconfirmationEmail.php">
            <div class="ostukorviToode">
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
                    $sql = "SELECT * FROM `exams` WHERE ExamId = ".$_GET['id']."";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                        }
                    } else {
                        echo "error";
                    }
                            
                    $conn->close();
                ?>
            </div>
            <div class="sendMessage">
                <div><input type="hidden" name="contact_number"></div>
                <div class="text-design"><label for="first_name" >First Name</label></div>
                <div><input type="text" id="first_name" name="first_name" required></div>
                <div class="text-design"><label for="last_name" >Last Name</label></div>
                <div><input type="text" id="last_name" name="last_name" required></div>
                <div class="text-design"><label for="age">Age</label></div>
                <div><input type="number" id="age" name="age" required></div>
                <div class="text-design"><label for="user_email">Email</label></div>
                <div><input type="email" id="user_email" name="user_email" required></div>

                <?php
                    echo '<div id="examiner_ID"><input type="hidden" name="examiner_ID" id="examiner_ID" value="'. $_GET['id'] .'""></div>';
                ?>
                    
                    
                <div class='submitSubmit'><input type="submit" name="submit" id="submit" placeholder="Submit" class="Submit"></input></div>
                </div>
            </div>
        </form>
     </div>
     <div id="menu-background-pattern"></div>
</body>