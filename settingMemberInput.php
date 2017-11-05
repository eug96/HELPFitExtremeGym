<?php
  session_start();
  $usernameInput=$_SESSION['username'];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "helpfitextremegym";
  $con = new mysqli($servername, $username, $password, $dbname);

  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $level=$_POST['level'];

  if($name!=''&&$password!=''&&$email!=''){
    $sql="SELECT * FROM member WHERE username='$usernameInput'";
    $result=mysqli_query($con,$sql);

    if(mysqli_num_rows($result) > 0){
      $sql="UPDATE member SET name='$name',email='$email',password='$password',level='$level' WHERE username='$usernameInput'";
      if (mysqli_query($con, $sql)) {
        echo "<script type='text/javascript'>alert('Your Info has been Updated')</script>";
        header( "refresh:0.1; memberPage.php" );
      }
    }
  }
  else{
    echo "<script type='text/javascript'>alert('Please Fill In the Blank')</script>";
    header("refresh:0;memberSetting.php");
  }
  mysqli_close($con);
?>
