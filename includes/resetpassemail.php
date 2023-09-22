<?php
if (isset($_POST["reset-request"])) {
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "localhost/projc/reset.php?selector=" . $selector . "&validator=" . bin2hex($token);

    $expire = date("U") + 1800;

    require 'dbh.inc.php';
    require '../PHPMailer/index.php';

    $user_email = $_POST["email"];
    $sql = "DELETE FROM pwdreset WHERE 	pwdreset_email=?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../resetpass.php?error=STmtfailed");

    } else {
        mysqli_stmt_bind_param($stmt, "s", $user_email);
        mysqli_stmt_execute($stmt);

    }
    $sql = "INSERT INTO pwdreset (pwdreset_email,pwdreset_selector,pwdreset_token,pwdreset_expires)  VALUE(?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../resetpass.php?error=STmtfailed");

    } else {
        $hashedtoken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $user_email, $selector, $hashedtoken, $expire);
        mysqli_stmt_execute($stmt);




    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);


    $to = $user_email;

    $subject = 'Reset your password! by the given OTP';

    $message = '<p>We recieved a password reset request. Link to reset your password is given below!
    <br>
    If u did not make this request you can ignore this email.
    </P>
    <br>';

    $message .= '<p>Here is your password reset link:  <br>';

    $message .= '<a href="' . $url . '" style="color : #fff;">
    <div class="button1"
     style="
     display: inline-block;
    border-radius: 6px;
    background-color: #3679e3;
    border: none;

    text-align: center;
    font-size: 16px;
    padding: 7px;
    width: 140px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 4px;"> CLick me</div></a></P>


   
    ';
    $message .= '<br>
    OR click on this link : <br>
    <a href="' . $url . '">' . $url . '</a>
    ';
    $header = "From: Thetopbloggers <ahmadmujtabap72@gmail.com> \r\n";
    $header .= "Reply-To: ahmadmujtabap72@gmail.com \r\n";
    $header .= "Content-type: text/html\r\n";


    mmail($to, $subject, $message, $header);
    header("location: ../forgetpass.html?error=succes");
} else {
    header("location: ../index.php?error=idk");

}