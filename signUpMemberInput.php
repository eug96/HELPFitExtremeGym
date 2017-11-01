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
 $level=$_POST['level'];

 $sql = "SELECT username FROM member WHERE username='$usernameInput'";
 $result =  mysqli_query($con, $sql);

 if (mysqli_num_rows($result) > 0) {
   echo"<script type='text/javascript'>alert('Username has been used, ' +
   'Please Enter a Different Username')</script>";
   header( "refresh:0.1; url=signUpMember.html" );
   }
 else{
   echo"<script type='text/javascript'>alert('Username has been register ' +
   'Successfully!!!')</script>";
   header('refresh:0.1; url=memberLogin.html');
   $sql = "INSERT INTO  member (username,name,email,password,level)
           VALUES ('$usernameInput','$name','$email','$passwordInput','$level')";
  }
 mysqli_query($con, $sql);
 mysqli_close($con);
?>
