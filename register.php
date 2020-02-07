<!DOCTYPE html>
<html>
  <head>
    <meta charset="ISO-8859-1" />
    <title>Registration</title>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,200,300,300i,400&display=swap" rel="stylesheet"/>
    <!-- CSS -->
    <link rel="stylesheet" href="style-register.css" type="text/css"/>
  </head>
  <body>

    <form action="registration.php" method="post">
      <h1>User Registration</h1>
      <div class="main-login row">
        
        <div class="main-blocks">
          <div class="label">
            <label for="password">Username</label>
          </div>
          <div class="input">
            <input type="text" name="username" required/>
          </div>
        </div>
        <div class="main-blocks">
          <div class="label">
            <label for="password">Password</label>
          </div>
          <div class="input">
            <input type="password" name="password" required/>
          </div>
        </div>
        <div class="register">
          <input type="submit" name="submit" value="Register" />
        </div>
      </div>
    </form>
    
  </body>
</html>