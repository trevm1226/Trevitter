<html>
  <head>
    <title> Test.html </title>
  </head>
  <body>

    <?php


  $db = new mysqli("localhost", "password", "password", "chinook");


$sql = "SELECT CustomerId, FirstName, LastName FROM customer WHERE FirstName=? AND LastName = ?";
$stmt = $db->prepare($sql);

$arg1 = $_GET["fName"];
$arg1 = $_GET["lName"];

// $arg1 = "Robert";
// $arg2 = "Brown";



$stmt->bind_param("ss", $arg1, $arg2 );

$stmt->execute();
$result = $stmt->get_result();


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
