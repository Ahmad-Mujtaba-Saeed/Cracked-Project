<?php
include 'head.php';
?>



<section class="section2">
  <br />
  <center>
    <?php
    if (isset($_GET['error'])) {
      if ($_GET['error'] == "annoucement") {
        echo ' <h2 style="color: aliceblue; font-weight: 400;">Announcements</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">lastest Announcements about any update or community will be shown here!</p>
</center>
';
        if (isset($_SESSION['usersid'])) {
          if ($_SESSION['usersid'] == 4) {
            echo '<center>
<a href="createthread.php?error=annoucement"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
   New thread</button></a>
</center>';
          }
        }
      } else if ($_GET['error'] == "buyers") {
        echo '   <h2 style="color: aliceblue; font-weight: 400;">Buyers place</h2>
          <p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">Here u can buy any kind of service , accounts and
            hire a person by listing your requirements bellow!</p>
            </center>
            <center>
             <a href="createthread.php?error=buyers"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
              <button style="background-color: #797979; margin-left: 5px; color: rgb(12, 59, 6);">Recent thread</button>
            </center>
            ';
      } elseif ($_GET['error'] == "sellers") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">Sellers place</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">Sell your service , accounts and anything here !</p>
</center>
<center>
 <a href="createthread.php?error=sellers"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
  <button style="background-color: #797979; margin-left: 5px; color: rgb(12, 59, 6);">Recent thread</button>
</center>
';
      } elseif ($_GET['error'] == "marketdiscus") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">Market discussion</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">Important topics to discuss? Share it with community</p>
</center>
<center>
 <a href="createthread.php?error=marketdiscus"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
</center>
';
      } elseif ($_GET['error'] == "crackedprog") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">Cracked Software</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">Share some cracked software with community!<br>Beaware of malware</p>
</center>
<center>
 <a href="createthread.php?error=crackedprog"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
 
</center>
';
      } elseif ($_GET['error'] == "Ebooks") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">leaked Ebooks</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">Share some leak books , guides with community!</p>
</center>
<center>
 <a href="createthread.php?error=ebooks"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
 
</center>
';
      } elseif ($_GET['error'] == "accounts") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">Accounts</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">Share free accounts of games , streaming , vpn and ****</p>
</center>
<center>
 <a href="createthread.php?error=accounts"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
 
</center>
';
      } elseif ($_GET['error'] == "shopping") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">Shopping Deals & Discounts</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">Share some discount coupons for online or offline shopping
with community!</p>
</center>
<center>
 <a href="createthread.php?error=shopping"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
 
</center>
';
      } elseif ($_GET['error'] == "sourcecode") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">Source code</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">Leaked Source code of websites and everything will be
available here!</p>
</center>
<center>
 <a href="createthread.php?error=sourcecode"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
 
</center>
';
      } elseif ($_GET['error'] == "requestto") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">Request?</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">Cant find your required leaks request here!</p>
</center>
<center>
 <a href="createthread.php?error=requestto"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Request?</button></a>
 
</center>
';
      } elseif ($_GET['error'] == "codediscuss") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">Coding discussion</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">Talk about any coding problems and bugs here!</p>
</center>
<center>
  <a href="createthread.php?error=codediscus"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
</center>
';
      } elseif ($_GET['error'] == "webprogram") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">Web Programming</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">HTML,CSS,js and php should be here!</p>
</center>
<center>
  <a href="createthread.php?error=webprogram"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
</center>
';
      } elseif ($_GET['error'] == "python") {
        echo ' <h2 style="color: aliceblue; font-weight: 400;">Python</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">Python Experts should provide there services in here!</p>
</center>
<center>
  <a href="createthread.php?error=python"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
</center>
';
      } elseif ($_GET['error'] == "java") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">Java</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">Java experts u need to be here!</p>
</center>
<center>
  <a href="createthread.php?error=java"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
</center>
';
      } elseif ($_GET['error'] == "c++") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">C++ C# & VB.NET</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">show ur programing skills here</p>
</center>
<center>
  <a href="createthread.php?error=cc"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
</center>
';
      } elseif ($_GET['error'] == "hackinginfo") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">Hacking discussion</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">
Talks about Botnets, IRC Bots, Malware or anything else
related to Hacking can be found here.</p>
</center>
<center>
  <a href="createthread.php?error=hackinginfo"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
</center>
';
      } elseif ($_GET['error'] == "webhack") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">website Hacking</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">This area is to discuss how to hack a website or even a forum.</p>
