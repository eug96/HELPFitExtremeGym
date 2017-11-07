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


  <body>
    <!--Include JQuery: necessary for Bootstrap plugins-->
    <script
    src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
    </script>
    <!--Include bootstrap library as needed-->
    <script src="js/bootstrap.min.js"></script>




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

    <ul class ="nav navigation nav-tabs navbar-right"
      style="margin-right: -15px;">
      <li class="nav nav-tabs">
        <a href="trainerSetting.php">SETTING</a>
      </li>
    </ul>


    <div class="trainerPage">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-md-12 header" style="text-transform:uppercase">
            <h1><span>WELCOME <?php echo " ". $name.""; ?></span></h1>
          </div>
        </div>

        <div class="row" style="margin-top:5%">
          <div class="col-xs-4 col-md-4 memberHome">
            <a href="viewtrainertraininghistory.html"><img src="trainingHistory.jpg"></img></a>
          </div>

          <div class="col-xs-4 col-md-4 memberHome">
            <a href="recordPersonalTrainingSession.php">
            <img src="personalTrainingSession.jpg"></img></a>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-4 col-md-4 memberHome" style="margin-top:1%">
            <a href="recordGroupTrainingSession.php">
            <img src="groupTrainingSession.jpg">
            </img></a>
          </div>
          <div class="col-xs-4 col-md4 memberHome"
            style="margin-top:1%">
            <a href="updatetraining.html"><img src="updateTrainingRecord.jpg"></img></a>
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
          <div class="col-xs-12 col-md-4 footertext">
            @2017 HELPFIT EXTREME GYM
          </div>
        </div>
      </div>

  </body>
</html>
