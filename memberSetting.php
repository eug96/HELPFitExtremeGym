<?php
  session_start();
  $name=$_SESSION['name'];
  $email=$_SESSION['email'];
  $password=$_SESSION['password'];
  $level=$_SESSION['level'];
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
        <a href="memberSetting.php">SETTING</a>
      </li>
    </ul>

    <div class="memberPage">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-md-12 header">
            <h1><span>ENTER THE INFORMATION THAT YOU WANT TO CHANGE</span>
            </h1>
          </div>
        </div>

      <form action="settingMemberInput.php" method="post">
        <div class="row">
          <div class="col-xs-12 col-md-12 col-md-offset-4 settingForm">
            <h3>Name:</h3>
            <input type="text" style="height:70px;"
            name="name" class=" form form-control input-lg" id="inputName"
            placeholder="NAME" <?php echo '"<input value="'.$name. '""'?>>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-md-12 col-md-offset-4 settingForm">
            <h3 style="margin-top:-10px;">Email:</h3>
            <input type="email" style="height:70px" name="email"
             class=" form form-control input-lg" id="inputEmail"
              placeholder="EMAIL" <?php echo '"<input value="'.$email. '""'?>>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-md-12 col-md-offset-4 settingForm">
            <h3 style="margin-top:-10px;">Password:</h3>
            <input type="text" style="height:70px" name="password"
            class="form form-control input-lg" id="inputPassword"
            placeholder="PASSWORD"<?php echo '"<input value="'.$password. '""'?>>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-md-12 col-md-offset-4">
            <h3 style="margin-top:-10px;">Level:</h3>
            <select class="form-control" id="chooselevel" name="level"
             style="width:470px;height:70px;font-size: 18px;">
              <?php echo '<option value="' . $level . '">'. $level .'</option>';
              if ($level == "BEGINNER") {
                echo '<option value="' ."ADVANCE". '">'."ADVANCE".'</option>';
                echo '<option value="' ."EXPERT". '">'."EXPERT".'</option>';
              }
              else if ($level == "ADVANCE") {
                echo '<option value="' ."BEGINNER". '">'."BEGINNER".'</option>';
                echo '<option value="' ."EXPERT". '">'."EXPERT".'</option>';
              }
              else if ($level == "EXPERT") {
                echo '<option value="' ."BEGINNER". '">'."BEGINNER".'</option>';
                echo '<option value="' ."ADVANCE". '">'."ADVANCE".'</option>';
              }
              ?>
            </select>
          </div>
        </div>

        <div class="row" style="margin-top:5%">
          <div class="col-xs-3 col-md-2 col-md-offset-4"
          style="margin-right:0.8%">
            <button type="submit" name="submit" class="setting">SAVE</button>
          </div>

          <div class="col-xs-3 col-md-2">
            <a href="memberPage.php">
              <button type="button" class="setting">BACK TO HOMEPAGE</button>
            </a>
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
