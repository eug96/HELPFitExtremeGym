<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["name"]);
unset($_SESSION["email"]);
unset($_SESSION["password"]);
unset($_SESSION["level"]);
unset($_SESSION["specialty"]);
header("refresh:0;url=home.html");
echo "<script type='text/javascript'>alert('You Have Successfully Signed Out')</script>";
?>
