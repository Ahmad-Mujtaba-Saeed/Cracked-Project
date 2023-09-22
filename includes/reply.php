<?php
Session_start();
if (isset($_POST['submit'])) {

    $reply = $_POST['reply'];
    $threadid = $_POST['threadid'];
    $type = $_POST['type'];
    $userid = $_POST['userid'];
    require 'dbh.inc.php';


    $sql = "INSERT INTO reply(reply,type,userid,threadid) VALUES(?,?,?,?);";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }


    mysqli_stmt_bind_param($stmt, "ssss", $reply, $type, $userid, $threadid);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../threads.php?error=" . $threadid . "&threadplace=" . $type . "&errors=ok");
    exit();

} else {
    header("Location:../index.php?error=reply");
}