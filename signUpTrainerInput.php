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

 header('Location: trainerLogin.html');
 $sql = "INSERT INTO  trainer (username,name,email,password)
         VALUES ('$usernameInput','$name','$email','$passwordInput')";


 mysqli_query($con, $sql);
 mysqli_close($con);
?>
