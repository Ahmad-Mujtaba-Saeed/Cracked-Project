<?php
session_start();
include_once "php/config.php";
if (!isset($_SESSION["usersid"])) {
  header("location: login.php");
}
?>
<?php include_once "header.php"; ?>

<body>

  <nav class="navbar navbar-expand-lg" style="background-color: #1a1a1a">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.php" style="color: aliceblue">Navbar</a>

      <?php
      if (isset($_SESSION["usersid"])) {


        echo '<button  class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <img src="../imgs/down-chevron.png" width="25px">
        </button>
        
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" style="color: aliceblue" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../account.php" style="color: aliceblue">Account info</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#" style="color: aliceblue">Upgrade plan</a>
      </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
            style="color: aliceblue">
            Inbox
          </a>
          <ul class="dropdown-menu" style="background: #000">
            <li>
              <a class="dropdown-item" href="sendmessage.php" style="color: aliceblue">Send message</a>
            </li>
            <li>
              <a class="dropdown-item" href="users.php" style="color: aliceblue">Recent messages</a>
            </li>
            <li>
              <hr class="dropdown-divider" style="color: aliceblue" />
            </li>
            <li>
              <a class="dropdown-item" href="chat.php?usersId=6" style="color: aliceblue">Contact to us</a>
            </li>
          </ul>
        </li>
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


        echo '<a href="signup.php"><button type="button" style="border-color:  #062403;

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

  <img src="../imgs/bg.jpg" class="bgimg" /><img class="mainlogo" src="../imgs/logo.png" />

  <div class="body">

    <div class="wrapper">

      <div id="second2" class="mainsection1"
        style="border-radius:20px; margin-top:10px; margin-left:10px; padding-bottom: -30px;  z-index: 2 !important;">
        <form action="../includes/usersearch.php" method="POST">
          <p
            style=" color: aliceblue; margin-left: 10px; font-size: 16px; font-weight: 300; margin-bottom: -10px; padding-top: 10px;">
            Enter username / Email to send message:</p>
          <input class="subject" name="username" style='border-radius:7px;'><br><br>

          <button class="post1" type="submit" name="submit" style='border-radius:7px;'>Search User</button>
        </form>

      </div>
      <section class="users">
        <header>
          <div class="content">
            <?php
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE usersId = {$_SESSION['usersid']}");
            if (mysqli_num_rows($sql) > 0) {
              $row = mysqli_fetch_assoc($sql);
            }
            ?>
            <?php
            include '../includes/functions.inc.php';
            if (isset($_SESSION["usersid"])) {
              $rex = $_SESSION["usersid"];


              echo "  <img src='php/images/download.png' alt='defualt'>";

            }

            ?>

            <div class="details">
              <span>
                <?php

                $sql = mysqli_query($conn, "SELECT * FROM users WHERE usersId = {$_SESSION['usersid']}");
                if (mysqli_num_rows($sql) > 0) {
                  $row = mysqli_fetch_assoc($sql);


                  echo $row['usersUid'];
                } ?>
              </span>
              <!-- <p><?php echo $row['status']; ?></p>-->
            </div>
          </div>
          <a class="logout">online</a>
        </header>




        <div class="search">
          <span class="text">Recent conversation</span>
          <input type="text" placeholder="Enter name to search..." hidden>
          <button type='hidden'></button>
        </div>
        <div class="users-list">

        </div>
      </section>
    </div>
  </div>

  <footer class="footer">
    <div class="footer__addr">
      <h1 class="footer__logo">Something</h1>

      <h2>Contact</h2>

      <address>
        5534 Somewhere In. The World 22193-10212<br>

        <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
      </address>
    </div>

    <ul class="footer__nav">
      <li class="nav__item">
        <h2 class="nav__title">Media</h2>

        <ul class="nav__ul">
          <li>
            <a href="#">Online</a>
          </li>

          <li>
            <a href="#">Print</a>
          </li>

          <li>
            <a href="#">Alternative Ads</a>
          </li>
        </ul>
      </li>

      <li class="nav__item nav__item--extra">
        <h2 class="nav__title">Technology</h2>

        <ul class="nav__ul nav__ul--extra">
          <li>
            <a href="#">Hardware Design</a>
          </li>

          <li>
            <a href="#">Software Design</a>
          </li>

          <li>
            <a href="#">Digital Signage</a>
          </li>

          <li>
            <a href="#">Automation</a>
          </li>

          <li>
            <a href="#">Artificial Intelligence</a>
          </li>

          <li>
            <a href="#">IoT</a>
          </li>
        </ul>
      </li>
      <br>
      <li class="nav__item">
        <h2 class="nav__title">Legal</h2>

        <ul class="nav__ul">
          <li>
            <a href="#">Privacy Policy</a>
          </li>

          <li>
            <a href="#">Terms of Use</a>
          </li>

          <li>
            <a href="#">Sitemap</a>
          </li>
        </ul>
      </li>
    </ul>

    <div class="legal">
      <p>&copy; 2022 copyright. All rights reserved.</p>

    </div>
  </footer>
  <script src="javascript/users.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>