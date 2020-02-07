<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
<style>

body {
  background: linear-gradient(rgba(0,0,0,0.85),rgba(0,0,0,0.85)), url(booknow.png) center no-repeat;
  background-size: cover;
  font-family: Arial, Helvetica, sans-serif;
}
header{
    align-content: center;
    color: #fff;
    text-align:center;
    padding-top: 3rem;
    font-size: 130%;
    font-weight: 300;
}

  a {
  text-decoration: none;
  color: rgb(0, 0, 0);
  background-color: rgb(0, 62, 143);
  padding: 5px;
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  transition: all 500ms;
  -webkit-transition: all 500ms;
  -moz-transition: all 500ms;
  -ms-transition: all 500ms;
  -o-transition: all 500ms;
}
a:hover{
  background: rgb(0, 50, 116);
  color: rgb(212, 212, 212);
}
.logout{
  background-color: rgb(230, 230, 230);
  color: rgb(0, 0, 0) !important;
  padding: 5px;
  float: right;
  margin-top: -20px;
  margin-right: 20px;
}
.logout:hover{
  background-color: rgb(156, 156, 156);
}
.main-link{
  font-size: 130%;
  display: flex;
  justify-content: center;
}
.link {
  margin: 5px;
}
</style>

</head>
<body>
    <header>
       <a class="logout" href="logout.php"> Logout </a><br>

        <h1>Welcome <?php echo $_SESSION['username']; ?> !</h1>
        <div class="main-link">
          <div class="link">
            <h2><a href="appointment.php">Book appointment</a></h2>
          </div>
          <div class="link">
            <h2><a href="share.php">Shared appointment</a></h2>
          </div>
        </div>
    </header> 
</body>
</html>