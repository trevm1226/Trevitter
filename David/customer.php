<html>
<head>
  <
$db = new mysqli("localhost", “username", “password", “database");


$sql = “[SQL]";
$stmt = $db->prepare($sql);


$stmt->bind_param(“[i|d|s]", $arg1, $arg2, …);


$stmt->execute();
$result = $stmt->get_result();


$rows = array();
while($row = $result->fetch_assoc)
{
  $rows[] = $row;
}


$stmt->close();
