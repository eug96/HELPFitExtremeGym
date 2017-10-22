<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "helpfitextremegym";
 $con = new mysqli($servername, $username, $password, $dbname);

 $username=$_POST['username'];
 $name=$_POST['name'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $level=$_POST['level'];


 $sql = "INSERT INTO  signupmember (username,name,email,password,level)
         VALUES ('$username','$name','$email','$password','$level')";

 mysqli_query($con, $sql);
 mysqli_close($con);
?>
