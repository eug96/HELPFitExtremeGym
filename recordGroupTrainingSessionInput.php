<?php
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
 $sessionID = uniqid();

 header('Location: trainerPage.html');
 $sql = "INSERT INTO  trainingsession (sessionID,title,dateInput,timeInput,fee,status,maxParticipates,numParticipates,type)
         VALUES ('$sessionID','$title','$dateInput','$timeInput','$fee','$status',$maxParticipates,0,'Group ($classType)')";
 mysqli_query($con, $sql);

 $sql = "INSERT INTO  trainingsessionformember(sessionID,title,dateInput,timeInput,fee,status,maxParticipates,numParticipates,type,trainer,trainerspecialty)
        VALUES ('$sessionID','$title','$dateInput','$timeInput','$fee','$status',$maxParticipates,0,'Group ($classType)','Eugene','MMA')";
 mysqli_query($con, $sql);
 mysqli_close($con);
?>
