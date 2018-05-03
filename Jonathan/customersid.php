<html>
  <head>
    <title> Test.html </title>
  </head>
  <body>

    <?php


  $db = new mysqli("localhost", "iconjone", "MgtZGj6rZjbRz8QZ", "chinook");


$sql = "SELECT CustomerId, FirstName, LastName FROM customer WHERE CustomerId=?";
$stmt = $db->prepare($sql);

$arg1 = $_GET["id"];
//$arg2 = $_GET["lName"];


// $arg1 = "Robert";
// $arg2 = "Brown";



$stmt->bind_param("i", $arg1);

$stmt->execute();
$result = $stmt->get_result();


$rows = array();
while($row = $result->fetch_assoc())
{
  $rows[] = $row;

}
echo $rows[0]["FirstName"] . " " . $rows[0]["LastName"] . " " . $rows[0]["CustomerId"] ;

$stmt->close();

?>

  </body>
</html>
