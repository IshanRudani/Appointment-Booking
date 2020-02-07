<?php
    session_start();

    $con = mysqli_connect('127.0.0.1','root','');
    mysqli_select_db($con, 'user');  

    $username = $_POST['username'];
    $password = $_POST['password'];

    $select = " SELECT * FROM userprimary WHERE NAME='$username' && PASSWORD = '$password'";
    
    $result = mysqli_query($con, $select);
    $num = mysqli_num_rows($result);

    if($num == 1){
      $_SESSION['username'] = $username;
        header('location:home.php');
      } else {
        echo "Incorrect username or password!";
      }    
?>