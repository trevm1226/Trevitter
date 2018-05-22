<?php
  session_start();
?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="register.css">
  </head>
  <body>
    <a href="homepage.php">Return home</a>
    <br>
    <form method="post" action="login.php">
      <div>
        <h1>LOGIN FORM</h1>
      </div>
      <div>
        <label for="user">Username:</label>
        <input id="user" name="username">
      </div>
      <div>
        <label for="pw">Password:</label>
        <input id="pw" type="password" name="password">
      </div>
      <div>
        <button>LOGIN</button>
      </div>
      <?php
        if($_SESSION['error'] !== NULL)
        {
      ?>
        <div>
          <?php
            echo $_SESSION['error'];
            ?>
        </div>
        <?php
        }
        ?>
    </form>
  </body>
</html>
