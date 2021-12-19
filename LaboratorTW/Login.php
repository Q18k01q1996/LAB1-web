<?php

$msg = "";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($_POST['username']) || empty($_POST['password'])){
    echo "<div class='alert-nosucces'>Completeaza campurile!</div>";
    
  } elseif (strlen($_POST["password"]) <= '8') {
    echo "<div class='alert-nosucces'>Parola nu are 8 elemente!</div>";}
  else {   
      echo "<div class='alert-succes'>Ati introdus datele:<br>Username: $_POST[username]<br>Password: $_POST[password]</div>";
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
  <script src="./jquery.js"></script>
  <script src="./jquery.validate.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <title>LemonWares</title>
</head>
<script src="login.js"></script>
<body>
  <div class="message"></div>
  <header>
    <div class="header"><h2>Create Account</h2></div>
    <form class="form" name="loginForm" id="form" action="Login.php" method="POST">
      <div class="form-control">
        <label> Username</label>
        <input type="text" placeholder="UserName" name="username">
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
      
      </div>

      <div class="form-control">
        <label> Password</label>
        <input type="password" placeholder="Password" name="password">
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        
      </div>
    
      <button id="loginBtn" type="submit">Submit</button>
     
    </form>
  </header>
</body>
</html>