</center>
<center>
  <a href="createthread.php?error=webhack"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
</center>
';
      } elseif ($_GET['error'] == "hackingtools") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">Hacking Tools and Programs</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">Every Hacking Tool or Program can be posted here.</p>
</center>
<center>
  <a href="createthread.php?error=hackingtools"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
</center>
';
      } elseif ($_GET['error'] == "learnhacking") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">Hacking Tutorials</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">The place to post or share your Hacking Tutorials.</p>
</center>
<center>
  <a href="createthread.php?error=learnhacking"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
</center>
';
      } elseif ($_GET['error'] == "crackingtools") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">Cracking Tools</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;"> This section is collecting all tools for scraping and parsing
data, automated pentesting.</p>
</center>
<center>
  <a href="createthread.php?error=crackingtools"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
</center>
';
      } elseif ($_GET['error'] == "learncracking") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">Cracking Tutorials</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">This section contains tutorials on how to use tools to perform
certain tests or scraping data.</p>
</center>
<center>
  <a href="createthread.php?error=learncracking"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
</center>
';
      } elseif ($_GET['error'] == "proxies") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">Proxies</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">Using ip might be dangerous use our proxies</p>
</center>
<center>
  <a href="createthread.php?error=proxies"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
</center>
';
      } elseif ($_GET['error'] == "combolists") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">Combolists</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">Combolists for pentesting purposes can be posted and found in
this section.</p>
</center>
<center>
  <a href="createthread.php?error=combolist"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
</center>
';
      } elseif ($_GET['error'] == "onlypremium") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">Premium accounts</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">Our premium accounts area. Plebs cannot view these threads.</p>
</center>
<center>
  <a href="createthread.php?error=onlypremium"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
</center>
';
      } elseif ($_GET['error'] == "prelounge") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">Premium Lounge</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">only premium accounts can talk here!</p>
</center>
<center>
  <a href="createthread.php?error=prelounge"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
</center>
';
      } elseif ($_GET['error'] == "premiumservices") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">Premium leaks</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">  Post leaks that you only want to share with upgraded members.</p>
</center>
<center>
  <a href="createthread.php?error=premiumservices"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
</center>
';
      } elseif ($_GET['error'] == "games") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">Games</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">Our game lovers will provide you any information related to
games</p>
</center>
<center>
  <a href="createthread.php?error=games"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
</center>
';
      } elseif ($_GET['error'] == "Entertainment") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">Entertainment</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">Are you as fucking bored as we are? We got the place for you.
New movies , music and games!</p>
</center>
<center>
  <a href="createthread.php?error=entertainment"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
</center>
';
      } elseif ($_GET['error'] == "lounge") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">Lounge</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">Introduce yourself to community here !</p>
</center>
<center>
  <a href="createthread.php?error=lounge"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
</center>
';
      } elseif ($_GET['error'] == "news") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">Lounge</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">News around the World</p>
</center>
<center>
  <a href="createthread.php?error=news"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
