<?php
 session_start();
 $name=$_SESSION['name'];
 $specialty=$_SESSION['specialty'];
 $usernameInput=$_SESSION['username'];

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "helpfitextremegym";
 $con = new mysqli($servername, $username, $password, $dbname);

 $title=$_POST['title'];
 $dateInput=$_POST['date'];
 $timeInput=$_POST['time'];
 $fee=$_POST['fee'];
 $status=$_POST['status'];

 header('Location: trainerPage.php');
 $sql = "INSERT INTO  trainingsession (title,username,dateInput,timeInput,fee,status,maxParticipates,numParticipates,type)
         VALUES ('$title','$usernameInput','$dateInput','$timeInput','$fee','$status',1,0,'Personal')";
 mysqli_query($con, $sql);

 $sql = "INSERT INTO  trainingsessionformember(title,dateInput,timeInput,fee,status,maxParticipates,numParticipates,type,trainer,trainerspecialty)
         VALUES ('$title','$dateInput','$timeInput','$fee','$status',1,0,'Personal','$name','$specialty')";
 mysqli_query($con, $sql);



 mysqli_query($con, $sql);
 mysqli_close($con);
?>
