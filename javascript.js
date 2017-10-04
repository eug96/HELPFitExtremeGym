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


  location.replace("MemberLogin.html");
}

function UpdateValidation(){

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

function updateValidation(){
  
  var date = document.getElementById('inputDate');
  var time = document.getElementById('inputTime');
  var fee = document.getElementById('inputFee');
  var valclass = document.getElementById('selClass');
  var status = document.getElementById('selStatus');

  if (date.value.length==0) {
      alert("Please Enter Date!");
      return false;
  }

  else if (time.value.length==0) {
    alert("Please Enter Time!");
    return false;
  }

  else if (fee.value.length==0) {
    alert("Please Enter Fee!");
    return false;
  }

  else if (valClass.value.length==0) {
    alert("Please Select a Class!");
    return false;
  }

  else if (status.value.length==0) {
    alert("Please Enter Status!");
    return false;
  }

  location.replace("updatetrainer.html");
}

function reviewValidation(){
  var radios = document.getElementsByName("rating");

for (var i = 0, len = radios.length; i < len; i++) {
     if (radios[i].checked) {
         return true;
     }
}

alert("Please Select a Rating!");
return false;

  location.replace("reviewtrainer.html");
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