</center>
';
      } elseif ($_GET['error'] == "giveaways") {
        echo '      <h2 style="color: aliceblue; font-weight: 400;">Giveaways</h2>
<p style="color: rgba(173, 173, 173, 0.801); font-weight: 400;">This section is for giveaways! arrange your own giveaways
here.</p>
</center>
<center>
  <a href="createthread.php?error=giveaways"> <button style="background-color: #797979; margin-left: 3spx; margin-bottom: 20px; color: rgb(12, 59, 6);">Create
                New thread</button></a>
</center>
';
      }
    }
    ?>

    <div class="members">
      <div style="font-size: larger; font-weight: 500; color: rgb(223, 228, 233)">
        Important Threads
      </div>
    </div>
    <style>
      .mainsection123 {
        width: 96%;
        height: auto;
        padding-bottom: 130px;
        margin-top: -2px;
        margin-left: 5px;
        padding-left: 2px;

        background-color: rgb(56, 55, 55);
      }
    </style>
    <?php
    $error = $_GET['error'];


    $sql = "SELECT threadid,userid, title, discription , threaddate ,impthread FROM $error ORDER BY threadid DESC ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
    
      echo '
      
      <div class="mainsection123">
      <div class="sec1">
     
        <div id="first">
        
        ';
      $x = 0;
      while ($row = $result->fetch_assoc()) {

        $impthread = $row["impthread"];

        $threadid = $row['threadid'];
        $date = $row["threaddate"];
        $title = $row["title"];
        $rex = $row['userid'];

        if ($impthread == "important") {
          $x = $x + 1;

          if ($x <= 3) {
            $sql = "SELECT * FROM users WHERE usersId = ?;";


            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
              header("location: ../signup.php?error=stmtfailed");
              exit();
            }
            mysqli_stmt_bind_param($stmt, "s", $rex);
            mysqli_stmt_execute($stmt);

            $resultdata = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($resultdata)) {


              $uname = $row['usersUid'];
              $userplan = $row['userplan'];

            } else {
              $uname = 'false';
            }

            if ($userplan == "premium") {
              echo '     <a style="text-decoration:none;" href="threads.php?error=' . $threadid . '&threadplace=' . $error . '">
            <div class="threads">
            <img src="imgs/flash.png" style="border-radius: 50%; padding-top: 5px; padding-left: 5px; padding-right: 5px;"
              width="50px">
            <div class="subject1">' . $title . '</div>
            <div class="name"><i class="standard" style="margin-left:1px;"><a href="account.php?error=' . $uname . '">by ' . $uname . '</a></i>,' . $date . '</div>
            <div class="reply2">0</div>
          </div>
    </a>';
            } elseif ($userplan == "standard") {
              echo '    <a style="text-decoration:none;" href="threads.php?error=' . $threadid . '&threadplace=' . $error . '">
            <div class="threads">
            <img src="imgs/flash.png" style="border-radius: 50%; padding-top: 5px; padding-left: 5px; padding-right: 5px;"
              width="50px">
            <div class="subject1">' . $title . '</div>
            <div class="name"><i class="neonText1" style="margin-left:1px;"><a href="account.php?error=' . $uname . '">by ' . $uname . '</a></i>,' . $date . '</div>
            <div class="reply2">0</div>
          </div>
    </a>';
            } elseif ($userplan == "Basic") {
              echo '         <a style="text-decoration:none;" href="threads.php?error=' . $threadid . '&threadplace=' . $error . '">
            <div class="threads">
            <img src="imgs/flash.png" style="border-radius: 50%; padding-top: 5px; padding-left: 5px; padding-right: 5px;"
              width="50px">
            <div class="subject1">' . $title . '</div>
            <div class="name"><i class="flux" style="margin-left:1px;"><a href="account.php?error=' . $uname . '">by ' . $uname . '</a></i>,' . $date . '</div>
            <div class="reply2">0</div>
          </div>
    </a>';
            } else {
              echo ' <a style="text-decoration:none;" href="threads.php?error=' . $threadid . '&threadplace=' . $threadtype . '"><div class="threads">
            <img src="imgs/record.png" style="border-radius: 50%; padding-top: 5px; padding-left: 5px; padding-right: 5px;"
            width="50px">
      <div class="subject1">' . ucfirst($title) . '</div>
      <div class="name"> <i class="i"><a href="account.php?error=' . $uname . '">by ' . $uname . '</a></i>,' . $date . '</div>
      
      </div></a>';
            }





          } else {



          }
        } else {

        }
      }
      echo '

      </div>
      </div>
      </div>
  
      
      ';
    } else {
      echo "<center><h3 style='color:white;'>No thread created yet <h3></center>";
    }


    ?>




    <div class="members">
      <div style="font-size: larger; font-weight: 500; color: rgb(223, 228, 233)">
        Normal Threads
      </div>
    </div>
    <style>
      .mainsection12 {

        width: 96%;
        height: auto;
        padding-bottom: 650px;
        margin-top: -2px;
        margin-left: 5px;
        padding-left: 2px;

        background-color: rgb(56, 55, 55);
      }

      .mainsection121 {
        display: none;
        width: 96%;
        height: auto;
        padding-bottom: 650px;
        margin-top: -2px;
        margin-left: 5px;
        padding-left: 2px;

        background-color: rgb(56, 55, 55);
      }

      .mainsection122 {
        display: none;
        width: 96%;
        height: auto;
        padding-bottom: 650px;
        margin-top: -2px;
        margin-left: 5px;
        padding-left: 2px;

        background-color: rgb(56, 55, 55);
      }

      .mainsection126 {
        display: none;
        width: 96%;
        height: auto;
        padding-bottom: 650px;
        margin-top: -2px;
        margin-left: 5px;
        padding-left: 2px;

        background-color: rgb(56, 55, 55);
      }

      .mainsection124 {
        display: none;
        width: 96%;
        height: auto;
        padding-bottom: 650px;
        margin-top: -2px;
        margin-left: 5px;
        padding-left: 2px;

        background-color: rgb(56, 55, 55);
      }


      .sec1 {
        padding-bottom: 20px;

      }
    </style>

    <?php
    $error = $_GET['error'];
    $startFrom = 0;
    $rowCount = $startFrom + 11;

    $sql = "SELECT threadid,userid, title, discription , threaddate ,impthread FROM $error ORDER BY threadid DESC LIMIT $startFrom, $rowCount";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
    
      echo '<div id="1" class="mainsection12">
      <div class="sec1">
        <div id="first">';

      while ($row = $result->fetch_assoc()) {
        $impthread = $row["impthread"];

        $threadid = $row['threadid'];
        $date = $row["threaddate"];
        $title = $row["title"];
        $rex = $row['userid'];

        if ($impthread != "important") {

          $sql = "SELECT * FROM users WHERE usersId = ?;";


          $stmt = mysqli_stmt_init($conn);

          if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signup.php?error=stmtfailed");
            exit();
          }
          mysqli_stmt_bind_param($stmt, "s", $rex);
          mysqli_stmt_execute($stmt);

          $resultdata = mysqli_stmt_get_result($stmt);

          if ($row = mysqli_fetch_assoc($resultdata)) {


            $uname = $row['usersUid'];
            $userplan2 = $row['userplan'];
          } else {
            $uname = 'false';
          }

          if ($userplan2 == "premium") {
            echo '     <a style="text-decoration:none;" href="threads.php?error=' . $threadid . '&threadplace=' . $error . '">
            <div class="threads">
              <img src="imgs/record.png"
                style="border-radius: 50%; padding-top: 5px; padding-left: 5px; padding-right: 5px;" width="50px">
              <div class="subject1">' . $title . '</div>
              <div class="name"> <i class="standard" style="margin-left:1px;"><a href="account.php?error=' . $uname . '">by ' . $uname . '</a></i>, ' . $date . '</div>
              <div class="reply2">0</div>
            </div></a>';
          } elseif ($userplan2 == "standard") {
            echo '  <a style="text-decoration:none;" href="threads.php?error=' . $threadid . '&threadplace=' . $error . '">
            <div class="threads">
              <img src="imgs/record.png"
                style="border-radius: 50%; padding-top: 5px; padding-left: 5px; padding-right: 5px;" width="50px">
              <div class="subject1">' . $title . '</div>
              <div class="name"> <i class="neonText1" style="margin-left:1px;"><a href="account.php?error=' . $uname . '">by ' . $uname . '</a></i>, ' . $date . '</div>
              <div class="reply2">0</div>
            </div></a>';
          } elseif ($userplan2 == "Basic") {
            echo '         <a style="text-decoration:none;" href="threads.php?error=' . $threadid . '&threadplace=' . $error . '">
            <div class="threads">
              <img src="imgs/record.png"
                style="border-radius: 50%; padding-top: 5px; padding-left: 5px; padding-right: 5px;" width="50px">
              <div class="subject1">' . $title . '</div>
              <div class="name"> <i class="flux" style="margin-left:1px;"><a href="account.php?error=' . $uname . '">by ' . $uname . '</a></i>, ' . $date . '</div>
              <div class="reply2">0</div>
            </div></a>';
          } else {
            echo ' <a style="text-decoration:none;" href="threads.php?error=' . $threadid . '&threadplace=' . $threadtype . '"><div class="threads">
            <img src="imgs/record.png" style="border-radius: 50%; padding-top: 5px; padding-left: 5px; padding-right: 5px;"
            width="50px">
      <div class="subject1">' . ucfirst($title) . '</div>
      <div class="name"> <i class="i" style="margin-left:1px;"><a href="account.php?error=' . $uname . '">by ' . $uname . '</a></i>,' . $date . '</div>
      
      </div></a>';
          }


        } else {



        }
      }
      echo '
      </div>
      <div class="numbers">
      <center><b class="innum" onclick="showthreads(1)">1</b><b class="innum" onclick="showthreads(2)">2</b><b class="innum" onclick="showthreads(3)">3</b><b onclick="showthreads(4)" class="innum">4</b><b onclick="showthreads(5)" class="innum">5</b>
      </center>
      </div>
      </div>
      </div>
      
      ';
    } else {
      echo "<center><h3 style='color:white;'>No thread created yet <h3></center>";
    }


    ?>

    <?php

    $startFrom = 11;
    $rowCount = 10;

    $sql = "SELECT threadid,userid, title, discription , threaddate ,impthread FROM $error ORDER BY threadid DESC LIMIT $startFrom, $rowCount";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
    
      echo '<div id="2" class="mainsection121">
