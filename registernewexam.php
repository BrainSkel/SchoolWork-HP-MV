<?php include "src/shared-php/header.php"?>
<?php include "src/shared-php/nav.php"?>


<?php
        $message = '';
        if(isset($_POST['Submit'])) {
            $ExamTime = date("Y-m-d H:i:s",strtotime($_POST['ExamTime']));
            $Avaible = $_POST['Avaible'];
            $UserId = $_POST['UserId'];


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

            $sql = "INSERT INTO exams (Available, ExamTime, UserId)
            VALUES ('".$Avaible."', '".$ExamTime."', ".$UserId.")";

            if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();


        }
            ?>



<?php
    if ($_SESSION["logged_in"]) {
        echo '
<form action="" method="post">
    <label>Insert date> <input type="datetime-local" name="ExamTime" require>
    <input type="hidden" name="Avaible" value='.TRUE.'>
    <input type="hidden" name="UserId" value='.$_SESSION["UserId"].'>
    <input type="submit" name="Submit" value="Add New">
</form>
        ';

    }

?>
