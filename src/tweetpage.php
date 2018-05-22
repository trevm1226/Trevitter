<html>
<head><title>Individual Tweet Site</title></head>
<body>
  <a href="homepage.php">Return home</a>
  <br>
  <?php
  $db = new mysqli("localhost", "trevm12", "CxgY8Eb2tA006aAL", "faketwitter");

  if ($db->connect_errno)
  {
    echo "Sorry, this website is experiencing problems.";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
  }

  $id = $_GET["tweetid"];

  $sql = "SELECT * FROM tweetinfo WHERE tweetid=?";
  $stmt = $db->prepare($sql);
  $stmt->bind_param("i", $id);

  $stmt->execute();
  $result = $stmt->get_result();
  $tweet = $result->fetch_assoc();
  echo $tweet['tweetcontent'];
  echo "<br>";
  echo "by <a href='userpage.php?username=". $tweet['username']."'>" . $tweet['username'] . "</a>";
  echo "<br>";
  echo "with " . $tweet['numLikes'] . " likes";
  echo "<br>";
  $stmt->close();
  ?>
</body>
</html>
