<?php
 session_start();
 $usernameInput=$_SESSION['username'];


 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "helpfitextremegym";
 $con = new mysqli($servername, $username, $password, $dbname);

 $choice = $_POST['chooseTrainingSession'];

 $sql = "SELECT * FROM trainingsession WHERE sessionID='$choice'";
 $sql = "SELECT * FROM trainingsessionformember WHERE sessionID='$choice'";
 $result = mysqli_query($con,$sql);

 if(mysqli_num_rows($result) > 0){
   while ($row=mysqli_fetch_assoc($result)) {
     if($row['numParticipates']!=$row['maxParticipates']){
       $sql = "UPDATE trainingsessionformember SET numParticipates = numParticipates+1
        WHERE sessionID='$choice'";
       mysqli_query($con, $sql);

       $sql = "UPDATE trainingsession SET numParticipates = numParticipates+1
        WHERE sessionID='$choice'";
       mysqli_query($con, $sql);

       $sql="INSERT INTO viewtraininghistoryformember (username,sessionID,title,dateInput,timeInput,fee,status,maxParticipates,numParticipates,type,trainer,trainerSpecialty)
          SELECT '$usernameInput',sessionID,title,dateInput,timeInput,fee,status,maxParticipates,numParticipates,type,trainer,trainerSpecialty FROM trainingsessionformember WHERE sessionID='$choice'";


       header("refresh:0;url=memberPage.php");
       echo "<script type='text/javascript'>alert('You Have Attended Training Session $choice')</script>";
     }
     else{
       $sql = "UPDATE trainingsessionformember SET status = 'FULL'
        WHERE sessionID='$choice'";
       mysqli_query($con, $sql);

       $sql = "UPDATE trainingsession SET status = 'FULL'
        WHERE sessionID='$choice'";

       echo "<script type='text/javascript'>alert('Current Training Session is Full, Please Choose Other Training Session')</script>";
       header("refresh:0;url=registerTrainingSession.php");
     }
   }

 }
 mysqli_query($con, $sql);
 mysqli_close($con);
?>
