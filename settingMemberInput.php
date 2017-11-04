<?php
  session_start();
  $name=$_SESSION['name'];
  $email=$_SESSION['email'];
  $password=$_SESSION['password'];
  $level=$_SESSION['level'];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "helpfitextremegym";
  $con = new mysqli($servername, $username, $password, $dbname);


  $newName=$_POST['name'];
  $newEmail=$_POST['email'];
  $newPassword=$_POST['password'];
  $newLevel=$_POST['level'];

  $name=$newName;
  $email=$newEmail;
  $password=$newPassword;
  $level=$newLevel;
  
  $sql = "UPDATE member SET name = $name";
  $sql = "UPDATE member SET email = $email";
  $sql = "UPDATE member SET password = $password";
  $sql = "UPDATE member SET level = $level";

  echo"<script type='text/javascript'>alert('Your Info has been Updated')</script>";
  header("Location:memberPage.php");

  mysqli_query($con, $sql);
  mysqli_close($con);

?>