<div class="sec1">
<div id="first">';

      while ($row = $result->fetch_assoc()) {
        $impthread = $row["impthread"];

        if ($impthread != "important") {


          $date = $row["threaddate"];
          $title = $row["title"];
          $rex = $row['userid'];
          $sql = "SELECT * FROM users WHERE usersId = ?;";


          $stmt = mysqli_stmt_init($conn);

          if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signup.php?error=stmtfailed");
            exit();
          }
          mysqli_stmt_bind_param($stmt, "s", $rex);
          mysqli_stmt_execute($stmt);

          $resultdata = mysqli_stmt_get_result($stmt);

          if ($row = mysqli_fetch_assoc($resultdata)) {


            $uname = $row['usersUid'];
            $userplan2 = $row['userplan'];
          } else {
            $uname = 'false';
          }

          if ($userplan2 == "premium") {
            echo '     <a style="text-decoration:none;" href="threads.php?error=' . $threadid . '&threadplace=' . $error . '">
            <div class="threads">
              <img src="imgs/record.png"
                style="border-radius: 50%; padding-top: 5px; padding-left: 5px; padding-right: 5px;" width="50px">
              <div class="subject1">' . $title . '</div>
              <div class="name"> <i class="standard" style="margin-left:1px;"><a href="account.php?error=' . $uname . '">by ' . $uname . '</a></i>, ' . $date . '</div>
              <div class="reply2">0</div>
            </div></a>';
          } elseif ($userplan2 == "standard") {
            echo '  <a style="text-decoration:none;" href="threads.php?error=' . $threadid . '&threadplace=' . $error . '">
            <div class="threads">
              <img src="imgs/record.png"
                style="border-radius: 50%; padding-top: 5px; padding-left: 5px; padding-right: 5px;" width="50px">
              <div class="subject1">' . $title . '</div>
              <div class="name"> <i class="neonText1" style="margin-left:1px;"><a href="account.php?error=' . $uname . '">by ' . $uname . '</a></i>, ' . $date . '</div>
              <div class="reply2">0</div>
            </div></a>';
          } elseif ($userplan2 == "Basic") {
            echo '         <a style="text-decoration:none;" href="threads.php?error=' . $threadid . '&threadplace=' . $error . '">
            <div class="threads">
              <img src="imgs/record.png"
                style="border-radius: 50%; padding-top: 5px; padding-left: 5px; padding-right: 5px;" width="50px">
              <div class="subject1">' . $title . '</div>
              <div class="name"> <i class="flux" style="margin-left:1px;"><a href="account.php?error=' . $uname . '">by ' . $uname . '</a></i>, ' . $date . '</div>
              <div class="reply2">0</div>
            </div></a>';
          } else {
            echo ' <a style="text-decoration:none;" href="threads.php?error=' . $threadid . '&threadplace=' . $threadtype . '"><div class="threads">
            <img src="imgs/record.png" style="border-radius: 50%; padding-top: 5px; padding-left: 5px; padding-right: 5px;"
            width="50px">
      <div class="subject1">' . ucfirst($title) . '</div>
      <div class="name"> <i class="i" style="margin-left:1px;"><a href="account.php?error=' . $uname . '">by ' . $uname . '</a></i>,' . $date . '</div>
      
      </div></a>';
          }
        } else {


        }
      }
      echo '
