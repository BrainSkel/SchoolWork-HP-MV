<?php

if(isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    if (emptyInputSignup($name, $email, $uid, $pwd, $pwdrepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($uid) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (passwordMatch($pwd, $pwdrepeat) !== false) {
        header("location: ../signup.php?error=passwordMismatch");
        exit();
    }
    if (uidTaken($conn, $uid, $email) !== false) {
        header("location: ../signup.php?error=uidTaken");
        exit();
    }

    createUser($conn, $name, $email, $uid, $pwd, $pwdrepeat);

} else {
    header("location: ../signup.php");
    exit();
}