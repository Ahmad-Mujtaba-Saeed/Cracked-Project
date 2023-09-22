<?php
session_start();

if (isset($_POST["submit"])) {

    $username = $_POST["uname"];
    $pwd = $_POST["pwd"];


    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (EmptyinputLogin($username, $pwd) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }


    $uidexists = userexists($conn, $username, $username);
    if ($uidexists === false) {
        header("location: ../signup.php?error=loginwrong");
        exit();
    }
    $pass = $pwd;
    $pwdhashed = $uidexists["usersPwd"];
    $checkpwd = password_verify($pwd, $pwdhashed);


    if ($checkpwd === false) {
        header("location: ../signup.php?error=wrongpwd");
        exit();
    } else if ($checkpwd === true) {

        $_SESSION["usersid"] = $uidexists["usersId"];
        $_SESSION["useruid"] = $uidexists["usersUid"];
        $_SESSION["userplan"] = $uidexists["userplan"];

        if (isset($_POST["rememberme"])) {

            setcookie('uname', $username, time() + 60 * 60 * 24 * 365, "/");
            setcookie('pwd', $pass, time() + 60 * 60 * 24 * 365, "/");
            header("location: ../index.php?error=cookie");
            exit();
        } else {
            header("location: ../index.php?error=nocoke");
            exit();
        }

    }


} else {
    header("location: ../signup.php");
    exit();
}