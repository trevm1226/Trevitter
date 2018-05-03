<html>
  <head>
    <title> Test.html </title>
  </head>
  <body>
    <form method="post" action="/customer/display()">
    First Name: <input type="text" name="fname"><br>
    Last Name: <input type="text" name="lname"><br>
    <input type="submit">
  </form>

    <?php
    function display(){

  $db = new mysqli("localhost", "iconjone", "MgtZGj6rZjbRz8QZ", "chinook");


$sql = "SELECT CustomerId, FirstName, LastName FROM customer WHERE FirstName=? AND LastName = ?";
$stmt = $db->prepare($sql);

$arg1 = "Robert";
$arg2 = "Brown";

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
}
?>

  </body>
</html>
