<?php
include 'head.php';
?>



<section class="section2">
  <br />
  <center>
    <h2 style="color: aliceblue; font-weight: 400;">Post thread</h2>

  </center>

  <div class="members">
    <div style="font-size: larger; font-weight: 500; color: rgb(223, 228, 233)">
      New threads
    </div>
  </div>
  <br>
  <div id="second2" class="mainsection1">
    <form action="includes/threaddata.php" method="post">
      <h3 class="sub">Title: </h3>
      <input style="color:white;" class="subject" name="title" required>
      <input type="hidden" name="get" value="<?php $get = $_GET['error'];
      echo $get; ?>">

      <h3 class="sub2">Discription : </h3>
      <div class="helno">
        <img class="b" src="imgs/bold.png" width="25px">
        <img class="b" src="imgs/italic.png" width="25px">
        <img class="b" src="imgs/underline.png" width="25px">
        <img class="b" src="imgs/link.png" width="25px">
        <img class="b" src="imgs/image.png" width="25px">
      </div>

      <textarea class="message" name="discription" rows="7" cols="36" required></textarea>
      <button class="post1" type="submit" name="submit">Post thread</button>
      <center>
        <p style="color:white; margin-bottom:2px;">Only premium users can make important thread</p>
      </center>
      <button class="post1" type="submit" name="submitimp">Post as important thread</button>
    </form>

  </div>
</section>

<?php
include 'foot.php';
?>