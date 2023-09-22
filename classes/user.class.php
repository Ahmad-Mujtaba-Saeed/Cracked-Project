<?php
class user
{
    public $user_id;
    public $uname;
    public $email;
    public $user_plan;
    public $likes;
    public $reputation;
    public $trust_level;
    public $user_status;
    public $warning_level;
    public $followers;
    public $online_time;
    public $total_posts;
    public $registration_date;


    public function user_info($user_uid, $conn)
    {
        $sql = "SELECT * FROM users WHERE usersUid = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s", $user_uid);
        mysqli_stmt_execute($stmt);
        $result_data = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result_data)) {

            $time = time();
            if ($row['login_time'] > $time) {
                $this->user_status = 1;
            } else {
                $this->user_status = 0;
            }
            $this->user_id = $row['usersId'];
            $this->uname = $row['usersUid'];
            $this->user_plan = $row['userplan'];
            $this->likes = $row['likes'];
            $this->reputation = $row['reputaion'];
            $this->trust_level = $row['trustlevel'];
            $this->warning_level = $row['warninglevel'];
            $this->followers = $row['followers'];
            $this->online_time = $row['onlinetime'];
            $this->registration_date = $row['registrationdate'];
            $this->total_posts = $row['totalposts'];

        }
    }
}