<?php
include('bookings.php');
$username = $_SESSION['username'];

////dropdown menu of USER to share appointment
$dropdown = mysqli_query($con, "SELECT name FROM userprimary WHERE name != '$username'");

// fetching records to update
if (isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $edit_state = true;

  $rec = mysqli_query($con, "SELECT * FROM appointment WHERE id=$id");
  $record = mysqli_fetch_array($rec);

    $first = $record['first_name'];
    $last = $record['last_name'];
    $email = $record['email'];
    $phone = $record['phone'];
    $date = $record['date']; 
    $time = $record['time'];
    $id= $record['id'];
}

  if(!isset($_SESSION['username'])) {
    header('location:index.php');
  }
?>
<html>
  <head>
    <meta charset="ISO-8859-1" />
    <title>Appointment</title>

    <!-- Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,200,300,300i,400&display=swap" rel="stylesheet"/>
    <!-- CSS -->
    <link rel="stylesheet" href="style-appointment.css" />
  </head>
  <body>
    <div class="main-nav">
      <a class="nav" href="home.php"> Home </a> &nbsp;
        <a class="nav" href="logout.php"> Logout </a><br>
    </div>
    <br>

    <h1>Your Appointments</h1>
    <?php if(isset($_SESSION['msg'])): ?>
      <div>
        <?php
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
          ?>
      </div>
      <?php endif ?>
        <table class="table" border='1'>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Date</th>
            <th>Time</th>
            <th>Username</th>
            <th>Shared-With</th>
            <th colspan="2">Action</th>
          </tr>
          <?php while ($row = mysqli_fetch_array($results)) { ?>
            
            <tr>
              <td><?php echo $row['first_name']; ?></td>
              <td><?php echo $row['last_name']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['phone']; ?></td>
              <td><?php echo $row['date'];?></td>
              <td><?php echo $row['time'];?></td>
              <td><?php echo $row['uname'];?></td>
              <td><?php echo $row['share_app'];?></td>
              <td> <a href="appointment.php?edit=<?php echo $row['id']; ?>">Edit</a></td>
              <td><a class="delete" href="bookings.php?del=<?php echo $row['id']; ?>">Delete</a></td>
            </tr>
            <?php } ?>

          </table><br>

            <h2> Not Booked yet? Book an appointment! </h2><hr><br>
            <form action="bookings.php" method="post">
            
      <input type="hidden" name="id" value="<?php echo $id; ?>">

      <div class="main-login row">
        <div class="main-blocks">
          <div class="label">
            <label for="firstName">FirstName</label>
          </div>
          <div class="input">
            <input type="text" name="firstName" value="<?php echo $first; ?>" required>
          </div>
        </div>
        <div class="main-blocks">
          <div class="label">
            <label for="lastName">LastName</label>
          </div>
          <div class="input">
            <input type="text" name="lastName" value="<?php echo $last; ?>" required>
          </div>
        </div>
        <div class="main-blocks">
          <div class="label">
            <label for="email">Email</label>
          </div>
          <div class="input">
            <input type="email" name="email" value="<?php echo $email; ?>" required>
          </div>
        </div>
        <div class="main-blocks">
          <div class="label">
            <label for="phone">Phone</label>
          </div>
          <div class="input">
            <input type="tel" name="phone" maxlength="10" value="<?php echo $phone; ?>">
          </div>
        </div>
        <div class="main-blocks">
          <div class="label">
            <label for="date">Select Date</label>
          </div>
          <div class="input">
            <input type="date" name="date" value="<?php echo $date; ?>" required>
          </div>
        </div>
            <div class="main-blocks">
              <div class="label">
                <label for="time">Share Appointment</label>
              </div>
              <div class="input">
                  <select name="share">
                  <option value=''>&mdash;</option>
                    <?php
                    
                    while($rows = mysqli_fetch_array($dropdown)) {
                      $username = $rows['name'];
    
                      echo "<option value='$username'>$username</option>";
                    }
                    ?>
                  </select>
              </div>
            </div>
        <div class="main-blocks">
          <div class="label">
            <label for="time">Select Time</label>
          </div>
          <div class="input">
            <input type="time" name="time" value="<?php echo $time; ?>" required>
          </div>
        </div>
        
        <div class="register">
          <?php if ($edit_state == false): ?>
          <input type="submit" name="book" value="BOOK" />
          <?php else: ?>
          <input type="submit" name="update" value="UPDATE" />
          <?php endif ?>
        </div>
      </div> <br>
        
    </form>
  </body>
</html>