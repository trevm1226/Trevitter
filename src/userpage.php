<?php
  session_start();
  $db = new mysqli("localhost", "trevm12", "CxgY8Eb2tA006aAL", "faketwitter");

  if ($db->connect_errno)
  {
    echo "Sorry, this website is experiencing problems.";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
  }
?>
<html>
<head><title><?php echo $_GET["username"]?></title></head>
<body>
<a href="homepage.php">Return home</a>
<br>
<div>
  <h1>
  <?php
  $selecteduser = $_GET["username"];

  $usersql = "SELECT * FROM userinfo WHERE username=?";
  $userstmt = $db->prepare($usersql);
  $userstmt->bind_param("s", $selecteduser);
  $userstmt->execute();
  $userresult = $userstmt->get_result();
  $user = $userresult->fetch_assoc();
  echo $user['username'];
  echo " ". "<a href=follow.php?followeduser=".$user['username']."> Follow/Unfollow </a>";
  $userstmt->close();
  ?>
  </h1>

  </div>
  <div>
  <?php
    $tweetsql = "SELECT * FROM tweetinfo WHERE username='".$selecteduser."'";
    //var_dump($selecteduser);  
    $tweets = $db->query($tweetsql);
    //var_dump($tweets);
    foreach($tweets AS $tweet)
    {
      echo "<br>";
      echo $tweet['tweetcontent'];
      echo "<br>";
      echo "by <a href='userpage.php?username=". $tweet['username']."'>" . $tweet['username'] . "</a>";
      echo "<br>";
      echo "with " . $tweet['numLikes'] . " likes";
      echo "<br>";
      echo "<a href='tweetpage.php?tweetid=".$tweet['tweetid']."'>" . "View this tweet on its own page!" . "</a>";
      echo "<br>";
    }
  ?>
  </div>
</body>
</html>
