$(document).ready(function () {
  var usernameField = $("#username");
  var passwordField = $("#password");

  $("form[name='loginForm']").submit(function (e) {
    e.preventDefault();
    loginRequest();
  });
});


function loginRequest() {
  let uname = $("input[name='username']").val();
  let pwd = $("input[name='password']").val();

  $.ajax({
    type: "POST",
    url: "http://localhost/LaboratorTW/Login.php",
    data: { username: uname, password: pwd },
    dataType: "html",
    success: (response) => {
      $(".form").css("display", "none");
      $(".header").css("display", "none");
      $(".message").html(response);
    },
    error: () => {
      alert("Something went wrong. :(");
    }
  })
}

function checkInputs() {

  const usernameValue = username.value.trim();

  const passwordValue = password.value.trim();


  var c = 0;

  if (usernameValue === '') {
    setErrorFor(username, 'Numele de utilizator nu este completat!');
    var c = 1;
  }

  else {
    setSuccesFor(username);
  }


  var textLength = passwordValue.length;

  if (passwordValue === '') {
    setErrorFor(password, 'Introduceti campul!');
    var c = 1;
  } else if (textLength <= 8) {
    setErrorFor(password, 'Completati campul cu minim 8 caractere!');
    var c = 1;
  }

  else {
    setSuccesFor(password);
  }

  return c;
}


function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector('small');

  small.innerText = message;

  formControl.className = 'form-control error';
}

function setSuccesFor(input, message) {

  const formControl = input.parentElement;

  formControl.className = 'form-control succes';

}
