<?php

$keyrange = 10;
$table = "premium";
$CATEGORY = "p2p";

require 'dbh.inc.php';
$i = 0;
for ($i = 0; $i <= $keyrange; $i++) {
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);
    $sql = "INSERT INTO $table(key1,key2) VALUES(?,?);";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    $hashedtoken = password_hash($token, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ss", $selector, $hashedtoken);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    echo 'localhost/projc/signup.php?selector=' . $selector . '&validator=' . bin2hex($token) . '&chategory=' . $CATEGORY . ',';

}



?>