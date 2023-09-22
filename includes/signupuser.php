<?php

if (isset($_POST["submit"])) {

    $username = $_POST["uname"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["repwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (Emptyinputsignup($email, $username, $pwd, $pwdrepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");

        exit();
    }
    if (invalidUid($username) !== false) {
        header("location: ../signup.php?error=invalidUid");
        exit();
    }
    if (invalidemail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (pwdmatch($pwd, $pwdrepeat) !== false) {
        header("location: ../signup.php?error=pwdnotmatch");
        exit();
    }
    if (userexists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }
    $date = date("Y/m/d");
    createUser($conn, $email, $username, $pwd, $date);

} else {
    header("location: ../signup.php?error=notaces");
    exit();
}