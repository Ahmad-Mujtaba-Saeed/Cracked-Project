<?php
session_start();
?>
<?php

if (isset($_COOKIE['uname']) && isset($_COOKIE['pwd'])) {
  // Automatically log the user in
  $username = $_COOKIE['uname'];
  $pwd = $_COOKIE['pwd'];

  // Authenticate the user with the provided credentials
}
$time = time();
require_once 'includes/dbh.inc.php';

require_once 'chatman/php/data2.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <title>cracked</title>
  <link rel="stylesheet" href="index.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
</head>

<body style="background-color: #1a1a1a">
  <nav class="navbar navbar-expand-lg" style="background-color: #1a1a1a">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php" style="color: aliceblue">Navbar</a>

      <?php
      if (isset($_SESSION["usersid"])) {

        if ($msgseen == 0) {
          echo '
        
  <button  class="navbar-toggler" type="button" data-bs-toggle="collapse"
  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
  aria-label="Toggle navigation">
  <img src="imgs/down-chevron.png" width="25px">
  <img src="imgs/record12.png" style="margin-top:-20px; margin-right:-8px; width:10px; "; >
  </button>';
        } else {
          echo '
        
  <button  class="navbar-toggler" type="button" data-bs-toggle="collapse"
  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
  aria-label="Toggle navigation">
  <img src="imgs/down-chevron.png" width="25px">
 
  </button>';
        }
        echo '
        
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" style="color: aliceblue" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="account.php" style="color: aliceblue">Account info</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#" style="color: aliceblue">Upgrade plan</a>
      </li>
      ';
        if ($msgseen == 0) {
          echo '
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
          style="color: aliceblue">
          Inbox
          <img src="imgs/record12.png" style=" width:10px; "; >
        </a>
        <ul class="dropdown-menu" style="background: #000">
          <li>
            <a class="dropdown-item" href="chatman/sendmessage.php" style="color: aliceblue">Send message</a>
          </li>
          <li>
            <a class="dropdown-item" href="chatman/users.php" style="color: aliceblue">Recent messages <img src="imgs/record12.png" style=" width:10px; "; ></a>
          </li>
          <li>
            <hr class="dropdown-divider" style="color: aliceblue" />
          </li>
          <li>
            <a class="dropdown-item" href="chatman/chat.php?usersId=6" style="color: aliceblue">Contact to us</a>
          </li>
        </ul>
      </li>
        ';
        } else {
          echo '
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
            style="color: aliceblue">
            Inbox
          
          </a>
          <ul class="dropdown-menu" style="background: #000">
            <li>
              <a class="dropdown-item" href="chatman/sendmessage.php" style="color: aliceblue">Send message</a>
            </li>
            <li>
              <a class="dropdown-item" href="chatman/users.php" style="color: aliceblue">Recent messages </a>
            </li>
            <li>
              <hr class="dropdown-divider" style="color: aliceblue" />
            </li>
            <li>
              <a class="dropdown-item" href="chatman/chat.php?usersId=6" style="color: aliceblue">Contact to us</a>
            </li>
          </ul>
        </li>';
        }
        echo '
       
        <li class="nav-item">
          <a href="includes/logout.inc.php" class="nav-link" style="color: aliceblue">Logout</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search for any thread or user here" aria-label="Search" />
        <button class="btn btn-outline-success" type="submit">
          Search
        </button>
      </form>
    </div>
  </div>
        
        ';



      } else {


        echo '<a href="pakage.php"><button type="button" style="border-color:  #062403;

      background-color:#1a1a1a;
      color: aliceblue;
      border-radius: 10px;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 5px;
    padding-bottom: 5px;">Login/signup</button></a>';
      }
      ?>


  </nav>

  <img src="imgs/bg.jpg" class="bgimg" />

  <img class="mainlogo" src="imgs/logo.png" />