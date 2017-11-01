<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "helpfitextremegym";
 $con = new mysqli($servername, $username, $password, $dbname);


 $usernameInput=$_POST['username'];
 $passwordInput=$_POST['password'];

 $sql = "SELECT username FROM member WHERE username='$usernameInput'";
 $sql = "SELECT username FROM member WHERE password='$passwordInput'";
 $result =  mysqli_query($con, $sql);

 if (mysqli_num_rows($result) > 0) {
   header('Location: memberPage.html');
   }

 else{
   echo"<script type='text/javascript'>alert('Incorrect Username or Password')</script>";
   header( "refresh:0.1; url=memberLogin.html" );
 }
?>
