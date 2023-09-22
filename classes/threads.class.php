<?php

class threads
{
    public $thread_id;
    public $thread_type;
    public $title;
    public $description;
    public $date;
    public $start;
    public $end;

    public function recent_threads($conn, $start, $end, $id)
    {
        $sql = "SELECT threadid , threadtype FROM recentthread WHERE userid = $id ORDER BY recentid  DESC LIMIT $start, $end ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row



            while ($row = $result->fetch_assoc()) {
                $threadid = $row['threadid'];
                $threadtype = $row['threadtype'];

                $sql = "SELECT * FROM $threadtype WHERE threadid = ?;";


                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: ../signup.php?error=stmtfailed");
                    exit();
                }
                mysqli_stmt_bind_param($stmt, "s", $threadid);
                mysqli_stmt_execute($stmt);

                $resultdata = mysqli_stmt_get_result($stmt);

                if ($row = mysqli_fetch_assoc($resultdata)) {


                    $this->thread_id = $row['threadid'];
                    $this->title = $row['title'];
                    $this->description = $row['discription'];
                    $this->date = $row['threaddate'];





                }
            }
        }
    }
}