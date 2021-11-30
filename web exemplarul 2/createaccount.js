$(document).ready(function () {
  var usernameField = $("#username");
  var passwordField = $("#password");
  var emailField = $("#email");
  var repeatPasswordField = $("#password2");

  $("#submitBtn").on("click", function (e) {
    e.preventDefault()
    size = checkInputs();
   
    if (size === 0) {
        document.getElementById("form").submit();
    }
  });
  });


function checkInputs() {

  const usernameValue = username.value.trim();
  const emailValue = email.value.trim();
  const passwordValue = password.value.trim();
  const password2Value = password2.value.trim();
  
  var c = 0;
  
  if (usernameValue === '') {
  setErrorFor(username, 'Numele de utilizator nu este completat!');
  var c = 1;
  }
  
  else {
  setSuccesFor (username);
  }

   if (emailValue === '') {
    setErrorFor(email, 'Emailul nu este completat!');
    var c = 1;
    } else if (!validateEmail(emailValue)) {
      setErrorFor(email, 'Emailul nu este valid!');
      var c = 1;
    } else {
      setSuccesFor (email);
    }
    
    var textLength = passwordValue.length;

    if (passwordValue === '') {
      setErrorFor(password, 'Introduceti campul!');
      var c = 1;
      } else if (textLength<=8) {
        setErrorFor(password, 'Completati campul cu minim 8 caractere!');
        var c = 1;
      }
      
      else {
      setSuccesFor (password);
      }

      if (password2Value ==='') {
        setErrorFor(password2, 'Introduceti campul!');
        var c = 1;
        } else if (passwordValue !== password2Value) {
          setErrorFor(password2, 'Parola nu coincide!');
          var c = 1;
        }
        else {
        setSuccesFor (password2);
        }

        return c;
  }


function setErrorFor (input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector('small');

  small.innerText = message;

  formControl.className = 'form-control error';
}

function setSuccesFor (input, message) {

  const formControl = input.parentElement;

  formControl.className = 'form-control succes';

}

function validateEmail(email) {
  const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}