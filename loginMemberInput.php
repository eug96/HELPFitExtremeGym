<?php
 session_start();
 if(isset($_POST['submit']))
 {
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "helpfitextremegym";
   $con = new mysqli($servername, $username, $password, $dbname);


   $usernameInput=$_POST['username'];
   $passwordInput=$_POST['password'];

   if($usernameInput!=''&&$passwordInput!='')
    {
       $sql = "SELECT username FROM member WHERE username='$usernameInput' and password='$passwordInput'";
       $result =  mysqli_query($con, $sql);

       if (mysqli_num_rows($result) > 0) {
         $sql = "SELECT * FROM member WHERE username='$usernameInput'";
         $result2= mysqli_query($con,$sql);

         if(mysqli_num_rows($result2) > 0){
           while($row = mysqli_fetch_assoc($result2)){
             echo $_SESSION['name']=$row['name'];
             echo $_SESSION['email']=$row['email'];
             echo $_SESSION['password']=$row['password'];
             echo $_SESSION['level']=$row['level'];
           }
         }

         header('Location: memberPage.php');
       }

       else{
         echo"<script type='text/javascript'>alert('Incorrect Username or Password')</script>";
         header( "refresh:0.1; url=memberLogin.html" );
       }
     }
     else {
         echo"<script type='text/javascript'>alert('Enter both username and password')</script>";
         header( "refresh:0.1; url=memberLogin.html" );
       }
  }
?>
