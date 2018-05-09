<html>
  <head>
    <title> Test.html </title>
  </head>
  <body>

    <?php


  $db = new mysqli("localhost", "iconjone", "MgtZGj6rZjbRz8QZ", "chinook");


$sql = "SELECT InvoiceId FROM invoice";

// $arg1 = "Robert";
// $arg2 = "Brown";

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

$id = $row['TrackId'];
$Name = $row['Name'];


echo "<a href=\"" . "order.php?id=" . $id . "\" > <ul> "  .  $Name . "</ul>  </a> <br>";

}
}


$rows = array();
while($row = $result->fetch_assoc())
{
  $rows[] = $row;

}
echo $rows[0]["FirstName"] . " " . $rows[0]["LastName"] ;

$stmt->close();

?>

  </body>
</html>
