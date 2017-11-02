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
}

function TrainerSignUp(){
  var username = document.getElementById('inputUsername');
  var name = document.getElementById('inputName');
  var email = document.getElementById('inputEmail');
  var password = document.getElementById('inputPassword');
  var specialty = document.getElementById('inputSpecialty');

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

  else if (specialty.value.length==0) {
    alert("Please Enter Your Specialty");
    return false;
  }
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
  var trainingSession = document.getElementById('inputChooseTrainingSession');

  if(trainingSession.value== "CHOOSE TRAINING SESSION"){
    alert("Please Select a Training Session to Attend");
    return false;
  }

  alert("You Attended " + trainingSession.value + " Training Session");
}

function recordGroupTraningSession(){
  var title = document.getElementById('inputTitle');
  var maxParticipates = document.getElementById('inputMaxParticipates');
  var classTypes = document.getElementById('inputClassType');

  if(title.value.length==0){
    alert("Please Enter the Title of the Training Session");
    return false;
  }

  else if(maxParticipates.value.length==0){
    alert("Please Enter the Maximum Number of Participants");
    return false;
  }

  else if(classTypes.value=="SELECT CLASS TYPE"){
    alert("Please Select Class Type");
    return false;
  }

  alert("Group Training Session has Been Created");
}

function dateFormat(){
  var today = new Date();
  var day = today.getDate().toString();
  var month = today.getMonth() + 1;
  var newMonth = month.toString();
  var year = today.getFullYear().toString();
  var date = day + " / " + newMonth + " / " + year;

  document.getElementById("inputDate").value= date;
  document.getElementById("inputTime").value= "20 : 00";
}

function recordPersonalTraningSession(){
  var title = document.getElementById('inputTitle');
  var fee = document.getElementById('inputFee');
  var notes = document.getElementById('inputNotes');



  if(title.value.length==0){
    alert("Please Enter the Title of the Training Session");
    return false;
  }

  else if(fee.value.length==0){
    alert("Please Enter the Fee");
    return false;
  }

  else if(notes.value.length==0){
    alert("Please Enter Notes");
    return false;
  }

  alert("Personal Training Session has Been Created");
}
