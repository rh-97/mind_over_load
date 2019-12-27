<?php

include 'inc/connect.php';

if (isset($_POST['signup'])) {
  $firstName = htmlentities(mysqli_escape_string($con, $_POST['first_name']));
  $lastName = htmlentities(mysqli_escape_string($con, $_POST['last_name']));
  $email = htmlentities(mysqli_escape_string($con, $_POST['email']));
  $passWord = htmlentities(mysqli_escape_string($con, $_POST['password']));
  $birthDate = htmlentities(mysqli_escape_string($con, $_POST['birth_date']));

  $insert = "insert into user_info(first_name, last_name, email, password, phone_no, DOB) values('$firstName', '$lastName', '$email', '$passWord', '', '$birthDate')";

  $run = mysqli_query($con, $insert);

  if ($run) {
    echo "<script>alert('$firstName, you have sccessfully registerd yourself!!!')</script>";
    header("Location: login.php");
  } else {
    $_SESSION['err'] = "Error: " . mysqli_error($con);
  }
}






 ?>
