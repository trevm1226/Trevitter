<?php
  session_start();

  $db = new mysqli("localhost", "trevm12", "CxgY8Eb2tA006aAL", "faketwitter");

  $fields = array('username', 'password',  'email', 'passwordConfirmation');
  $formSubmitted = true;
  foreach($fields AS $field)
  {
    $$field = $_POST[$field];
    if(isset($_POST[$field]) == false)
    $formSubmitted = false;
  }
  if($formSubmitted)
  {
    //var_dump($username, $password, $email, $passwordConfirmation);
    if(strcmp($password, $passwordConfirmation) !== 0){
        echo "Passwords must match!";
    }
    else{
      $encrypted = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO userinfo (username, password, email, deleted) VALUES (?, ?, ?, false)";
      $stmt = $db->prepare($sql);
      var_dump($stmt);  
      $stmt->bind_param("sss", $username, $encrypted, $email);
      $stmt->execute();
    
    foreach($fields AS $field)
    $$field = $_POST[$field];
    $_SESSION['username'] = $username;
    header("Location: /homepage.php");
    }
  }
  else
  {
    header("Location: /registration.php");
  }
?>
