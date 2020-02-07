<?php
session_start();

    $first = "";
    $last = "";
    $email = "";
    $phone = "";
    $date = ""; 
    $time = "";
    $id= 0;
    $edit_state = false;

    $con = mysqli_connect('127.0.0.1','root','','user');
    $user = $_SESSION['username']; 

   ////////// BOOK
    if(isset($_POST['book'])) {

        $first = $_POST['firstName'];
        $last = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $share = $_POST['share'];

        $query = "INSERT INTO appointment(first_name,last_name,email,phone,date,time,uname,share_app)
                    VALUES ('$first','$last','$email','$phone','$date','$time','$user','$share')";
        mysqli_query($con, $query);
        $_SESSION['msg'] = "<center><u>Thank you for booking you appointment</center></u><br>";
        header('location:appointment.php');
    }
    /////// Update
    if (isset($_POST['update'])) {
        $first = $_POST['firstName'];
        $last = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $share = $_POST['share'];
        $id = $_POST['id'];

        $q = mysqli_query($con, "UPDATE appointment SET 
          first_name='$first', last_name='$last', email='$email', phone='$phone', date='$date',time='$time',share_app='$share' WHERE id='$id'");
          $_SESSION['msg'] = "<center>Your appointment was updated</center><br>";
          header('location: appointment.php');
    }
    //////DELETE
    if(isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($con, "DELETE FROM appointment WHERE id=$id");
        $_SESSION['msg'] = "<center>Appointment Deleted</center><br>";
            header('location:appointment.php');
    }   
    ////// ONLY SHOW APPOINTMENT WHICH THE USER BOOKED
    $results = mysqli_query($con, "SELECT * FROM appointment WHERE uname = '$user' ");
?>