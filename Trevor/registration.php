<html>
  <head>
    <link rel="stylesheet" type="text/css" href="register.css">
  </head>
  <body>
    <form method="post" action = "register.php">
      <div>
        <h1>REGISTRATION FORM</h1>
      </div>
      <div>
        <label for="firstN">First Name:</label>
        <input id="firstN" name="firstName">
      </div>
      <div>
        <label for="lastN">Last Name:</label>
        <input id="lastN" name="lastName">
      </div>
      <div>
        <label for="gender">Gender:</label>
        <select id="gender" name="gen">
          <option value="m">Male</option>
          <option value="f">Female</option>
          <option value="oth">Other</option>
        </select>
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
