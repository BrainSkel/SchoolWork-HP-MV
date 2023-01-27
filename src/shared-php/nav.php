<html>
    <?php
        session_start();

    ?>
    <!--nav-->
    <nav>
        <div class="home"><button onclick="window.location.href='/#';"><img src="/src/img/logoph.png" alt="Home"></button></div>
        <div class="registerToExam"><button onclick="window.location.href='registerforexam.php';" class="registerToExam-btn">Register To Exam</button></div>
        <div class="login"><button onclick="window.location.href='/login.php';" class="login-btn">Login</button></div>
        <div class="welcome"><?php echo @$_SESSION['LoginEmail']; 
        if (@$_SESSION['logged_in']) {
            echo '<button onclick="window.location.href=`registernewexam.php`";>Add new</button>';
        }?></div>


    </nav>
</html>