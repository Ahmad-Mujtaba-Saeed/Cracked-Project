<?php
session_start();





require 'includes/dbh.inc.php';
require 'includes/functions.inc.php';
$rex = $_SESSION["usersid"];

$sql = "SELECT onlinetime FROM users WHERE usersId='$rex'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $time1 = $row["onlinetime"];
        if (isset($time1)) {


            $time = $_POST['time'];

            $total = $time + $time1;







            function usertime($conn, $total, $rex)
            {

                $userid = usersId($conn, $rex);

                if ($userid !== false) {



                    $sql = "UPDATE users  SET onlinetime = '$total'  WHERE usersId = '$rex'  ";
                    if ($conn->query($sql) === TRUE) {
                        header("location: ../profile.php?error=successfullyupdated");
                        exit();
                    } else {
                        header("location: ../profile.php?error=stmtfailed");
                        exit();
                    }

                }

            }
            usertime($conn, $total, $rex);
        }

    }
} else {
    echo "0 results";
}


?>