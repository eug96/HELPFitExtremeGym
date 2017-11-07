<!DOCTYPE html>

<?php
  session_start();
  $name=$_SESSION['name'];
  $sessionUsername=$_SESSION['username'];
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Update Training Session</title>

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
  <script src="javascript.js" type="text/javascript"></script>

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
          <a href="trainerSetting.php">SETTING</a>
        </li>
      </ul>




  <div id="updatebgimg">
  <div class="container-fluid">

    <!-- <div class="bgimg ">
      <img src="training3.jpg" alt="Background" class="img-responsive">
    </div> -->

  <div class="row" >
  <br/>
  <div class="col-xs-12 col-md-12">
    <span class="welcome">Welcome, <span id="welcome"><?php echo " ". $name.""; ?></span></span>
  </div>

  </div>


  .<div class="row">

  <div class="col-xs-12 col-md-12">
    <table class="table table-responsive table-bordered viewmember">

      <thead>
      <tr>
      <th class="col-md-1 col-xs-1">Session ID</th>
      <th class="col-md-2 col-xs-1">Title</th>
      <th class="col-md-1 col-xs-1">Date</th>
      <th class="col-md-1 col-xs-1">Time</th>
      <th class="col-md-1 col-xs-1">Fee</th>
      <th class="col-md-1 col-xs-1">Status</th>
      <th class="col-md-2 col-xs-2">Max Participants</th>
      <th class="col-md-2 col-xs-2">Number Of Participants</th>
      <th class="col-md-1 col-xs-1">Type</th>
      <th class="col-md-1 col-xs-1">Notes</th>
      </tr>
      </thead>

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
      $sql = "SELECT * FROM viewtraininghistory WHERE username = '$sessionUsername'";
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
           <td>RM '. $row["fee"].'</td>
           <td>'. $row["status"].'</td>
           <td>'. $row["maxParticipates"].'</td>
           <td>'. $row["numParticipates"].'</td>
           <td>'. $row["type"].'</td>
           <td>'. $row["notes"].'</td>
           </tr>';
              // echo "Title:" . $row["title"]. " Type: " . $row["type"]."</br>";
          }
      } else {
          echo "0 results";
      }
       ?>
     </tbody>
    </table>
  </div>


  <br/>

  <div class="row">
    <div class=" col-md-push-5 col-md-offset-7 col-sm-push-4 col-sm-offset-2">
      <a href="trainerPage.php" role="button" class="btn navButton">Back</a>
      <!-- <a href="#" class="navButton"><span id="revieworupdate">Review Trainer</span></a> -->
      <a class="btn navButton" data-toggle="modal" data-target="#updateModalHorizontal">
          Update Training Session
      </a>
      <!-- Modal -->
      <div class="modal fade" id="updateModalHorizontal" tabindex="-1" role="dialog"
           aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                      <button type="button" class="close"
                         data-dismiss="modal">
                             <span aria-hidden="true">&times;</span>
                             <span class="sr-only">Close</span>
                      </button>
                      <h4 class="modal-title" id="myModalLabel">
                          Update Training Session
                      </h4>
                  </div>



                  <!-- Modal Body -->
                  <div class="modal-body">

                      <form class="form-horizontal" role="form" id="updateModalHorizontal"
                      action="updateProcess.php" method="post">
                        <div class="form-group">
                          <label  class="col-sm-2 control-label"
                                    for="inputSession">Choose a Session</label>
                          <div class="col-sm-10">
                          <select class="form-control" name="chooseSession">
                            <option>CHOOSE TRAINING SESSION</option>
                            <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "helpfitextremegym";
                            $con = new mysqli($servername, $username, $password, $dbname);

                            $sql = "SELECT * FROM viewtraininghistory WHERE username = '$sessionUsername'";
                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                               while($row = mysqli_fetch_assoc($result)) {
                                 echo '
                                 <option>'. $row["sessionID"].'</option>

                                 ';
                                    // echo "Title:" . $row["title"]. " Type: " . $row["type"]."</br>";
                                }
                            } else {
                                echo "0 results";
                            }
                             ?>
                          </select>
                        </div>
                          <label  class="col-sm-2 control-label"
                                    for="inputDate">Date</label>
                          <div class="col-sm-10">
                              <input type="date" class="form-control"
                              id="inputDate" name="inputDate" placeholder="Date" required
                              value=""/>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label"
                                for="inputTime" >Time</label>
                          <div class="col-sm-10">
                              <input type="time" class="form-control"
                                  id="inputTime" name="inputTime" placeholder="Time" required/>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label"
                                for="inputFee" >Fee</label>
                          <div class="col-sm-10">
                              <input type="number" class="form-control"
                                  id="inputFee" name="inputFee" placeholder="Fee" required/>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label"
                                for="selClass" >Class Type</label>
                          <div class="col-sm-10">
                            <select class="form-control" id="selClass" name="selClass" required>
                              <option>Personal</option>
                              <option>Group</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label"
                                for="selStatus" >Status</label>
                          <div class="col-sm-10">
                            <select class="form-control" id="selStatus" name="selStatus" required>
                            <option value="Available">Available</option>
                            <option value="Completed">Completed</option>
                            <option value="Cancelled">Cancelled</option>
                          </select>
                          </div>
                        </div>
                      <!-- </form> -->

                  </div>

                  <!-- Modal Footer -->
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default"
                              data-dismiss="modal">
                                  Close
                      </button>
                      <button type="submit" class="btn btn-primary" onclick="updateValidation()">
                          Update
                      </button>
                  </div>
              </div>
              </form>
          </div>
      </div>

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
        <div class="col-xs-6 col-xs-offset-4 col-md-5 col-md-offset-5 footertext">
          @2017 HELPFIT EXTREME GYM
        </div>
    </div>

    </div>

</body>
</html>