</div>
<div class="numbers">
<center><b class="innum" onclick="showthreads(1)">1</b><b class="innum" onclick="showthreads(2)">2</b><b class="innum" onclick="showthreads(3)">3</b><b onclick="showthreads(4)" class="innum">4</b><b onclick="showthreads(5)" class="innum">5</b>
  </center>
</div>
</div>
</div>';
    }
    ?>
    <?php

    $startFrom = 21;
    $rowCount = $startFrom + 11;

    $sql = "SELECT threadid,userid, title, discription , threaddate ,impthread FROM $error ORDER BY threadid DESC LIMIT $startFrom, $rowCount";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
    
      echo '<div id="3" class="mainsection122">
<div class="sec1">
<div id="first">';

      while ($row = $result->fetch_assoc()) {
        $impthread = $row["impthread"];

        if ($impthread != "important") {
          $date = $row["threaddate"];
          $title = $row["title"];
          $rex = $row['userid'];
          $sql = "SELECT * FROM users WHERE usersId = ?;";


          $stmt = mysqli_stmt_init($conn);

          if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signup.php?error=stmtfailed");
            exit();
          }
          mysqli_stmt_bind_param($stmt, "s", $rex);
          mysqli_stmt_execute($stmt);

          $resultdata = mysqli_stmt_get_result($stmt);

          if ($row = mysqli_fetch_assoc($resultdata)) {


            $uname = $row['usersUid'];

            $userplan2 = $row['userplan'];
          } else {
            $uname = 'false';
          }

          if ($userplan2 == "premium") {
            echo '     <a style="text-decoration:none;" href="threads.php?error=' . $threadid . '&threadplace=' . $error . '">
            <div class="threads">
              <img src="imgs/record.png"
                style="border-radius: 50%; padding-top: 5px; padding-left: 5px; padding-right: 5px;" width="50px">
              <div class="subject1">' . $title . '</div>
              <div class="name"> <i class="standard" style="margin-left:1px;"><a href="account.php?error=' . $uname . '">by ' . $uname . '</a></i>, ' . $date . '</div>
              <div class="reply2">0</div>
            </div></a>';
          } elseif ($userplan2 == "standard") {
            echo '  <a style="text-decoration:none;" href="threads.php?error=' . $threadid . '&threadplace=' . $error . '">
            <div class="threads">
              <img src="imgs/record.png"
                style="border-radius: 50%; padding-top: 5px; padding-left: 5px; padding-right: 5px;" width="50px">
              <div class="subject1">' . $title . '</div>
              <div class="name"> <i class="neonText1" style="margin-left:1px;"><a href="account.php?error=' . $uname . '">by ' . $uname . '</a></i>, ' . $date . '</div>
              <div class="reply2">0</div>
            </div></a>';
          } elseif ($userplan2 == "Basic") {
            echo '         <a style="text-decoration:none;" href="threads.php?error=' . $threadid . '&threadplace=' . $error . '">
            <div class="threads">
              <img src="imgs/record.png"
                style="border-radius: 50%; padding-top: 5px; padding-left: 5px; padding-right: 5px;" width="50px">
              <div class="subject1">' . $title . '</div>
              <div class="name"> <i class="flux" style="margin-left:1px;"><a href="account.php?error=' . $uname . '">by ' . $uname . '</a></i>, ' . $date . '</div>
              <div class="reply2">0</div>
            </div></a>';
          } else {
            echo ' <a style="text-decoration:none;" href="threads.php?error=' . $threadid . '&threadplace=' . $threadtype . '"><div class="threads">
            <img src="imgs/record.png" style="border-radius: 50%; padding-top: 5px; padding-left: 5px; padding-right: 5px;"
            width="50px">
      <div class="subject1">' . ucfirst($title) . '</div>
      <div class="name"> <i class="i" style="margin-left:1px;"><a href="account.php?error=' . $uname . '">by ' . $uname . '</a></i>,' . $date . '</div>
      
      </div></a>';
          }
        } else {

        }



      }
      echo '
      </div>
      <div class="numbers">
      <center><b class="innum" onclick="showthreads(1)">1</b><b class="innum" onclick="showthreads(2)">2</b><b class="innum" onclick="showthreads(3)">3</b><b onclick="showthreads(4)" class="innum">4</b><b onclick="showthreads(5)" class="innum">5</b>
        </center>
      </div>
      </div>
      </div>';
    }


    ?>
    <?php

    $startFrom = 32;
    $rowCount = $startFrom + 11;

    $sql = "SELECT threadid,userid, title, discription , threaddate ,impthread FROM $error ORDER BY threadid DESC LIMIT $startFrom, $rowCount";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
    
      echo '<div id="4" class="mainsection126">
