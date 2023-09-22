<?php
include 'head.php';
include 'includes/auto_loader.php';
?>
<section class="section">



  <img class="bgproimg" src="imgs/subvertivo-_lab-8HrVclautyw-unsplash.jpg"
    style="border: 5px solid rgb(12, 65, 7); margin-left: 5px; height: 200px; margin-top: 6px;" width="97%">
  <img src="imgs/download.png" class="proimg"
    style="border: 5px solid black; margin-top: -240px; margin-left: 12px; width: 40%;">

  <?php
  if (isset($_GET['error'])) {
    $uname = $_GET['error'];
    $another_user = new user();
    $another_user->user_info($uname, $conn);

    $online_time = $another_user->online_time;
    $id = $another_user->user_id;
    $user_plan = $another_user->user_plan;
    $likes = $another_user->likes;
    $reputation = $another_user->reputation;
    $trust_level = $another_user->trust_level;
    $warning = $another_user->warning_level;
    $followers = $another_user->followers;
    $user_status = $another_user->user_status;
    $date = $another_user->registration_date;
    $online_time = $user->online_time;
    $total_posts = $another_user->total_posts;
    $hours = $online_time / 3600;
    $Minutes = $hours * 60;
    $secs = $Minutes * 60;


  } else {
    $uname = $_SESSION["useruid"];
    $user = new user();
    $user->user_info($uname, $conn);
    $id = $user->user_id;
    $user_plan = $user->user_plan;
    $likes = $user->likes;
    $reputation = $user->reputation;
    $trust_level = $user->trust_level;
    $warning = $user->warning_level;
    $followers = $user->followers;
    $user_status = $user->user_status;
    $date = $user->registration_date;
    $total_posts = $user->total_posts;
    $online_time = $user->online_time;
    $hours = $online_time / 3600;
    $Minutes = $hours * 60;
    $secs = $Minutes * 60;
    $online_time = $user->online_time;

  } ?>
  <center style="margin-left:40%;">
    <?php
    echo ' <div class="' . $user_plan . '" style="margin-left:1px;">
<h3 class="proname" style="margin-top:-180px; ">' . $uname . '
</h3>
</div>';

    ?>

    <p style="font-weight: 300; color: rgb(218, 212, 212); margin-top: -10px; ">
      <?php echo $user_plan; ?> member
    </p>
    <p style="font-weight: 300; color: rgb(218, 212, 212); margin-top: -10px; ">
      Likes : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php
      echo $likes;
      ?>
    </p>
    <p style="font-weight: 300; color: rgb(218, 212, 212); margin-top: -10px; ">
      Reputation : &nbsp;&nbsp;&nbsp;
      <?php
      echo $reputation;
      ?>
    </p>
    <p style="font-weight: 300; color: rgb(218, 212, 212); margin-top: -10px; ">
      Trust level : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php
      echo $trust_level;
      ?>
    </p>
  </center>
  <?php
  if (isset($_GET['error'])) {
    echo '
    <center>
    <button class="prosend"><a class="floow12" href="chatman/chat.php?usersId=' . $id . '"> Send message</a></button>
  </center>
    ';
  }
  ?>

  <div class="divpl">Information</div>
  <div class="tabs">
    <div class="q">Status:</div>
    <?php
    if ($user_status == 0) {
      echo '  <div class="ans"><img src="imgs/button.png"
width="15px"> offline</div>
</div>';
    } else {
      echo '  <div class="ans"><img src="imgs/dots.png"
width="15px"> online</div>
</div>';
    }
    ?>

    <div class="tabs">
      <div class="q">User id:</div>
      <div class="ans">
        <?php
        echo $id;
        ?>
      </div>
    </div>
    <div class="tabs">
      <div class="q">Registration date:</div>
      <div class="ans">
        <?php
        echo $date;
        ?>
      </div>
    </div>
    <div class="tabs">
      <div class="q">trust level:</div>
      <div class="ans">
        <?php
        echo $trust_level;
        ?>
      </div>
    </div>
    <div class="tabs">
      <div class="q">Warning level:</div>
      <div class="ans">
        <?php
        echo $warning, '%';
        ?>
      </div>
    </div>
    <div class="tabs">
      <div class="q">total posts:</div>
      <div class="ans">
        <?php
        echo $total_posts;
        ?>
      </div>
    </div>
    <div class="tabs">
      <div class="q">Online time:</div>
      <div class="ans">
        <?php
        echo (int) $hours, '<i class="cli">H</i>', (int) $Minutes, '<i class="cli">M</i>', (int) $secs, '<i class="cli">S</i>';
        ?>
      </div>
    </div>
    <style>
      .cli {
        color: darkorange;
      }
    </style>
    <div class="tabs">
      <div class="q">followers:</div>
      <div class="ans">
        <?php
        echo $followers;
        ?>
      </div>
    </div>



    <?php
    echo '  <div class="divpl">Recent threads</div>
            <div id="first" class="sect">';
    $startFrom = 0;
    $rowCount = $startFrom + 11;

    $sql = "SELECT threadid , threadtype FROM recentthread WHERE userid = $id ORDER BY recentid  DESC LIMIT $startFrom, $rowCount ";
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


          $threadid = $row['threadid'];
          $title = $row['title'];
          $discription = $row['discription'];
          $date = $row['threaddate'];



        }



        echo '  <div class="threads">
          <img src="imgs/record.png" style="border-radius: 50%; padding-top: 5px; padding-left: 5px; padding-right: 5px;"
            width="50px">
          <div class="subject1">' . $title . '</div>
          <div class="name">by <i class="' . $user_plan . '" style="margin-left:1px;"> ' . $uname . '</i>,' . $date . '</div>
          <div class="reply2">0</div>
        </div>';




      }
    } else {
      echo 'NO thread found';
    }
    ?>



  </div>

  </div>



</section>

<?php
include 'foot.php';
?>