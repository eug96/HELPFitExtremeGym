<!DOCTYPE html>
<?php
  session_start();
  $name= $_SESSION['name'];
  $sessionUsername= $_SESSION['username'];
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>View Trainer History</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap-social.css">

  <link rel="stylesheet" href="css/bootstrap-theme.min.css">

  <link rel="stylesheet" href="css/mystyles.css">

  <link rel="stylesheet" type="text/css" href="style.css">

  <style media="screen">

    .rowplus{
      background-image: url('training.jpg');
      background-size: cover; /*That will make it responsive*/
    }
  </style>
</head>
<body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!--Include bootstrap library as needed-->
  <script src="js/bootstrap.min.js"></script>

  <div class="container-fluid containerplus">
    <div class="row">

      <div class"col-md-4">
        <img src="Logo.jpg" style="position: absolute;">
        </a></img>
      </div>

        </div>
      </div>

      <ul class ="nav navigation nav-tabs navbar-right">
        <li class="nav nav-tabs">
          <a href="signOut.php">LOG OUT</a>
        </li>
      </ul>

      <ul class ="nav navigation nav-tabs navbar-right" style="margin-right: -15px;">
        <li class="nav nav-tabs">
          <a href="memberSetting.php">SETTING</a>
        </li>
      </ul>




  <div id="viewbgimg">
  <div class="container-fluid">
    <!-- <img src="training.jpg" alt="Background" class="img-responsive"> -->
  <div class="row" >
  <br/>
  <div class="col-xs-12 col-md-12">
    <span class="welcome">Welcome, <span id="welcome"><?php echo " ". $name.""; ?></span></span>
  </div>

  </div>


  .<div class="row">

  <div class="col-md-12">
    <table class="table table-responsive table-bordered viewmember">

    <thead>
      <tr>
      <th class="col-md-2">Session ID</th>
      <th class="col-md-4">Title</th>
      <th class="col-md-2">Date</th>
      <th class="col-md-2">Time</th>
      <th class="col-md-2">Type</th>
      </tr>
    </thead>

    <tbody>
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
    $sql = "SELECT * FROM viewtraininghistoryformember WHERE username = '$sessionUsername'";
    $result = mysqli_query($con, $sql);



    //Step 3: Display result
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
       while($row = mysqli_fetch_assoc($result)) {
         echo '<tr>
         <td>'. $row["sessionID"].'</td>
         <td>'. $row["title"].'</td>
         <td>'. date('d F, Y', strtotime($row['dateInput'])) . '</td>
         <td>'. date('G:i',strtotime($row['timeInput'])).'</td>
         <td>'. $row["type"].'</td>
         </tr>';
            // echo "Title:" . $row["title"]. " Type: " . $row["type"]."</br>";
        }
    } else {
        echo "0 results";
    }
     ?>
   </tbody>
    </table>
    <br/>
  </div>

  <div class="row">
    <div class=" col-md-push-3 col-md-offset-9 col-sm-push-5 col-sm-offset-7">
      <a href="memberPage.php" class="navButton">Back</a>
      <a href="reviewtrainer.php" class="navButton">Review Trainer</a>
    </div>
  </div>

  </div>
  </div>
  </div>

  <div class="container-fluid footer">
    <div class="row">
      <div class="col-xs-1 col-md-1 col-xs-offset-5 icon"
      style="margin-top:33px">
        <div class="icon"><a href=https://www.facebook.com/>
        <img src = "facebook.png" height="55px" width="55px"></a></div>
      </div>

      <div class="col-xs-1 col-md-1  icon" style="margin-top:35px">
        <div class="icon"><a href=https://www.twitter.com/>
        <img src = "twitter.png" height="50px" width="50px"></a></div>
      </div>

      <div class="col-xs-1 col-md-1  icon" style="margin-top:35px">
        <div class="icon"><a href=https://www.google.com/>
        <img src = "google.png" height="50px" width="50px"></a></div>
      </div>

      <div class="col-xs-1 col-md-1  icon" style="margin-top:35px">
        <div class="icon"><a href=https://www.youtube.com/>
        <img src = "youtube.png" height="50px" width="50px"></a></div>
      </div>

      <div class="col-xs-1 col-md-1  icon" style="margin-top:33px">
        <div class="icon"><a href=https://www.instagram.com/>
        <img src = "instagram.png" height="54px" width="54px"></a></div>
      </div>

      </div>

      <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-6 footertext">
          @2017 HELPFIT EXTREME GYM
        </div>
    </div>

    </div>

</body>
</html>
