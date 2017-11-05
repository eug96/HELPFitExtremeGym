<html>

  <head>
    <link rel="stylesheet" href="style.css">

    <title>
        HELPFIT EXTREME GYM
    </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">
  </head>


  <body>
    <!--Include JQuery: necessary for Bootstrap plugins-->
    <script
    src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
    </script>
    <!--Include bootstrap library as needed-->
    <script src="js/bootstrap.min.js"></script>
    <script src="javascript.js"></script>

      <div class="container-fluid containerplus">
        <div class="row">
          <div class"col-md-4">
            <img src="Logo.jpg" style="position: absolute;"></img>
          </div>
        </div>
      </div>

      <ul class ="nav navigation nav-tabs navbar-right">
        <li class="nav nav-tabs">
          <a href="home.html">LOG OUT</a>
        </li>
      </ul>

      <ul class ="nav navigation nav-tabs navbar-right"
      style="margin-right:-15px;">
        <li class="nav nav-tabs">
          <a href="memberSetting.html">SETTING</a>
        </li>
      </ul>

      <div class="memberPage">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12 col-md-12 header" style="margin-bottom:1%">
              <h1><span>WELCOME EUGENE</span></h1>
            </div>
          </div>

        <div class="row">
          <div class="col-xs-12 col-md-12">
            <table class="table table-bordered tableStyle">
                <tr>
                  <th class="col-md-1 col-xs-1">SESSION ID</th>
                  <th class="col-md-1 col-xs-1">TITLE</th>
                  <th class="col-md-1 col-xs-1">DATE</th>
                  <th class="col-md-1 col-xs-1">TIME</th>
                  <th class="col-md-1 col-xs-1">TYPE</th>
                  <th class="col-md-1 col-xs-1">STATUS</th>
                  <th class="col-md-1 col-xs-1">TRAINER</th>
                  <th class="col-md-2 col-xs-2">TRAINER SPECIALTY</th>
                </tr>

                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "helpfitextremegym";
                $con = new mysqli($servername, $username, $password, $dbname);

                $sql = "SELECT * FROM trainingsessionformember";
                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result) > 0) {
                   while($row = mysqli_fetch_assoc($result)) {
                     echo '<tr>
                     <td>'. $row["sessionID"].'</td>
                     <td>'. $row["title"].'</td>
                     <td>'. $row['dateInput'] . '</td>
                     <td>'. $row['timeInput'].'</td>
                     <td>'. $row["type"].'</td>
                     <td>'. $row["status"].'</td>
                     <td>'. $row["trainer"].'</td>
                     <td>'. $row["trainerSpecialty"].'</td>
                     </tr>';
                    }
                }

                ?>

            </table>
          </div>
        </div>

      <form onsubmit="return AttendTrainingSession()" action="registerTrainingSessionInput.php" method="post">
        <div class="row">
          <div class="col-xs-12 col-md-12">
            <select class="form-control" name="chooseTrainingSession"
            id="inputChooseTrainingSession"
             style="width:310px;height:40px;font-size: 18px;">
              <option>CHOOSE TRAINING SESSION
                <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "helpfitextremegym";
                  $con = new mysqli($servername, $username, $password, $dbname);

                  $sql = "SELECT * FROM trainingsessionformember";
                  $result = mysqli_query($con, $sql);

                  if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                      echo '<option value="' . $row['sessionID'] . '">' . $row['sessionID'] . '</option>';
                    }
                  }
                  else{
                    echo "no result";
                  }
                 ?>
              </option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-4 col-md-1 col-md-offset-8"
          style="margin-right:8.5%;margin-top:2%">
            <button type="submit" class="setting">ATTEND</button>
          </div>

          <div class="col-xs-4 col-md-1" style="margin-top:2%">
            <a href="memberPage.html">
              <button type="button" class="setting">BACK</button></a>
          </div>
      </div>
    </form>

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
            <div class="col-xs-12 col-md-4 footertext">
              @2017 HELPFIT EXTREME GYM
            </div>
          </div>
        </div>

  </body>


</html>
