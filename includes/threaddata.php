<?php
session_start();

require_once 'dbh.inc.php';
require_once 'functions.inc.php';
if (isset($_POST["submitimp"])) {




    $title = $_POST["title"];
    $discription = $_POST["discription"];
    $get = $_POST['get'];
    $rex = $_SESSION["usersid"];

    $sql = "SELECT * FROM users WHERE usersId = ?;";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../createstore.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $rex);
    mysqli_stmt_execute($stmt);

    $resultdata = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultdata)) {
        $userplan = $row["userplan"];
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
    if ($userplan == "premium") {
        $imp = "important";
        $date = date("Y/m/d");
        $sql = "SELECT threadid FROM $get ORDER BY threadid DESC LIMIT 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $id = $row['threadid'];
                $id = (int) $id + 1;
            }
        }

        $sql = "UPDATE users SET totalposts = totalposts + 1  WHERE usersId = $rex";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo 'd';
        }


        $sql = "INSERT INTO recentthread(threadid , threadtype ,userid ) VALUES(?,?,?);";

        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signup.php?error=sed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "sss", $id, $get, $rex);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        createthreadimp($conn, $rex, $title, $discription, $date, $get, $imp);
        exit();

    } else {
        header("Location:../createthread.php?error=can'timportant");
    }


}
if (isset($_POST["submit"])) {

    $title = $_POST["title"];
    $discription = $_POST["discription"];
    $get = $_POST['get'];
    $rex = $_SESSION["usersid"];
    $date = date("Y/m/d");
    $sql = "SELECT threadid FROM $get ORDER BY threadid DESC LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['threadid'];
            $id = (int) $id + 1;
        }
    }

    $sql = "UPDATE users SET totalposts = totalposts + 1  WHERE usersId = $rex";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo 'd';
    }


    $sql = "INSERT INTO recentthread(threadid , threadtype ,userid) VALUES(?,?,?);";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=sed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $id, $get, $rex);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    createthread($conn, $rex, $title, $discription, $date, $get);
    exit();





}