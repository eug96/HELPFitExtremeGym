<?php
session_start();
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "helpfitextremegym";
 $con = new mysqli($servername, $username, $password, $dbname);

 $choice = $_POST['chooseSession'];

$inputRating = $_POST['rating'];
$inputComment = $_POST['comment'];
$currentTime = new DateTime($currentTime);
$currentTimeFormat = date('y-m-d H:i:s',strtotime($currentTime));

 $sql = "SELECT * FROM trainingsessionformember WHERE sessionID='$choice'";
 $result = mysqli_query($con,$sql);

 header('refresh:0;url=reviewtrainer.php');
 if(mysqli_num_rows($result) > 0){
   $sql = "UPDATE trainingsessionformember SET reviewScore = reviewScore+'$inputRating',
    reviewCount= reviewCount+1, comment = '$inputComment'  WHERE sessionID='$choice'";
 }
echo "<script type='text/javascript'>alert('Your review has been sent!')</script>";
 mysqli_query($con, $sql);
 mysqli_close($con);

?>