<div class="sec1">
<div id="first">';

      while ($row = $result->fetch_assoc()) {
        $impthread = $row["impthread"];

        if ($impthread != "important") {
          $date = $row["threaddate"];
          $title = $row["title"];
          $rex = $row['userid'];
          $sql = "SELECT * FROM users WHERE usersId = ?;";


          $stmt = mysqli_stmt_init($conn);

          if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signup.php?error=stmtfailed");
            exit();
          }
          mysqli_stmt_bind_param($stmt, "s", $rex);
          mysqli_stmt_execute($stmt);

          $resultdata = mysqli_stmt_get_result($stmt);

          if ($row = mysqli_fetch_assoc($resultdata)) {


            $uname = $row['usersUid'];
            $userplan2 = $row['userplan'];
          } else {
            $uname = 'false';
          }

          if ($userplan2 == "premium") {
            echo '     <a style="text-decoration:none;" href="threads.php?error=' . $threadid . '&threadplace=' . $error . '">
            <div class="threads">
              <img src="imgs/record.png"
                style="border-radius: 50%; padding-top: 5px; padding-left: 5px; padding-right: 5px;" width="50px">
              <div class="subject1">' . $title . '</div>
              <div class="name"> <i class="standard" style="margin-left:1px;"><a href="account.php?error=' . $uname . '">by ' . $uname . '</a></i>, ' . $date . '</div>
              <div class="reply2">0</div>
            </div></a>';
          } elseif ($userplan2 == "standard") {
            echo '  <a style="text-decoration:none;" href="threads.php?error=' . $threadid . '&threadplace=' . $error . '">
            <div class="threads">
              <img src="imgs/record.png"
                style="border-radius: 50%; padding-top: 5px; padding-left: 5px; padding-right: 5px;" width="50px">
              <div class="subject1">' . $title . '</div>
              <div class="name"> <i class="neonText1" style="margin-left:1px;"><a href="account.php?error=' . $uname . '">by ' . $uname . '</a></i>, ' . $date . '</div>
              <div class="reply2">0</div>
            </div></a>';
          } elseif ($userplan2 == "Basic") {
            echo '         <a style="text-decoration:none;" href="threads.php?error=' . $threadid . '&threadplace=' . $error . '">
            <div class="threads">
              <img src="imgs/record.png"
                style="border-radius: 50%; padding-top: 5px; padding-left: 5px; padding-right: 5px;" width="50px">
              <div class="subject1">' . $title . '</div>
              <div class="name"> <i class="flux" style="margin-left:1px;"><a href="account.php?error=' . $uname . '">by ' . $uname . '</a></i>, ' . $date . '</div>
              <div class="reply2">0</div>
            </div></a>';
          } else {
            echo ' <a style="text-decoration:none;" href="threads.php?error=' . $threadid . '&threadplace=' . $threadtype . '"><div class="threads">
            <img src="imgs/record.png" style="border-radius: 50%; padding-top: 5px; padding-left: 5px; padding-right: 5px;"
            width="50px">
      <div class="subject1">' . ucfirst($title) . '</div>
      <div class="name"> <i class="i" style="margin-left:1px;"><a href="account.php?error=' . $uname . '">by ' . $uname . '</a></i>,' . $date . '</div>
      
      </div></a>';
          }
        } else {
        }



      }
      echo '
      </div>
      <div class="numbers">
      <center><b class="innum" onclick="showthreads(1)">1</b><b class="innum" onclick="showthreads(2)">2</b><b class="innum" onclick="showthreads(3)">3</b><b onclick="showthreads(4)" class="innum">4</b><b onclick="showthreads(5)" class="innum">5</b>
        </center>
      </div>
      </div>
      </div>';
    }


    ?>
    <?php

    $startFrom = 43;
    $rowCount = $startFrom + 11;

    $sql = "SELECT threadid,userid, title, discription , threaddate FROM $error ORDER BY threadid DESC LIMIT $startFrom, $rowCount";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
    
      echo '<div id="5" class="mainsection124">
