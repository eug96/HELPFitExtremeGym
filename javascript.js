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
