<?php
if(isset($_POST["reset-password-submit"])){
    $selector = $_POST["selector"];
    $validator = $_POST["validator"];
    $password = $_POST["pwd"];
    $repassword = $_POST["repwd"];

    if( empty($password)|| empty($repassword)){

        header("location: ../create-new-pwd.php?error=empty");
    }
    elseif($password !== $repassword){
        header("location: ../create-new-pwd.php?error=pwdnotmatch");
    }


    $currentdate = date("U");
    require 'dbh.inc.php';


    $sql = "SELECT * FROM pwdreset WHERE pwdreset_selector=? AND pwdreset_expires >=  $currentdate ";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../resetpass.php?error=STmtfailed");
    
    }
    else{
        mysqli_stmt_bind_param($stmt,"s",$selector);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if(!$row = mysqli_fetch_assoc($result)){
            header("location: ../resetpass.php?error=needtoresubmit");
        }
        else{
            $tokenBin = hex2bin($validator);
            $tokencheck = password_verify($tokenBin, $row["pwdreset_token"]);

            if($tokencheck === false){
header("location: ../resetpass.php?error=needtoresubmit");

            }
            elseif($tokencheck === true){
                $tokenEmail = $row["pwdreset_email"];
                $sql = "SELECT * FROM users WHERE usersEmail=?;";
                 $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../resetpass.php?error=STmtfailed");
    
    }
   else{
     mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
        mysqli_stmt_execute($stmt);

      $result = mysqli_stmt_get_result($stmt);

        if(!$row = mysqli_fetch_assoc($result)){
            header("location: ../resetpass.php?error=resubmit");
        } 
        else {
                        $sql = "UPDATE users SET usersPwd=? WHERE usersEmail=?";
                                       $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../resetpass.php?error=STmtfailed");

                        } else {
                            $newhashed = password_hash($password, PASSWORD_DEFAULT);

                            mysqli_stmt_bind_param($stmt, "ss", $newhashed, $tokenEmail);
                            mysqli_stmt_execute($stmt);


                            $sql = "DELETE FROM pwdreset WHERE pwdreset_email=?";
                            $stmt = mysqli_stmt_init($conn);

                            if (!mysqli_stmt_prepare($stmt, $sql)) {
                                header("location: ../resetpass.php?error=STmtfailed");

                            } else {



                                mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                                mysqli_stmt_execute($stmt);

                                header("location: ../signup.php?error=passwordupdated");

                            }
                        }
        }

}

            }
        }
    }
}

else{
    header("location: ../index.php?error=idk");
    
}