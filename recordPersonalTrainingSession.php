<?php
session_start();
$name=$_SESSION['name'];
 ?>
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


  <body onload="dateFormat()">
    <!--Include JQuery: necessary for Bootstrap plugins-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
        <a href="signOut.php">LOG OUT</a>
      </li>
    </ul>

    <ul class ="nav navigation nav-tabs navbar-right" style="margin-right: -15px;">
      <li class="nav nav-tabs">
        <a href="trainerSetting.php">SETTING</a>
      </li>
    </ul>

    <div class="trainerPage">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-md-12 header" style="text-transform:uppercase">
            <h3><span>WELCOME <?php echo " ". $name.""; ?>! ENTER THE
              INFO TO CREATE A TRAINING SESSION</span></h3>
          </div>
        </div>

    <form onsubmit="return recordPersonalTraningSession()"
     action="recordPersonalSessionInput.php" method="post">
        <div class="row">
          <div class="form-group">
            <div class="col-xs-12 col-md-12 col-md-offset-4 recordForm">
              <input type="text" style="height:70px" name="title"
               class=" form form-control input-lg" id="inputTitle"
               placeholder="TITLE">
            </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-md-12 col-md-offset-4 recordForm">
          <input type="date" style="height:70px;" name="date"
            class=" form form-control input-lg" id="inputDate">
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-md-12 col-md-offset-4 recordForm">
          <input type="time" style="height:70px" name="time"
          class=" form form-control input-lg" id="inputTime"
           placeholder="TIME">
        </div>
      </div>

        <div class="row">
          <div class="col-xs-12 col-md-12 col-md-offset-4 recordForm">
            <input type="number" style="height:70px" name="fee" class="
             form form-control input-lg" id="inputFee"
             placeholder="FEE (In Numbering Format)">
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-md-12 col-md-offset-4 recordForm">
            <input type="text" style="height:70px" name="notes" class="
             form form-control input-lg" id="inputNotes"
             placeholder="NOTES">
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-md-12 col-md-offset-4 recordForm">
            <select class="form-control listbox" name="status" id="inputStatus"
             style="width:470px;height:70px;font-size: 18px;">
              <option>AVAILABLE</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-4 col-md-2 col-md-offset-4"
          style="margin-right:1.5%">
            <button type="submit" class="setting">CREATE</button>
          </div>
          <div class="col-xs-4 col-md-2">
            <a href="trainerPage.php"><button type="button"
               class="setting">BACK</button></a>
          </div>
      </form>
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
            <div class="col-xs-12 col-md-4 footertext">
              @2017 HELPFIT EXTREME GYM
            </div>
          </div>
        </div>

  </body>


</html>
