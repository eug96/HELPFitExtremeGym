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

  location.replace("TrainerLogin.html")
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

  location.replace("MemberLogin.html")
}

$(".btn").mouseup(function(){
    $(this).blur();
})

<<<<<<< HEAD
$('#updateModalHorizontal').on('shown.bs.modal', function () {
  $.getScript('javascript.js');
});

$('#updateModalHorizontal').on('shown.bs.modal', function () {
  //then put your script here
  alert("Test");
});

function updateValidation(){
=======
function UpdateValidation(){

  var date = document.getElementById('inputDate');
  var time = document.getElementById('inputTime');
  var fee = document.getElementById('inputFee');
  var valclass = document.getElementById('selClass');
  var status = document.getElementById('selStatus');

  if (inputDate.value.length==0) {
      alert("Please Enter Date");
      return false;
  }

  else if (inputTime.value.length==0) {
    alert("Please Enter Time");
    return false;
  }

}

// $(function() {
//
//   $("#updateModalHorizontal").validate({
//     rules: {
//       inputDate: {
//         required: true,
//
//       },
//       action: "required"
//     },
//     messages: {
//       inputDate: {
//         required: "Please enter date",
//
//       },
//       action: "Please enter date"
//     }
//   });
// });
//
// $('#updateModalHorizontal').on('submit', function(e) {
//   var date = $('#inputDate');
//
//   // Check if there is an entered value
//   if(!inputDate.val()) {
//     // Add errors highlight
//     inputDate.closest('.form-group').removeClass('has-success').addClass('has-error');
//
//     // Stop submission of the form
//     e.preventDefault();
//   } else {
//     // Remove the errors highlight
//     inputDate.closest('.form-group').removeClass('has-error').addClass('has-success');
//   }
// });
