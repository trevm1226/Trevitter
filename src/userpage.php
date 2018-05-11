<html>
<head><title>Individual User Site</title></head>
<body>
  <?php
  $db = new mysqli("localhost", "trevm12", "CxgY8Eb2tA006aAL", "chinook");

  if ($db->connect_errno)
  {
    echo "Sorry, this website is experiencing problems.";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
  }

  $id = $_GET["id"];

  $sql = "SELECT FirstName, LastName FROM customer WHERE CustomerId=?";
  $stmt = $db->prepare($sql);
  $stmt->bind_param("i", $id);

  $stmt->execute();
  $result = $stmt->get_result();
  $name = $result->fetch_assoc();
  echo $name['FirstName'];
  $stmt->close();
  ?>
</body>
</html>
