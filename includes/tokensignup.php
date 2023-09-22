<?php
if (isset($_POST["submit"])) {
    $category = $_POST["category"];
    $selector = $_POST["selector"];
    $validator = $_POST["validator"];
    $trustlevel = $_POST["trustlev"];
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $password = $_POST["pwd"];

    $repassword = $_POST["repwd"];

    require 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (Emptyinputsignup($email, $uname, $password, $repassword) !== false) {
        header("location: ../signup.php?error=emptyinput");

        exit();
    }
    if (invalidUid($uname) !== false) {
        header("location: ../signup.php?error=invalidUid");
        exit();
    }
    if (invalidemail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (pwdmatch($password, $repassword) !== false) {
        header("location: ../signup.php?error=pwdnotmatch");
        exit();
    }
    if (userexists($conn, $uname, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    } else {

        if ($category == "b2b") {
            $sql = "SELECT * FROM basic WHERE key1 = ?;";


            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../signup.php?error=stmled");
                exit();
            }
            mysqli_stmt_bind_param($stmt, "s", $selector);
            mysqli_stmt_execute($stmt);

            $resultdata = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($resultdata)) {

                $tokenBin = hex2bin($validator);
                $tokencheck = password_verify($tokenBin, $row["key2"]);

                if ($tokencheck === false) {
                    header("location: ../index.php?error=needtoresubmit");

                } elseif ($tokencheck === true) {
                    $key1 = $row["key1"];
                    $id = $row["basicid"];
                    $sql = "DELETE FROM basic WHERE basicid = $id; ";
                    if ($conn->query($sql) === TRUE) {

                    } else {
                        header("location: ../index.php?error=needtoresubmit");
                    }

                    $date = date("Y/m/d");
                    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);


                    $sql = "INSERT INTO users(usersEmail,usersUid,usersPwd,registrationdate,userplan, trustlevel) VALUES(?,?,?,?,?,?);";

                    $stmt = mysqli_stmt_init($conn);

                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("location: ../signup.php?error=stmtfailed");
                        exit();
                    }
                    $date = date("Y/m/d");
                    $userplan = "Basic";
                    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ssssss", $email, $uname, $hashedpwd, $date, $userplan, $trustlevel);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);
                    header("location: ../signup.php?error=signupsuccess");
                    exit();
                }

            } else {
                $result = false;
                return $result;
            }


        } elseif ($category == "c2c") {
            $sql = "SELECT * FROM standard WHERE key1 = ?;";


            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../signup.php?error=stmled");
                exit();
            }
            mysqli_stmt_bind_param($stmt, "s", $selector);
            mysqli_stmt_execute($stmt);

            $resultdata = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($resultdata)) {

                $tokenBin = hex2bin($validator);
                $tokencheck = password_verify($tokenBin, $row["key2"]);

                if ($tokencheck === false) {
                    header("location: ../index.php?error=needtoresubmit");

                } elseif ($tokencheck === true) {
                    $key1 = $row["key1"];
                    $id = $row["standardid"];
                    $sql = "DELETE FROM standard WHERE standardid = $id; ";
                    if ($conn->query($sql) === TRUE) {

                    } else {
                        header("location: ../index.php?error=needtoresubmit");
                    }

                    $date = date("Y/m/d");
                    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);


                    $sql = "INSERT INTO users(usersEmail,usersUid,usersPwd,registrationdate,userplan, trustlevel) VALUES(?,?,?,?,?,?);";

                    $stmt = mysqli_stmt_init($conn);

                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("location: ../signup.php?error=stmtfailed");
                        exit();
                    }
                    $date = date("Y/m/d");
                    $userplan = "Standard";
                    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ssssss", $email, $uname, $hashedpwd, $date, $userplan, $trustlevel);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);
                    header("location: ../signup.php?error=signupsuccess");
                    exit();
                }

            } else {
                $result = false;
                return $result;
            }
        } else {
            $sql = "SELECT * FROM premium WHERE key1 = ?;";


            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../signup.php?error=stmled");
                exit();
            }
            mysqli_stmt_bind_param($stmt, "s", $selector);
            mysqli_stmt_execute($stmt);

            $resultdata = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($resultdata)) {

                $tokenBin = hex2bin($validator);
                $tokencheck = password_verify($tokenBin, $row["key2"]);

                if ($tokencheck === false) {
                    header("location: ../index.php?error=needtoresubmit");

                } elseif ($tokencheck === true) {
                    $key1 = $row["key1"];
                    $id = $row["premiumid"];
                    $sql = "DELETE FROM premium WHERE premiumid = $id; ";
                    if ($conn->query($sql) === TRUE) {

                    } else {
                        header("location: ../index.php?error=needtoresubmit");
                    }

                    $date = date("Y/m/d");
                    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);


                    $sql = "INSERT INTO users(usersEmail,usersUid,usersPwd,registrationdate,userplan, trustlevel) VALUES(?,?,?,?,?,?);";

                    $stmt = mysqli_stmt_init($conn);

                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("location: ../signup.php?error=stmtfailed");
                        exit();
                    }
                    $date = date("Y/m/d");
                    $userplan = "Premium";
                    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ssssss", $email, $uname, $hashedpwd, $date, $userplan, $trustlevel);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);
                    header("location: ../signup.php?error=signupsuccess");
                    exit();
                }

            } else {
                $result = false;
                return $result;
            }
        }
    }





} else {
    header("location: ../index.php?error=idk");
}