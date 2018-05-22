<html>
  <head>
    <link rel="stylesheet" type="text/css" href="register.css">
  </head>
  <body>
  <a href="homepage.php">Return home</a>
  <br>
    <form method="post" action = "register.php">
      <div>
        <h1>REGISTRATION FORM</h1>
      </div>
      <div>
        <label for="user">Username:</label>
        <input id="user" name="username">
      </div>
      <div>
        <label for="emale">E-Mail:</label>
        <input id="emale" name="email">
      </div>
      <div>
        <label for="pw">Password:</label>
        <input id="pw" type="password" name="password">
      </div>
      <div>
        <label for="pwconf">Confirm Password:</label>
        <input id="pwconf" type="password" name="passwordConfirmation">
      </div>
      <div>
        <button>REGISTER</button>
      </div>
    </form>
  </body>
</html>
