<?php

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

    require_once '../../includes/functions.inc.php';
    if (isset($row["usersId"])) {
        $rex = $row["usersId"];

        if ($msg != 0) {
            if ($you == "Him: ") {
                require_once '../../includes/dbh.inc.php';


                $time = time() + 10;

                $uid = $_SESSION['usersid'];

                $sql = mysqli_query($conn, "UPDATE users SET seemmsg = $time WHERE usersId = $uid");

                $output .=
                    '<a style="text-decoration:none;" href="chat.php?usersId=' . $row['usersId'] . '">
    <div class="content">
    <img src="php/images/download.png" alt="defualt">
    <div class="details">
        <span>' . $row['usersUid'] . '</span>
        <p>' . $you . $msg . '</p>
    </div>
    </div>
</a>';
            } else {
                $output .= '<a style="text-decoration:none;" href="chat.php?usersId=' . $row['usersId'] . '">
    <div class="content">
    <img src="php/images/download.png" alt="defualt">
    <div class="details">
        <span>' . $row['usersUid'] . '</span>
        <p>' . $you . $msg . '</p>
    </div>
    </div>
</a>';
            }

        }

    }


}

?>