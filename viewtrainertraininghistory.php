<!DOCTYPE html>
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
        <a href="home.html"><img src="Logo.jpg" style="position: absolute;">
        </a></img>
      </div>

        </div>
      </div>

      <ul class ="nav navigation nav-tabs navbar-right">
        <li class="nav nav-tabs">
          <a href="home.html">LOG OUT</a>
        </li>
      </ul>

      <ul class ="nav navigation nav-tabs navbar-right" style="margin-right: -15px;">
        <li class="nav nav-tabs">
          <a href="trainerSetting.html">SETTING</a>
        </li>
      </ul>




  <div id="viewbgimg">
  <div class="container-fluid">
    <!-- <img src="training.jpg" alt="Background" class="img-responsive"> -->
  <div class="row" >
  <br/>
  <div class="col-xs-12 col-md-12">
    <span class="welcome">Welcome, <span id="welcome">Trainer</span></span>
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
      $dbname = "gym";
      $con = new mysqli($servername, $username, $password, $dbname);
      if (!$con) {
       die("Could not connect to database");
       }
      // echo "connected!!"."</br>";

      //Step 2: Query
      $sql = "SELECT * FROM traininghistory";
      // $sql = "SELECT * FROM books";
      // $sql = "SELECT * FROM books WHERE type='programming' AND price=70";
      // $sql = "SELECT * FROM books WHERE type='programming' OR price=70";
      $result = mysqli_query($con, $sql);



      //Step 3: Display result
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
         while($row = mysqli_fetch_assoc($result)) {
           echo '<tr>
           <td>'. $row["ID"].'</td>
           <td>'. $row["Title"].'</td>
           <td>'. date('d F, Y', strtotime($row['Date'])) . '</td>
           <td>'. date('G:i',strtotime($row['Time'])).'</td>
           <td>'. $row["Type"].'</td>
           </tr>';
              // echo "Title:" . $row["title"]. " Type: " . $row["type"]."</br>";
          }
      } else {
          echo "0 results";
      }
       ?>
     </tbody>

      <!-- <tr>
        <td>BIT 210</td>
        <td>Sport</td>
        <td>20/9/2017</td>
        <td>8PM</td>
        <td>Group (Sport)</td>
      </tr>
      <tr>
        <td>BIT 216</td>
        <td>Mass Gainer</td>
        <td>15/9/2017</td>
        <td>9PM</td>
        <td>Personal</td>
      </tr> -->
    </table>
  </div>

  <div class="row">
    <div class=" col-md-push-4 col-md-offset-8 col-sm-push-7 col-sm-offset-5">
      <a href="trainerPage.html" class="navButton">Back</a>
      <a href="updatetraining.html" class="navButton">Update Training Session</a>
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
