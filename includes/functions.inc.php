<?php

function Emptyinputsignup($email, $username, $pwd, $pwdrepeat)
{
    $result = false;

    if (empty($email) || empty($username) || empty($pwd) || empty($pwdrepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}


function invalidUid($username)
{
    $result = false;

    if (!preg_match("/^[A-Za-z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidemail($email)
{
    $result = false;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwdmatch($pwd, $pwdrepeat)
{
    $result = false;

    if ($pwd !== $pwdrepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function userexists($conn, $username, $email)
{
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultdata = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultdata)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}
function usersId($conn, $rex)
{
    $sql = "SELECT * FROM users WHERE usersId = ?;";


    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmled");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $rex);
    mysqli_stmt_execute($stmt);

    $resultdata = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultdata)) {


        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}







function usersupdate($conn, $profileid, $aboutyou, $profileintotitle, $profileitotext, $rex)
{
    $userid = usersId($conn, $rex);
    if ($userid !== false) {

        $sql = "UPDATE profiles   SET profiles_name = '$profileid',profiles_about = '$aboutyou',profiles_introtitle ='$profileintotitle',profiles_introtext='$profileitotext ' WHERE users_id = '$rex'  ";
        if ($conn->query($sql) === TRUE) {
            header("location: ../profile.php?error=successfullyupdated");
            exit();
        } else {
            header("location: ../profile.php?error=stmtfailed");
            exit();
        }





    } else {


        $sql = "INSERT INTO profiles   (profiles_name,profiles_about,profiles_introtitle,profiles_introtext,users_id) VALUES(?,?,?,?,?); ";

        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../profile.php?error=stmtfailed");
            exit();
        }


        mysqli_stmt_bind_param($stmt, "sssss", $profileid, $aboutyou, $profileintotitle, $profileitotext, $rex);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../profile.php?error=successfullyupdated");
        exit();

    }

}







function createUser($conn, $email, $username, $pwd, $date)
{
    $sql = "INSERT INTO users(usersEmail,usersUid,usersPwd ,registrationdate) VALUES(?,?,?,?);";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $email, $username, $hashedpwd, $date);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=signupsuccess");
    exit();
}
function createthread($conn, $rex, $title, $discription, $date, $get)
{
    $sql = "INSERT INTO $get(userid,title,discription,threaddate) VALUES(?,?,?,?);";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../createthread.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssss", $rex, $title, $discription, $date);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);


    header("location: ../createthread.php?error=success");
    exit();


}
function createthreadimp($conn, $rex, $title, $discription, $date, $get, $imp)
{
    $sql = "INSERT INTO $get(userid,title,discription,threaddate,impthread) VALUES(?,?,?,?,?);";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../createthread.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssss", $rex, $title, $discription, $date, $imp);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);


    header("location: ../createthread.php?error=success");
    exit();


}
function EmptyinputLogin($username, $pwd)
{
    $result = false;

    if (empty($username) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}





#create stores --------------------------->>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>


function Emptyinputcreatestore($username, $name, $email, $address, $pwd, $pwdrepeat)
{
    $result = false;

    if (empty($username) || empty($name) || empty($email) || empty($address) || empty($pwd) || empty($pwdrepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUidcreates($username)
{
    $result = false;

    if (!preg_match("/^[A-Za-z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidemailcreates($email)
{
    $result = false;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwdmatchcreates($pwd, $pwdrepeat)
{
    $result = false;

    if ($pwd !== $pwdrepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function userexistscreates($conn, $username, $email)
{
    $sql = "SELECT * FROM createstore WHERE susersname = ? OR susersemail = ?;";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../createstore.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultdata = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultdata)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUsercreates($conn, $username, $name, $email, $address, $storeintro, $pwd)
{
    $sql = "INSERT INTO createstore (sname,susersname,susersemail,saddress,sintro,suserspwd) VALUES(?,?,?,?,?,?);";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../createstore.php?error=stmtfailed");
        exit();
    }

    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssssss", $name, $username, $email, $address, $storeintro, $hashedpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../createstore.php?error=signupsuccess");
    exit();
}




function loginUserstore($conn, $username, $pwd)
{
    $uidexists = userexistscreates($conn, $username, $username);
    if ($uidexists === false) {
        header("location: ../loginstore.php?error=loginwrong");
        exit();
    }

    $pwdhashed = $uidexists["suserspwd"];
    $checkpwd = password_verify($pwd, $pwdhashed);


    if ($checkpwd === false) {
        header("location: ../loginstore.php?error=wrongpwd");
        exit();
    } else if ($checkpwd === true) {
        session_start();
        $_SESSION["userssid"] = $uidexists["usersId"];
        $_SESSION["usersuid"] = $uidexists["usersUid"];

        $_SESSION["usersemal"] = $uidexists["usersEmail"];
        header("location: ../index.php?error=finally");
        exit();

    }

}



#Upload img >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>




function usersimg1($conn, $rex)
{
    $sql = "SELECT * FROM productimg WHERE itemid = ?;";


    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stiled");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $rex);
    mysqli_stmt_execute($stmt);

    $resultdata = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultdata)) {


        return $row;
    } else {
        $result = false;
        return $result;
    }
}

function uploadimg($conn, $rex, $img_name)
{
    $sql = "INSERT INTO img (usersid , img_name) VALUES(?,?);";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../profile.php?error=stm");
        exit();
    }


    mysqli_stmt_bind_param($stmt, "ss", $rex, $img_name);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../profile.php?error=successfullyupdated");
    exit();
}

function usersimg($conn, $rex)
{
    $sql = "SELECT * FROM img WHERE usersid = ?;";


    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=sd");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $rex);
    mysqli_stmt_execute($stmt);

    $resultdata = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultdata)) {


        return $row;
    } else {
        $result = false;
        return $result;
    }
}


#--------------------------------------------->>>>>>>>>>>>>>>>>. UPload product

function uploadproducts($conn, $productname, $aboutproduct, $describeproduct, $category, $priceofproduct, $size1, $rex, $img_name1, $img_name2, $img_name3)
{
    $sql = "INSERT INTO uploadedbyadmin (userid , itemHead ,itemprise,itembody,itemdesc,itemcatg,itemSize,img1,img2,img3) VALUES(?,?,?,?,?,?,?,?,?,?);";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../uploadproduct.php?error=stmtfailed");
        exit();
    }


    mysqli_stmt_bind_param($stmt, "ssssssssss", $rex, $productname, $priceofproduct, $aboutproduct, $describeproduct, $category, $size1, $img_name1, $img_name2, $img_name3);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../uploadproduct.php?error=successfullyupdated");
    exit();

}