  <link rel="stylesheet" href="style.css">
  <div style="margin: auto; width:50%;">
<?php
  $db = new mysqli("localhost", "iconjone", "MgtZGj6rZjbRz8QZ", "jitter");



  $fields        = array(
     'fName',
     'lName',
     'uName',
     'email',
     'password',
     'cPassword',
     'gender'
  );
$error = false;
  $formSubmitted = true;
  foreach ($fields AS $field) {
     if (!isset($_POST[$field]))
         $formSubmitted = false;
  }
  if ($formSubmitted)
     foreach ($fields as $field)
         $$field = $_POST[$field];

var_dump($password);
echo "<br>";
var_dump($cPassword);
       if($cPassword != $password)
       $error = true;
       var_dump($error);
    //   var_dump($error);
     $password_hash = password_hash($password, PASSWORD_DEFAULT);
//var_dump($password_hash);


if(!($error)){
  $sqlimport = $db->prepare("INSERT INTO user_list (firstName, lastName, username, email, password, gender ) VALUES (?, ?, ?, ?, ?, ?)");

  $sqlimport->bind_param("ssssss", $fName, $lName, $uName, $email, $password_hash, $gender);


  $sqlimport->execute();



/*
  $result = $sqlimport->insert_id();
  var_dump($result);
  if(!($result))
  {
    $error = true;
  }
  */

$sqlimport->close();






if($formSubmitted && !$error){
  echo "  <div style=\"margin: auto; width:50%;\">";
echo "<h1 class=\"centerdivpls\">Thanks For Registering " . $fName . " " . $lName . "</h1>";
echo "</div>";

}

}

if($error){

  echo "  <div style=\"margin: auto; width:50%;\">";
echo "<h1 class=\"centerdivpls\">  Register Error" . "</h1>";
echo "</div>";
?>

<a class="work-proc2-a" href="register.php">

                  <div class="work-proc2-bg-block">
                    <div class="work-proc2-a-text" style:"float: right">
                      Go back boi<br><span class="border-bot">u dummy</span>
                    </div>
                  </div>
                </a>


<?php

}

$db->close();



?>
</div>
