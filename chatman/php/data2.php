<?php
if (isset($_SESSION['usersid'])) {


    include_once "config.php";
    $outgoing_id = $_SESSION['usersid'];
    $sql = "SELECT * FROM users WHERE NOT usersId = {$outgoing_id} ORDER BY usersId DESC";
    $query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($query)) {
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['usersId']}
                OR outgoing_msg_id = {$row['usersId']}) AND (outgoing_msg_id = {$outgoing_id} 
                OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result = "0";
        (strlen($result) > 28) ? $msg = substr($result, 0, 28) . '...' : $msg = $result;
        if (isset($row2['outgoing_msg_id'])) {
            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "Him: ";

        } else {
            $you = "";

        }


        ($outgoing_id == $row['usersId']) ? $hid_me = "hide" : $hid_me = "";


        if (isset($row["usersId"])) {
            $rex = $row["usersId"];
            $msgseen = 1;
            if ($msg != 0) {
                if ($you == "Him: ") {

                    $sql = "SELECT * FROM messages WHERE msg = ?;";

                    $stmt = mysqli_stmt_init($conn);

                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("location: ../signup.php?error=stmtfailed");
                        exit();
                    }
                    mysqli_stmt_bind_param($stmt, "s", $msg);
                    mysqli_stmt_execute($stmt);

                    $resultdata = mysqli_stmt_get_result($stmt);

                    if ($row = mysqli_fetch_assoc($resultdata)) {
                        $msgseen = $row['seem'];

                    } else {
                        $result = false;
                        return $result;
                    }
                    ;
                } else {
                    $msgseen = 1;
                }

            }

        }


    }
}
?>