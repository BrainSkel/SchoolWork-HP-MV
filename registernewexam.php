<?php include "src/shared-php/header.php"?>
<?php include "src/shared-php/nav.php"?>


<?php
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        echo '
<form action="" method="post">
    <label>Insert date> <input type="date" name="ExamTime">
    <input type="hidden" name="Avaible" value='.FALSE.'>
    <input type="hidden" name="UserId" value='.$_SESSION["UserId"].'>
</form>
        ';

    }

?>
