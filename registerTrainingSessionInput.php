<?php
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
   while ($row=$result) {
     
   }
   $sql = "UPDATE trainingsessionformember SET numParticipates = numParticipates+1
    WHERE sessionID='$choice'";
   mysqli_query($con, $sql);
   $sql = "UPDATE trainingsession SET numParticipates = numParticipates+1
    WHERE sessionID='$choice'";
    header('Location: memberPage.php');
 }
 mysqli_query($con, $sql);
 mysqli_close($con);
?>
