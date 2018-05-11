<?php
  $db = new mysqli("localhost", "trevm12", "CxgY8Eb2tA006aAL", "faketwitter");

  $fields = array('username', 'password', 'email', 'passwordConfirmation');
  $formSubmitted = true;
  foreach($fields AS $field)
  {
    $$fields = $_POST[$field];
    if(isset($_POST[$field]) == false)
    $formSubmitted = false;
  }
  if($formSubmitted)
  {
    var_dump($username, $password, $email, $passwordConfirmation);
    //if(strpos($fields['password'], $fields['passwordConfirmation']) !== false)
      $encrypted = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO userinfo (username, password, email, deleted) VALUES (?, ?, ?, false)";
      $stmt = $db.prepare($sql);
      $stmt->bind_param("sss", $username, $password, $email);
      $stmt->execute();
    foreach($fields AS $field)
    $$field = $_POST[$field];

    header("Location: /login.php");
  }
  else
  {
    header("Location: /registration.php");
  }
?>
