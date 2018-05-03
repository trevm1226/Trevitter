<html>
  <head>
    <title>Test website </title>
  </head>

  <body>
      <?php

      $db = new mysqli("localhost", "trevm12", "CxgY8Eb2tA006aAL", "chinook");

      if ($db->connect_errno)
      {
        echo "Sorry, this website is experiencing problems.";
        echo "Error: " . $mysqli->connect_error . "\n";
        exit;
      }

      $search = "" . ($_GET["q"]);

      $sql = "SELECT FirstName, LastName FROM customer WHERE FirstName LIKE ? OR LastName LIKE ?";
      $stmt = $db->prepare($sql);
      $stmt->bind_param("ss",$search,$search);

      $stmt->execute();
      $result = $stmt->get_result();
      $name = array();
      if($result->num_rows >0){
        while($row = $result->fetch_assoc()){
          $name[] = $row;
        }
      }


      //var_dump($name);
      echo '<ul>';
      foreach($name as $x){
       echo '<li>'. $x['FirstName'] . ','. $x['LastName'].'</li>';
      }
     echo "</ul>";
      ?>
  </body>
</html>
