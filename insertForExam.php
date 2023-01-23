<head>
</head>
<body>
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
                    $sql = "SELECT * FROM `users` WHERE id = ".$_GET['id']."";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo $row['id'];
                        }
                    } else {
                        echo "error";
                    }
                            
                    $conn->close();
                ?>
            </div>
            <div class="sendMessage">
                <div><input type="hidden" name="contact_number"></div>
                <div><label for="first_name" >First Name</label></div>
                <div><input type="text" id="first_name" name="first_name" required></div>
                <div><label for="last_name" >Last Name</label></div>
                <div><input type="text" id="last_name" name="last_name" required></div>
                <div><label for="age">Age</label></div>
                <div><input type="number" id="age" name="age" required></div>
                <div><label for="user_email">Email</label></div>
                <div><input type="email" id="user_email" name="user_email" required></div>

                <?php
                    echo '<div id="examiner_ID"><input type="hidden" name="examiner_ID" id="examiner_ID" value="'. $_GET['id'] .'""></div>';
                ?>
                    
                    
                <div class='submitSubmit'><input type="submit" name="submit" id="submit" placeholder="Submit" class="Submit"></input></div>
                </div>
            </div>
        </form>
     </div>
</body>