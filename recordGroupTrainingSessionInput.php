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
 $maxParticipates=$_POST['maxParticipates'];
 $classType=$_POST['classType'];


 header('Location: trainerPage.php');
 $sql = "INSERT INTO  trainingsession (title,username,dateInput,timeInput,fee,status,maxParticipates,numParticipates,type)
         VALUES ('$title','$usernameInput','$dateInput','$timeInput','$fee','$status','$maxParticipates',0,'Group ($classType)')";
 mysqli_query($con, $sql);

 $sql = "INSERT INTO  trainingsessionformember(title,dateInput,timeInput,fee,status,maxParticipates,numParticipates,type,trainer,trainerspecialty)
        VALUES ('$title','$dateInput','$timeInput','$fee','$status','$maxParticipates',0,'Group ($classType)','$name','$specialty')";
 mysqli_query($con, $sql);




 mysqli_query($con, $sql);
 mysqli_close($con);
?>
