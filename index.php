<!DOCTYPE html>
<html>
  <head>
    <meta charset="ISO-8859-1" />
    <title>Login</title>
    <!-- Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,200,300,300i,400&display=swap" rel="stylesheet"/>
    <!-- CSS -->
    <link rel="stylesheet" href="style-login.css" type="text/css"/>
  </head>
  <body>
    <form class="row" action="userlogin.php" method="post">
      <div class="heading"> 
        <h1>Please Register or Login</h1>
      </div>

      <div class="main-login">
        <div class="main-blocks">
          <div class="label">
            <label for="password">Username:</label>
          </div>
          <div class="input">
            <input type="text" name="username" required/>
          </div>
        </div>
        <div class="main-blocks">
          <div class="label">
            <label for="password">Password:</label>
          </div>
          <div class="input">
            <input type="password" name="password" required/>
          </div>
        </div>
        <div class="main-blocks">
          <div class="label">
            <a href="register.php">Register</a>
          </div>
          <div class="input">
            <input type="submit" name="submit" value="Login" />
          </div>
        </div>
      </div>
    </form>
  </body>
</html>
