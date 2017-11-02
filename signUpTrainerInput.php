<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "helpfitextremegym";
 $con = new mysqli($servername, $username, $password, $dbname);

 $usernameInput=$_POST['username'];
 $name=$_POST['name'];
 $email=$_POST['email'];
 $passwordInput=$_POST['password'];
 $specialty=$_POST['specialty'];

 $sql = "SELECT username FROM trainer WHERE username='$usernameInput'";
 $result =  mysqli_query($con, $sql);

 if (mysqli_num_rows($result) > 0) {
   echo"<script type='text/javascript'>alert('Username has been used, ' +
   'Please Enter a Different Username')</script>";
   header( "refresh:0.1; url=signUpTrainer.html" );
   }
 else{
   echo"<script type='text/javascript'>alert('Username has been register ' +
   'Successfully!!!')</script>";
   header('refresh:0.1; url=trainerLogin.html');
   $sql = "INSERT INTO  trainer (username,name,email,password,specialty)
           VALUES ('$usernameInput','$name','$email','$passwordInput','$specialty')";
 }
 mysqli_query($con, $sql);
 mysqli_close($con);
?>
