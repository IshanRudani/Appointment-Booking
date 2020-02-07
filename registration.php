<?php
 
    session_start();

    $con = mysqli_connect('127.0.0.1','root','');
    mysqli_select_db($con, 'user');  

    $username = $_POST['username'];
    $password = $_POST['password'];

    $select = " select * from userprimary where name='$username'";
    
    $result = mysqli_query($con, $select);
    $num = mysqli_num_rows($result);

    if($num == 1){
      echo "Username taken. Please try different username";

    } else {
      $register = "INSERT INTO userprimary(name, password) VALUES ('$username', '$password')";
      mysqli_query($con, $register);
      $_SESSION['username'] = $username;
      echo "Your registration was successful. Please go back to login";
      header('location:home.php');
    }

    ?>