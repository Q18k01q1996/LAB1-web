$(document).ready(function () {

  $("#submitBtn").on("click", function (e) {
    var usernameField = $("#username").val();
    var passwordField = $("#password").val();
    var emailField = $("#email").val();
    var repeatPasswordField = $("#password2").val();
    e.preventDefault()
    size = checkInputs();
    if(size === true) {
      $.ajax({
        type: "POST",
        url: "CreateAccount.php",
        dataType: "json",
        data: {username:usernameField, password:passwordField, email:emailField, password2:repeatPasswordField},
        success : function(data){
            if (data.code == "200"){          
              $(".alert-succes").html(data.msg);
              $(".alert-succes").css("display","block");
            } else {
                $(".alert-nosucces").html(data.msg);
                $(".alert-nosucces").css("display","block");
            }
        }
      });
    }
  });
  });


function checkInputs() {

  const usernameValue = username.value.trim();
  const emailValue = email.value.trim();
  const passwordValue = password.value.trim();
  const password2Value = password2.value.trim();
  
var status = true;
  
  if (usernameValue === '') {
  setErrorFor(username, 'Numele de utilizator nu este completat!');
   status = false;
  }
  
  else {
  setSuccesFor (username);
  }

   if (emailValue === '') {
    setErrorFor(email, 'Emailul nu este completat!');
    status = false;
    } else if (!validateEmail(emailValue)) {
      setErrorFor(email, 'Emailul nu este valid!');
      status = false;
    } else {
      setSuccesFor (email);
    }
    
    var textLength = passwordValue.length;

    if (passwordValue === '') {
      setErrorFor(password, 'Introduceti campul!');
      status = false;
      } else if (textLength<=8) {
        setErrorFor(password, 'Completati campul cu minim 8 caractere!');
        status = false;
      }
      
      else {
      setSuccesFor (password);
      }

      if (password2Value ==='') {
        setErrorFor(password2, 'Introduceti campul!');
        status = false;
        } else if (passwordValue !== password2Value) {
          setErrorFor(password2, 'Parola nu coincide!');
          status = false;
        }
        else {
        setSuccesFor (password2);
        }

        return status;
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