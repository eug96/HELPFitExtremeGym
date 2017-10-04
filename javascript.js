function MemberLogin() {
    var username = document.getElementById('inputUsername');
    var password = document.getElementById('inputPassword');

    if (username.value.length==0) {
        alert("Please Enter Username");
        return false;
    }

    else if (password.value.length==0) {
      alert("Please Enter Password");
      return false;
    }

    location.replace("memberPage.html");

}

function TrainerLogin() {
    var username = document.getElementById('inputUsername');
    var password = document.getElementById('inputPassword');

    if (username.value.length==0) {
        alert("Please Enter Username");
        return false;
    }

    else if (password.value.length==0) {
      alert("Please Enter Password");
      return false;
    }

    location.replace("trainerPage.html");
}

function SignUpTrainer(){
  var username = document.getElementById('inputUsername');
  var password = document.getElementById('inputPassword');
  var name = document.getElementById('inputName');
  var email = document.getElementById('inputEmail');

  if (username.value.length==0) {
      alert("Please Enter Username");
      return false;
  }

  else if (name.value.length==0) {
    alert("Please Enter Name");
    return false;
  }

  else if (email.value.length==0) {
    alert("Please Enter Email");
    return false;
  }

  else if (password.value.length==0) {
    alert("Please Enter Password");
    return false;
  }

  location.replace("trainerLogin.html");
}

function SignUpMember(){
  var username = document.getElementById('inputUsername');
  var password = document.getElementById('inputPassword');
  var name = document.getElementById('inputName');
  var email = document.getElementById('inputEmail');

  if (username.value.length==0) {
      alert("Please Enter Username");
      return false;
  }

  else if (name.value.length==0) {
    alert("Please Enter Name");
    return false;
  }

  else if (email.value.length==0) {
    alert("Please Enter Email");
    return false;
  }

  else if (password.value.length==0) {
    alert("Please Enter Password");
    return false;
  }

  location.replace("memberLogin.html");
}

function SettingTrainer(){
  location.replace("trainerPage.html");
  alert("Your Data Has Been Saved");
}

function SettingMember(){
  location.replace("memberPage.html");
  alert("Your Data Has Been Saved");
}

function AttendTrainingSession(){
  var trainingSession = document.getElementById('chooseTrainingSession')

  if(trainingSession.value== "CHOOSE TRAINING SESSION"){
    alert("Please Select a Training Session to Attend");
    return false;
  }

  alert("You Attended " + trainingSession.value + " Training Session");
  location.replace("memberPage.html");
}

function recordGroupTraningSession(){
  var title = document.getElementById('inputTitle');
  var maxParticipates = document.getElementById('inputMaxParticipates');
  var classType = document.getElementById('classType');

  if(title.value.length==0){
    alert("Please Enter the Title of the Training Session");
    return false;
  }

  else if(maxParticipates.value.length==0){
    alert("Please Enter the Maximum Number of" +
    " Participants of the Training Session");
    return false;
  }

  else if(classType.value=="SELECT CLASS TYPE"){
    alert("Please Select the Class Type of the Training Session");
    return false;
  }

  location.replace("trainerPage.html")
  alert("Group Training Session has Been Created");
}
