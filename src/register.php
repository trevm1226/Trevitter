
<?php
        $db = new mysqli("localhost", "trevm12", "CxgY8Eb2tA006aAL", "faketwitter");

        $fields = array('firstName', 'lastName', 'gen', 'username', 'email', 'password', 'passwordConfirmation');
        $formSubmitted = true;
        foreach($fields AS $field)
        {
          if(!isset($_POST[$field]))
            $formSubmitted = false;
        }
        if($formSubmitted)
        {
          $encrypted = password_hash($fields['password']);
          $sql = "INSERT INTO userinfo (username, password, email, firstName, lastName, gender, deleted) VALUES (?, ?, ?, ?, ?, ?, false)";
          $stmt = $db.prepare($sql);
          $stmt->bind_param("ssssss", $fields['username'], $fields['password'], $fields['email'], $fields['firstName'], $fields['lastName'], $fields['gender']);
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
