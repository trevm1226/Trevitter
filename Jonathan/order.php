<html>
  <head>
    <title> Test.html </title>
  </head>
  <body>

    <?php


  $db = new mysqli("localhost", "iconjone", "MgtZGj6rZjbRz8QZ", "chinook");


$sql = "SELECT invoice.CustomerId, track.Name, customer.FirstName, customer.LastName FROM invoiceline, invoice, track, customer WHERE invoice.CustomerId = ? AND customer.CustomerId = invoice.CustomerId AND invoiceline.InvoiceId = invoice.InvoiceId AND invoiceline.TrackID = track.TrackId";

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

echo $rows[0]["FirstName"] . " " . $rows[0]["LastName"] . "<br>";
echo "<br>";
echo "<br>";
for($i=sizeof($rows); $i>0; $i--)
echo  $rows[$i -1]["Name"] . "<br>";


$stmt->close();

?>

  </body>
</html>
