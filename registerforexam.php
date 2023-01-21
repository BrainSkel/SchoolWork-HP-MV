<?php include "src/shared-php/header.php"?>
<?php include "src/shared-php/nav.php"?>
<header>
    <link rel="stylesheet" href="/src/css/registerforexam.css">
</header>
<html>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
            // https://dashboard.emailjs.com/admin/account
            emailjs.init('lEAdkDCNY6I3ItRtV');
        })();
    </script>
    <script type="text/javascript">
        function onSubmit(token) {
            document.getElementById("demo-form").submit();
        }
        window.onload = function() {
            
            
            document.getElementById('contact-form').addEventListener('submit', function(event) {

                window.location.href = "/tooted.php";
                event.preventDefault();
                // generate a five digit number for the contact_number variable
                this.contact_number.value = Math.random() * 100000 | 0;
                // these IDs from the previous steps
                emailjs.sendForm('service_axgu08k', 'template_2g75kww', this)
                    .then(function() {
                        console.log('SUCCESS!');
                    }, function(error) {
                        console.log('FAILED...', error);
                    });
            });
        }
    </script>





    <body>
        <div class="register-page">
            <h1>Register</h1>

            <div class="Exammer">
                <h2>Choose exammer</h2>
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
                            echo "<div class='users'><p>". $row["FirstName"]  . $row["LastName"] ."</p><div class='expand-Details' id='expand-Details'><button onclick='showDetails(`".$row["id"]."`)'><p id='DetialsButtonText".$row["id"]."'>></p></div></button></div>";
                        }
                    } else {
                        echo "error";
                    }


                                
                    $conn->close();
                ?>
                        
                
            </div>
            <div class="DetailsMenu">
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
                            echo "<div class='Details' id='Details".$row["id"]."'><h2>Enter Details</h2><div class='sendMessage'><div><input type='hidden' name='contact_number'></div><div><label for='user_name' >Nimi</label></div><div><input type='text' id='user_name' name='user_name' required></div><div><label for='user_email'>Email</label></div><div><input type='email' id='user_email' name='user_email' required></div><div id='tellimus_ID'><input type='hidden' name='user_ID' id='user_ID' value=''></div><div class='g-recaptcha' data-sitekey='6Ld7i9MiAAAAAA-_bR5_J3gVxXHXd7fKgu4L1Uxr'></div><div class='submitSubmit'><input type='submit' name='submit' id='submit' placeholder='Submit' class='Submit'></input></div></div></div>";
                        }
                    } else {
                        echo "error";
                    }


                                
                    $conn->close();

                ?>
            </div>
        

            <!-- <div class="Details" id="Details">
                <h2>Enter Details</h2>
                <div class="sendMessage">
                        <div><input type="hidden" name="contact_number"></div>
                        <div><label for="user_name" >Nimi</label></div>
                        <div><input type="text" id="user_name" name="user_name" required></div>
                        <div><label for="user_email">Email</label></div>
                        <div><input type="email" id="user_email" name="user_email" required></div>
                        <?php
                        echo '<div id="tellimus_ID"><input type="hidden" name="user_ID" id="user_ID" value="""></div>'
                        ?>
                Google recaptcha
                <div class="g-recaptcha" data-sitekey="6Ld7i9MiAAAAAA-_bR5_J3gVxXHXd7fKgu4L1Uxr"></div>
                            
                <div class='submitSubmit'><input type="submit" name="submit" id="submit" placeholder="Submit" class="Submit"></input></div>



            </div> -->
        </div>
        <script src="/src/js/registerforexam.js"></script>
    </body>
</html>