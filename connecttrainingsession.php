<?php
//Step 1: Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "helpfitextremegym";
$con = new mysqli($servername, $username, $password, $dbname);
if (!$con) {
 die("Could not connect to database");
 }
// echo "connected!!"."</br>";

//Step 2: Query
$sql = "SELECT * FROM trainingsession";

$result = mysqli_query($con, $sql);



//Step 3: Display result
// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//    while($row = mysqli_fetch_assoc($result)) {
//      echo '<tr>
//      <td>'. $row["sessionID"].'</td>
//      <td>'. $row["title"].'</td>
//      <td>'. date('d F, Y', strtotime($row['dateInput'])) . '</td>
//      <td>'. date('G:i',strtotime($row['timeInput'])).'</td>
//      <td>'. $row["type"].'</td>
//      </tr>';
        // echo "Title:" . $row["title"]. " Type: " . $row["type"]."</br>";
//     }
// } else {
//     echo "0 results";
// }
 ?>