<div class="sec1">
<div id="first">';

      while ($row = $result->fetch_assoc()) {
        $impthread = $row["impthread"];

        if ($impthread != "important") {
          $date = $row["threaddate"];
          $title = $row["title"];
          $rex = $row['userid'];
          $sql = "SELECT * FROM users WHERE usersId = ?;";


          $stmt = mysqli_stmt_init($conn);

          if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signup.php?error=stmtfailed");
            exit();
          }
          mysqli_stmt_bind_param($stmt, "s", $rex);
          mysqli_stmt_execute($stmt);

          $resultdata = mysqli_stmt_get_result($stmt);

          if ($row = mysqli_fetch_assoc($resultdata)) {


            $uname = $row['usersUid'];

            $userplan2 = $row['userplan'];
          } else {
            $uname = 'false';
          }

          if ($userplan2 == "premium") {
            echo '     <a style="text-decoration:none;" href="threads.php?error=' . $threadid . '&threadplace=' . $error . '">
            <div class="threads">
              <img src="imgs/record.png"
                style="border-radius: 50%; padding-top: 5px; padding-left: 5px; padding-right: 5px;" width="50px">
              <div class="subject1">' . $title . '</div>
              <div class="name"> <i class="standard" style="margin-left:1px;"><a href="account.php?error=' . $uname . '">by ' . $uname . '</a></i>, ' . $date . '</div>
              <div class="reply2">0</div>
            </div></a>';
          } elseif ($userplan2 == "standard") {
            echo '  <a style="text-decoration:none;" href="threads.php?error=' . $threadid . '&threadplace=' . $error . '">
            <div class="threads">
              <img src="imgs/record.png"
                style="border-radius: 50%; padding-top: 5px; padding-left: 5px; padding-right: 5px;" width="50px">
              <div class="subject1">' . $title . '</div>
              <div class="name"> <i class="neonText1" style="margin-left:1px;"><a href="account.php?error=' . $uname . '">by ' . $uname . '</a></i>, ' . $date . '</div>
              <div class="reply2">0</div>
            </div></a>';
          } elseif ($userplan2 == "Basic") {
            echo '         <a style="text-decoration:none;" href="threads.php?error=' . $threadid . '&threadplace=' . $error . '">
            <div class="threads">
              <img src="imgs/record.png"
                style="border-radius: 50%; padding-top: 5px; padding-left: 5px; padding-right: 5px;" width="50px">
              <div class="subject1">' . $title . '</div>
              <div class="name"> <i class="flux" style="margin-left:1px;"><a href="account.php?error=' . $uname . '">by ' . $uname . '</a></i>, ' . $date . '</div>
              <div class="reply2">0</div>
            </div></a>';
          } else {
            echo ' <a style="text-decoration:none;" href="threads.php?error=' . $threadid . '&threadplace=' . $threadtype . '"><div class="threads">
            <img src="imgs/record.png" style="border-radius: 50%; padding-top: 5px; padding-left: 5px; padding-right: 5px;"
            width="50px">
      <div class="subject1">' . ucfirst($title) . '</div>
      <div class="name"> <i class="i" style="margin-left:1px;"><a href="account.php?error=' . $uname . '">by ' . $uname . '</a></i>,' . $date . '</div>
      
      </div></a>';
          }

        } else {
        }



      }
      echo '
      </div>
      <div class="numbers">
      <center><b class="innum" onclick="showthreads(1)">1</b><b class="innum" onclick="showthreads(2)">2</b><b class="innum" onclick="showthreads(3)">3</b><b onclick="showthreads(4)" class="innum">4</b><b onclick="showthreads(5)" class="innum">5</b>
        </center>
      </div>
      </div>
      </div>';
    }


    ?>

