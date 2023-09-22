<?php
session_start();

require_once 'includes/dbh.inc.php';


$time = time() + 10;

$uid = $_SESSION['usersid'];

$sql = mysqli_query($conn, "UPDATE users SET login_time = $time WHERE usersId = $uid");
?>