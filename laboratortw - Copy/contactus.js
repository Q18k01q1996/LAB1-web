$(document).ready(function () {
  var usernameField = $("#username");
  var messageField = $("message");


  $("form[name='contactForm']").submit(function (e) {
    e.preventDefault();
    contactRequest();
  });
});



function contactRequest() {
  let uname = $("input[name='username']").val();
  let message = $("input[name='message']").val();

  $.ajax({
    type: "POST",
    url: "http://localhost/laboratortw/contactus.php",
    data: { username: uname, password: message },
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
  const messageValue = message.value.trim();


  var c = 0;

  if (usernameValue === '') {
    setErrorFor(username, 'Numele de utilizator nu este completat!');
    var c = 1;
  }

  else {
    setSuccesFor(username);
  }


  var textLength = messageValue.length;

  if (messageValue === '') {
    setErrorFor(message, 'Introduceti campul!');
    var c = 1;
  } else if (textLength <= 30) {
    setErrorFor(message, 'Completati campul cu minim 30 caractere!');
    var c = 1;
  }

  else {
    setSuccesFor(message);
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
