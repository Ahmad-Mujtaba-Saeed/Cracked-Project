<?php
include 'head.php';
include 'includes/auto_loader.php';
?>


<section class="section">
  <br />
  <div id="mainsection" class="mainsection">

    <div class="icons">
      <center class="heading">
        <p class="img1" onclick="showline(1)">Home</p>
        <p class="img2" onclick="showline(2)">Marketplace</p>
        <p class="img3" onclick="showline(3)">Leaks</p>
        <p class="img4" onclick="showline(4)">Coding&Hacking</p>
        <p class="img5" onclick="showline(5)">Cracking</p>
        <p class="img6" onclick="showline(6)">Premium</p>

      </center>
      <center class="icon">
        <img class="img1" onclick="showline(1)" src="imgs/home.png" width="20px" />
        <img class="img2" onclick="showline(2)" src="imgs/shopping-cart.png" width="20px" />
        <img class="img3" onclick="showline(3)" src="imgs/leak.png" width="20px" />
        <img class="img4" onclick="showline(4)" src="imgs/hacking.png" width="20px" />
        <img onclick="showline(5)" class="img5" src="imgs/broken-padlock.png" width="20px" />
        <img onclick="showline(6)" class="img6" src="imgs/premium-services.png" width="20px" />
      </center>
      <hr id="1" class="line1" />
      <hr id="2" class="line2" />
      <hr id="3" class="line3" />
      <hr id="4" class="line4" />
      <hr id="5" class="line5" />
      <hr id="6" class="line6" />
    </div>
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <div class="sec1">
      <div id="first">
        <center>
          <h3>Support Help and Upgrade Section</h3>
        </center>
        <br />
        <b style="color: #000">FORUM:</b>

        <div class="item1">
          <a href="sendmessage.php?error=support">
            <img src="imgs/support.png" width="20px" />
            <h3>Support & Bugs</h3>
            <p>
              If u face any bug or u need any assistance write a form to us!
            </p>
          </a>
        </div>
        <div class="item1">
          <a href="marketplace.php?error=annoucement">
            <img src="imgs/announcement.png" width="20px" />
            <h3>Announcements</h3>
            <p>
              Some important accouncements will be displayed in this section
              related to our site.
            </p>
          </a>
        </div>

        <div class="item1">
          <a href="">
            <img src="imgs/forward.png" width="20px" />
            <h3>Upgrade account</h3>
            <p>
              Upgrade your account to get some Extra features and gain some
              trust levels
            </p>
          </a>
        </div>
        <div class="item1">
          <a href="sendmessage.php?error=feedback">
            <img src="imgs/review.png" width="20px" />
            <h3>Feedback and suggestions</h3>
            <p>
              We love to hear your input, do not hold back and tell us what
              you would like to see changed.
            </p>
          </a>
        </div>
      </div>

      <div id="sec">
        <center>
          <h3>Marketplace</h3>
        </center>
        <br />
        <b style="color: #000">FORUM:</b>
        <div class="item1">
          <a href="marketplace.php?error=buyers">
            <img src="imgs/shopping-cart.png" width="20px" />
            <h3>Buyers threads</h3>
            <p>
              Buyers should only post in this place. Sellers will contact
              you!
            </p>
          </a>
        </div>
        <div class="item1">
          <a href="marketplace.php?error=sellers">
            <img src="imgs/shopping-cart.png" width="20px" />
            <h3>Sellers threads</h3>
            <p>Sellers should only post their gigs of there services.!</p>
          </a>
        </div>

        <div class="item1">
          <a href="marketplace.php?error=marketdiscus">
            <img src="imgs/team-work.png" width="20px" />
            <h3>market discussion</h3>
            <p>
              Need a place to chitchat regarding the market? Or do you wanna
              create a community alert.
            </p>
          </a>
        </div>
        <div class="item1">
          <a href="sendmessage.php?error=scammer">
            <img src="imgs/support.png" width="20px" />
            <h3>Report scammer</h3>
            <p>
              Report a scammer we will deal with him. (banning accounts ETC)
            </p>
          </a>
        </div>
      </div>
      <div id="three">
        <center>
          <h3>Leaks</h3>
        </center>
        <br />
        <b style="color: #000">FORUM:</b>
        <div class="item1">
          <a href="marketplace.php?error=crackedprog">
            <img src="imgs/programming-language.png" width="25px" />
            <h3>Cracked Programs</h3>
            <p>Share some usefull cracked programs with community here~!</p>
          </a>
        </div>
        <div class="item1">
          <a href="marketplace.php?error=Ebooks">
            <img src="imgs/open-book.png" width="20px" />
            <h3>E-Books</h3>
            <p>Share some leak books , guides with community!</p>
          </a>
        </div>

        <div class="item1">
          <a href="marketplace.php?error=accounts">
            <img src="imgs/user.png" width="20px" />
            <h3>Accounts</h3>
            <p>
              This section contains leaked accounts related to gaming , ****
              , Streaming and VPN ETC
            </p>
          </a>
        </div>
        <div class="item1">
          <a href="marketplace.php?error=shopping">
            <img src="imgs/shopping-cart.png" width="20px" />
            <h3>Shopping Deals & Discounts</h3>
            <p>
              Share some discount coupons for online or offline shopping
              with community!
            </p>
          </a>
        </div>
        <div class="item1">
          <a href="marketplace.php?error=sourcecode">
            <img src="imgs/programming-language.png" width="25px" />
            <h3>Source Code</h3>
            <p>
              Leaked Source code of websites and everything will be
              available here!
            </p>
          </a>
        </div>

        <div class="item1">
          <a href="marketplace.php?error=requestto">
            <img src="imgs/question-mark.png" width="20px" />
            <h3>Request?</h3>
            <p>Request any leak with community u did not find above!</p>
          </a>
        </div>
      </div>
      <div id="four">
        <center>
          <h3>Coding and Hacking :></h3>
        </center>
        <br />
        <b style="color: #000">Coding:</b>
        <div class="item1">
          <a href="marketplace.php?error=codediscuss">
            <img src="imgs/programming-language.png" width="25px" />
            <h3>Coding discussion</h3>
            <p>Talk about any coding problems and bugs here!</p>
          </a>
        </div>
        <div class="item1">
          <a href="marketplace.php?error=webprogram">
            <img src="imgs/programming-language.png" width="25px" />
            <h3>Web Programming</h3>
            <p>HTML,CSS,js and php experts should be here!</p>
          </a>
        </div>

        <div class="item1">
          <a href="marketplace.php?error=python">
            <img src="imgs/programming-language.png" width="25px" />
            <h3>Python</h3>
            <p>Python Experts should provide there services in here!</p>
          </a>
        </div>
        <div class="item1">
          <a href="marketplace.php?error=java">
            <img src="imgs/programming-language.png" width="25px" />
            <h3>Java</h3>
            <p>Java experts u need to be here!</p>
          </a>
        </div>

        <div class="item1">
          <a href="marketplace.php?error=c++">
            <img src="imgs/programming-language.png" width="25px" />
            <h3>C++ C# & VB.NET</h3>
            <p>Same as above!!!</p>
          </a>
        </div>
        <div class="item1">
          <a href="marketplace.php?error=otherlanguage">
            <img src="imgs/programming-language.png" width="25px" />
            <h3>Other language</h3>
            <p>IF u know another language Drop your gig here for buyers!</p>
          </a>
        </div>
        <b style="color: #000">Hacking:</b>

        <div class="item1">
          <a href="marketplace.php?error=hackinginfo">
            <img src="imgs/hacker.png" width="20px" />
            <h3>Hacking discussion</h3>
            <p>
              Talks about Botnets, IRC Bots, Malware or anything else
              related to Hacking can be found here.
            </p>
          </a>
        </div>
        <div class="item1">
          <a href="marketplace.php?error=webhack">
            <img src="imgs/hacker.png" width="20px" />
            <h3>website Hacking</h3>
            <p>
              This area is to discuss how to hack a website or even a forum.
            </p>
          </a>
        </div>
        <div class="item1">
          <a href="marketplace.php?error=hackingtools">
            <img src="imgs/hacker.png" width="20px" />
            <h3>Hacking Tools and Programs</h3>
            <p>Every Hacking Tool or Program can be posted here.</p>
          </a>
        </div>
        <div class="item1">
          <a href="marketplace.php?error=learnhacking">
            <img src="imgs/hacker.png" width="20px" />
            <h3>Hacking Tutorials</h3>
            <p>The place to post or share your Hacking Tutorials.</p>
          </a>
        </div>
      </div>
      <div id="five">
        <center>
          <h3>Cracks</h3>
        </center>
        <br />
        <b style="color: #000">FORUM:</b>
        <div class="item1">
          <a href="marketplace.php?error=crackingtools">
            <img src="imgs/wrench.png" width="20px" />
            <h3>Cracking Tools</h3>
            <p>
              This section is collecting all tools for scraping and parsing
              data, automated pentesting.
            </p>
          </a>
        </div>
        <div class="item1">
          <a href="marketplace.php?error=learncracking">
            <img src="imgs/open-book.png" width="20px" />
            <h3>Cracking Tutorials</h3>
            <p>
              This section contains tutorials on how to use tools to perform
              certain tests or scraping data.
            </p>
          </a>
        </div>

        <div class="item1">
          <a href="marketplace.php?error=proxies">
            <img src="imgs/server.png" width="20px" />
            <h3>Proxies</h3>
            <p>Using ip might be dangerous use our proxies</p>
          </a>
        </div>
        <div class="item1">
          <a href="marketplace.php?error=combolists">
            <img src="imgs/page.png" width="20px" />
            <h3>Combolists</h3>
            <p>
              Combolists for pentesting purposes can be posted and found in
              this section.
            </p>
          </a>
        </div>
      </div>
      <div id="six">
        <center>
          <h3>Premium section</h3>
        </center>
        <br />
        <b style="color: #000">FORUM:</b>
        <div class="item1">
          <a href="marketplace.php?error=onlypremium">
            <img src="imgs/premium-services.png" width="20px" />
            <h3>Premium accounts</h3>
            <p>
              Our premium accounts area. Plebs cannot view these threads.
            </p>
          </a>
        </div>
        <div class="item1">
          <a href="marketplace.php?error=prelounge">
            <img src="imgs/premium-services.png" width="20px" />
            <h3>Premium Lounge</h3>
            <p>only premium accounts can talk here!</p>
          </a>
        </div>

        <div class="item1">
          <a href="marketplace.php?error=premiumservices">
            <img src="imgs/premium-services.png" width="20px" />
            <h3>Premium leaks</h3>
            <p>
              Post leaks that you only want to share with upgraded members.
            </p>
          </a>
        </div>
        <div class="item1">
          <a href="marketplace.php?error=premiumfeedback">
            <img src="imgs/premium-services.png" width="20px" />
            <h3>Premium accounts Feedback</h3>
            <p>We love to receive Feedback from our premium members</p>
          </a>
        </div>
      </div>
    </div>
  </div>
  <br />
  <div class="members">
    <div style="font-size: larger; font-weight: 500; color: rgb(223, 228, 233)">
      Enjoy Here!
    </div>
  </div>

  <div id="second" class="mainsection">
    <div style="background-color: rgb(56, 55, 55)" class="sec1">
      <div id="first">
        <b style="color: #000">FORUM:</b>

        <div class="item1">
          <a href="marketplace.php?error=games">
            <img src="imgs/console.png" width="20px" />
            <h3>Games</h3>
            <p>
              Our game lovers will provide you any information related to
              games
            </p>
          </a>
        </div>
        <div class="item1">
          <a href="marketplace.php?error=Entertainment">
            <img src="imgs/confetti.png" width="20px" />
            <h3>Entertainment</h3>
            <p>
              Are you as fucking bored as we are? We got the place for you.
              New movies , music and games
            </p>
          </a>
        </div>

        <div class="item1">
          <a href="marketplace.php?error=lounge">
            <img src="imgs/lounge.png" width="25px" />
            <h3>Lounge</h3>
            <p>Introduce yourself to community here !</p>
          </a>
        </div>
        <div class="item1">
          <a href="marketplace.php?error=news">
            <img src="imgs/announcement.png" width="20px" />
            <h3>News around the World</h3>
            <p>
              Any valid news happend to your area share it with community
            </p>
          </a>
        </div>
        <div class="item1">
          <a href="marketplace.php?error=giveaways">
            <img src="imgs/gift.png" width="20px" />
            <h3>Giveaways</h3>
            <p>
              This section is for giveaways! arrange your own giveaways
              here.
            </p>
          </a>
        </div>
      </div>
    </div>
  </div>
  <?php
  if (isset($_SESSION['usersid'])) {
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
    $online_time = $user->online_time;
    $total_posts = $user->total_posts;
    $hours = $online_time / 3600;
    $Minutes = $hours * 60;
    $secs = $Minutes * 60;
    $online_time = $user->online_time;


    echo ' <div class="onlogin">
  <div class="login">
    <h3>Profile Info</h3>
  </div>
  <div class="area2">
    <img src="imgs/download.png" width="40px" />
    <a class="lin" href="account.php">
   <h3 class="' . $user_plan . '">
        ' .
      ucfirst($uname)

      . '
      </h3>';

    echo '
   
          <p>
        

    ' . $user_plan
      . '  member
       </p>
        </a>
        <div class="inner">
          <p>
            <b class="c">Trust level</b> <b class="d"> Likes</b>
            <b class="f">Reputation</b>
          </p>
        </div>
        <p><b class="c1">
            ' . $trust_level
      . '
          </b> <b class="d1">
            ' . $likes
      . '
          </b> <b class="f1">
          ' . $reputation .
      '
          </b></p>
      
  ';
  } else {
    echo '<div class="nolog">
    <div class="login">
      <h3>WELCOME</h3>
    </div>
    <div class="area">
      <center><a href="pakage.php"><button>Login</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button>Register</button></a></center>
    ';
  }
  ?>

  </div>
  </div>
  <br>
  <div class="members">
    <div style="font-size: larger; font-weight: 500; color: rgb(223, 228, 233)">
      Recent threads
    </div>
  </div>

  <?php
  echo ' <div id="second2" class="mainsection">
   <div style="background-color: rgb(56, 55, 55)" class="sec1">
     <div id="first">';
  $startFrom = 0;
  $rowCount = $startFrom + 10;

  $sql = "SELECT threadid,threadtype FROM recentthread ORDER BY recentid DESC LIMIT $startFrom, $rowCount";
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

        $userid = $row['userid'];

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


          $uname = $row['usersUid'];
          $user_plan2 = $row['userplan'];
        } else {
          $uname = 'false';
        }

      } else {
        echo 'error';
      }


      echo ' <a style="text-decoration:none;" href="threads.php?error=' . $threadid . '&threadplace=' . $threadtype . '"><div class="threads">
        <img src="imgs/record.png" style="border-radius: 50%; padding-top: 5px; padding-left: 5px; padding-right: 5px;"
        width="50px">
  <div class="subject1">' . ucfirst($title) . '</div>
  <div class="name"> <i class="' . $user_plan2 . '" style="margin-left:1px;"><a href="account.php?error=' . $uname . '"> ' . $uname . '</a></i>,' . $date . '</div>
  
  </div></a>';

    }
    echo ' 
  </div>
</div>
</div>';
  }


  ?>

</section>

<?php
include 'foot.php';
?>