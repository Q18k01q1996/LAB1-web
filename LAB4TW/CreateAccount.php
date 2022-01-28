<?php

$msg = "";


if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])){
    echo "<div class='alert-nosucces'>Completeaza campurile!</div>";
  }
  else {    
    echo "<div class='alert-succes'>Ati introdus datele:<br>Username: $_POST[username]<br>Password: $_POST[password]<br>Email: $_POST[email]</div>";
 
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link rel="stylesheet" href="createaccount.css">
  
  <title>LemonWares</title>
</head>

<body>
  <div class="message"></div>
  <header>
    <div class="header"><h2>Create Account</h2></div>
    <form class="form" id="form" name='regForm' action="" method="post">
      <div class="form-control">
        <label> Username</label>
        <input type="text" placeholder="UserName" name="username" id="username" maxlength="30">
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        
      </div>

      <script src="createaccount.js"></script>
   
      <div class="form-control">
        <label> Email</label>
        <input type="email" placeholder="UserName@gmail.com" name="email" id="email" maxlength="30">
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        
      </div>

  
      <div class="form-control">
        <label> Password</label>
        <input type="password" placeholder="Password" name="password" id="password" maxlength="30">
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        
      </div>

      
   
      <div class="form-control">
        <label> Password check</label>
        <input type="password" placeholder="Repeat Password" name="password2" id="password2">
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        
      </div>

    
      <button type ="submit" id="submitBtn">Submit</button>
      
    </form>
  </header>
</body>
</html>