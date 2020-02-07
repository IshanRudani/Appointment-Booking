<?php
session_start();
$con = mysqli_connect('127.0.0.1','root','','user');

    $username = $_SESSION['username'];

    $rec = mysqli_query($con, "SELECT first_name,last_name,email,phone,date,time,uname FROM appointment WHERE share_app='$username'");
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>View Shared appointment</title>
    <style>
      body {
        background: #56ab2f;
        background: -webkit-linear-gradient(to right, #a8e063, #56ab2f);
        background: linear-gradient(to right, #a8e063, #56ab2f);
        font-family: Arial, Helvetica, sans-serif;
      }
      h1 {
        text-align: center;
        border-bottom: 2px solid;
      }
      table {
        margin: auto;
        width: 60%;
        padding: 3px;
        border: none;
        font-size: 150%;
      }
      tr,
      th,
      td {
        padding: 3px;
        font-weight: 300;
      }

      .delete,
      .delete:hover {
        background-color: red;
        color: #fff;
      }

      .delete:hover {
        background-color: rgb(177, 3, 3);
      }

      a {
        text-decoration: none;
        color: rgb(0, 0, 0);
        background-color: rgb(121, 185, 0);
        padding: 8px;
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
        background-color: rgb(4, 160, 30);
      }

      .main-nav {
        margin-top: 1rem;
      }
    </style>
  </head>
  <body>
    
    <div class="main-nav">
      <a class="nav" href="home.php"> Home </a> &nbsp;
      <a class="nav" href="logout.php"> Logout </a><br />
    </div>
    <br />
    <h1>View Shared appointment</h1>

    <table class="table" border="1">
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Date</th>
        <th>Time</th>
        <th>Shared By</th>
      </tr>
      <?php while ($row = mysqli_fetch_array($rec)) { ?>

      <tr>
        <td><?php echo $row['first_name']; ?></td>
        <td><?php echo $row['last_name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['date'];?></td>
        <td><?php echo $row['time'];?></td>
        <td><?php echo $row['uname'];?></td>
      </tr>
      <?php } ?>
    </table> <br>

  </body>
</html>
