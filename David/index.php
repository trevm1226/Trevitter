<html>
  <head>
    <title> Test.html </title>
  </head>
  <body>
    <?php
  $db = new mysqli("localhost", "password", "password", "chinook");
  if ($db->connect_errno){
    echo "Sorry, this website is experiencing problems.";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
}

$sql = "SELECT CustomerId, FirstName, LastName FROM customer";
$result = $db->query($sql);

if (!$result = $db->query($sql))
{
echo "Sorry, this website is experiencing problems.";
echo "Error: " . $mysqli->error . "\n";
exit;
}

if ($result->num_rows === 0){
echo "No results found.";
}
else{

while($row = $result->fetch_assoc()){

$id = $row['CustomerId'];
$fName = $row['FirstName'];
$lName = $row['LastName'];

echo "<ul>" . $id . "+" .  $fName . " " . $lName .  "</ul> <br>";

}
}

$albums = array();


if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc()){


$albums[] = $row;
}
}




var_dump($albums);

    ?>
  </body>
</html>
