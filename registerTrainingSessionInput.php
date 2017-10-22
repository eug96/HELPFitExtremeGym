<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "helpfitextremegym";
 $con = new mysqli($servername, $username, $password, $dbname);

 $choice = $_POST['chooseTrainingSession'];

 $sql = "SELECT sessionID FROM trainingsession WHERE sessionID='$choice'";
 $sql = "SELECT sessionID FROM trainingsessionformember WHERE sessionID='$choice'";
 $result = mysqli_query($con,$sql);

 header('Location: memberPage.html');
 if(mysqli_num_rows($result) > 0){
   $sql = "UPDATE trainingsessionformember SET numParticipates = numParticipates+1
    WHERE sessionID='$choice'";
   $sql = "UPDATE trainingsession SET numParticipates = numParticipates+1
    WHERE sessionID='$choice'";
 }
 mysqli_query($con, $sql);
 mysqli_close($con);
?>
