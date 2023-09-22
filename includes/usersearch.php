<?php

if (isset($_POST['username'])) {
    $uname = $_POST['username'];

    require 'dbh.inc.php';
    require 'functions.inc.php';
    $uidexists = userexists($conn, $uname, $uname);

    $id = $uidexists['usersId'];

    header("Location:../chatman/chat.php?usersId=$id");
}