</section>
<script>
  function showthreads(num) {
    if (num == 1) {
      document.getElementById(1).style.display = 'block';
      document.getElementById(2).style.display = 'none';
      document.getElementById(3).style.display = 'none';
      document.getElementById(4).style.display = 'none';
      document.getElementById(5).style.display = 'none';

    }
    else if (num == 2) {
      document.getElementById(2).style.display = 'block';
      document.getElementById(1).style.display = 'none';
      document.getElementById(3).style.display = 'none';
      document.getElementById(4).style.display = 'none';
      document.getElementById(5).style.display = 'none';

    }
    else if (num == 3) {
      document.getElementById(3).style.display = 'block';
      document.getElementById(2).style.display = 'none';
      document.getElementById(1).style.display = 'none';
      document.getElementById(4).style.display = 'none';
      document.getElementById(5).style.display = 'none';
    }
    else if (num == 4) {
      document.getElementById(4).style.display = 'block';
      document.getElementById(2).style.display = 'none';
      document.getElementById(3).style.display = 'none';
      document.getElementById(1).style.display = 'none';
      document.getElementById(5).style.display = 'none';

    }
    else if (num == 5) {
      document.getElementById(5).style.display = 'block';
      document.getElementById(2).style.display = 'none';
      document.getElementById(3).style.display = 'none';
      document.getElementById(4).style.display = 'none';
      document.getElementById(1).style.display = 'none';

    }
  }
</script>



<?php
include 'foot.php';
?>