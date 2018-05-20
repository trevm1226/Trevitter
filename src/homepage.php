<?php
  session_start();
?>
<html>
<head>
  <title>Trevitter</title>
  <link rel="stylesheet" type="text/css" href="homepageStyle.css">
</head>
<body>
  <div class="top" id="topBox">
    <a href="homepage.php" id="homeButton">Trevitter</a>
    <column class="top" id="buttonsColumn">
    <?php
      if($_SESSION['username'] == NULL)
      {
      ?>
        <div class="top" id="loginButton">
          <a href="login.php">Login</a>
        </div>
        <br>
        <div><br>
        </div>
        <div class="top" id="registerButton">
          <a href="register.php">Register</a>
        </div>
      <?php
      }
      else
      {
      ?>
        <div>
          Welcome, 
          <?php
          echo $_SESSION['username'];
          ?>
        </div>
        <br>
        <div>
          <a href="logout.php">Logout</a>
        </div>
        <?php
      }
      ?>
    </column>
  </div>
  <div>
    <?php
      if($_SESSION['username'] !== NULL)
      {
    ?>
        <form action="tweet.php" method="post">
          <label for="twitcontent">twit:</label>
          <input id="twitcontent" name="twitinput">
        </form>
    <?php
      }
      else
      {
    ?>
        Login to twit!
    <?php
      }
    ?>
  </div>
  <div>
    <?php
      if($_SESSION['username'] == NULL)
      {
    ?>
        Login to view twits!
    <?php
      }
      else
      {
    ?>
      <div>
        twits:
      </div>
      <div>
        <!put tweets here>
        <?php
          $db = new mysqli("localhost", "trevm12", "CxgY8Eb2tA006aAL", "faketwitter");
          $sql = "SELECT * FROM tweetinfo";
          $tweets = $db->query($sql);
          foreach($tweets AS $tweet)
          {
            echo $tweet['tweetcontent'];
            echo "<br>";
            echo "by " . $tweet['username'];
            echo "<br>";
            echo "with " . $tweet['numLikes'] . " likes";
            echo "<br>";
            echo "<br>";
          } 
        ?>
      </div>
    <?php
      }
    ?>
  </div>
</body>
</html>
