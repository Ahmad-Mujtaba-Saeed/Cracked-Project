<?php
include 'head.php';
?>



<section class="section">
  <br />





  <?php
  $uid = $_SESSION['usersid'];
  $rex = $_GET['error'];
  $threadplace = $_GET['threadplace'];
  $sql = "SELECT * FROM $threadplace WHERE threadid = ?;";


  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=fail");
    exit();
  }
  mysqli_stmt_bind_param($stmt, "s", $rex);
  mysqli_stmt_execute($stmt);

  $resultdata = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultdata)) {


    $threadid = $row['threadid'];
    $date = $row["threaddate"];
    $title = $row["title"];
    $discription = $row["discription"];
    $rex1 = $row['userid'];
    $sql = "SELECT * FROM users WHERE usersId = ?;";


    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../signup.php?error=stmtfailed");
      exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $rex1);
    mysqli_stmt_execute($stmt);

    $resultdata = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultdata)) {


      $uname = $row['usersUid'];
      $uplan = $row['userplan'];
      $likes = $row['likes'];
      $reputaion = $row['reputaion'];
      $trustlevel = $row['trustlevel'];
      $ustatus = $row['ustatus'];
    } else {
      $uname = 'false';
    }

  } else {
    $result = false;
    return $result;
  }
  ?>
  <div class="onlogin">
    <div class="login1">
      <img src="imgs/download.png" style="border-radius:50% ; width: 30px; margin-top: 5px; margin-left: 5px;">
      <h3>
        <?php echo $title; ?>
      </h3>
      <p class="name"> by<i class="i"><a class="link" href="account.php?error=<?php echo $uname; ?>">
            <?php echo $uname;
            ?></a></i>,
        <?php echo $date; ?>
      </p>

    </div>
    <div class="area23">
      <img src="imgs/download.png" width="40px" />
      <a class="link" href="account.php?error=<?php echo $uname; ?>">

        <h3>
          <?php echo $uname; ?>
        </h3>

        <p>
          <?php
          echo $uplan, ' member';
          ?>
        </p>
      </a>
      <div class="inner">
        <p>
          <b class="c">Trust level</b> <b class="d"> Likes</b>
          <b class="f">Reputation</b>
        </p>
      </div>
      <p><b class="c1">
          <?php echo $trustlevel; ?>
        </b> <b class="d1">
          <?php echo $likes; ?>
        </b> <b class="f1">
          <?php echo $reputaion; ?>
        </b></p>
      <hr>
      <p style="color: #000; margin-left: 5px;">Description</p>
      <div class="message">
        <?php echo $discription; ?>
      </div>
    </div>
  </div>
  <div class="again"><img src="imgs/love.png" width="20px"> Like
    <img style="display: none;" src="imgs/heart.png" width="20px">
    <div class="go">
      <a onclick="copyText()"> <img src="imgs/share.png" width="20px"> Share </a>&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="#reply"><img src="imgs/reply.png" width="20px"> Reply</a>
    </div>
  </div>
  <script>
    function copyText() {

      /* Copy text into clipboard */
      navigator.clipboard.writeText
        ("/localhost/projc/threads.php?error=");
    }
  </script>
  <?php
  $startFrom = 0;
  $rowCount = $startFrom + 5;

  $sql = "SELECT * FROM reply  ORDER BY replyid DESC LIMIT $startFrom, $rowCount";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
      $type = $row['type'];
      $threadid = $row['threadid'];
      if ($type == $threadplace && $threadid == $rex) {

        $userid = $row['userid'];
        $reply = $row['reply'];


        $sql = "SELECT * FROM users WHERE usersId = ?;";


        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("location: ../signup.php?error=stmtfailed");
          exit();
        }
        mysqli_stmt_bind_param($stmt, "s", $userid);
        mysqli_stmt_execute($stmt);

        $resultdata = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultdata)) {


          $unam = $row['usersUid'];

        } else {
          $unam = 'false';
        }



        echo '
    <div class="area234">
    <img src="imgs/download.png" width="40px" />
    <a class="link2" href="">
      <h3>' . $unam . '</h3>
    </a>

    <hr>
    <p style="color: #000; margin-left: 5px;">Message</p>
    <div class="message1">
      ' . $reply . '
    </div>
  </div>
    ';
      }
    }
  } else {
    echo "<h2 style='color:white;'>No comment yet<h2>";
  }


  ?>




  <br>
  <div class="again" id="reply">Reply</div>
  <div class="replysec">
    <img class="b" src="imgs/bold.png" width="25px">
    <img class="b" src="imgs/italic.png" width="25px">
    <img class="b" src="imgs/underline.png" width="25px">
    <img class="b" src="imgs/link.png" width="25px">
    <img class="b" src="imgs/image.png" width="25px">
    <hr>
    <h3 style="font-size: larger;  font-weight: 200; color: rgba(240, 255, 255, 0.493);">Message :</h3>
    <form action="./includes/reply.php" method="post">
      <input type="hidden" name="type" class="form-control" value="<?php echo $threadplace ?>">
      <input type="hidden" name="userid" class="form-control" value="<?php echo $uid ?>">

      <input type="hidden" name="threadid" class="form-control" value="<?php echo $rex ?>">

      <textarea class="message" name="reply" rows="7" cols="36" required></textarea>
      <button class="post" type="submit" name="submit">Post</button>
    </form>

  </div>

</section>

<?php
include 'foot.php';
?>