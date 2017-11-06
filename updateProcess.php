<?php
session_start();
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "helpfitextremegym";
 $con = new mysqli($servername, $username, $password, $dbname);

 $choice = $_POST['chooseSession'];
 $newDate = date('Y-m-d H:i:s', strtotime($_POST['inputDate']));
 // $newDate = $_POST['inputDate'];
 $newTime = $_POST['inputTime'];
 // $newTime =date('H:i:s',strtotime($_POST['inputTime']));
 $newFee = $_POST['inputFee'];
 $newClass = $_POST['selClass'];
 $newStatus = $_POST['selStatus'];

 // $sql = "SELECT sessionID FROM trainingsession WHERE sessionID='$choice'";
 $sql = "SELECT sessionID FROM viewtraininghistory WHERE sessionID='$choice'";
 $result = mysqli_query($con,$sql);

 // header('Location: updatetraining.php');
 // if(mysqli_num_rows($result) > 0){
 //   $sql = "UPDATE trainingsessionformember SET newDate = '$dateInput',
 //   newTime = '$timeInput', newFee = '$fee', newClass = '$type', newStatus = '$status' WHERE sessionID='$choice'";
 //   $sql = "UPDATE trainingsession SET newDate = '$dateInput',
 //   newTime = '$timeInput', newFee = '$fee', newClass = '$type', newStatus = '$status' WHERE sessionID='$choice'";
 // }

 header('refresh:0;url=updatetraining.php');
 if(mysqli_num_rows($result) > 0){
  //  $sql = "UPDATE viewtraininghistory SET dateInput = '$newDate',
  //  timeInput = '$newTime', fee = '$newFee', type='$newClass' , status = '$newStatus' WHERE sessionID='$choice'";
   $sql = "UPDATE viewtraininghistory SET dateInput = '$newDate',
   timeInput = '$newTime', fee = '$newFee', type='$newClass' , status = '$newStatus' WHERE sessionID='$choice'";
 }
echo "<script type='text/javascript'>alert('Your training session has been updated!')</script>";
 mysqli_query($con, $sql);
 mysqli_close($con);
?>
