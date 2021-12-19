<?php

$msg = "";


if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($_POST['username']) || empty($_POST['message'])){
    echo "<div class='alert-nosucces'>Completeaza campurile!</div>";
  }
  else {
   
      echo "<div class='alert-succes'>Ati introdus datele:<br>Username: $_POST[username]<br>Message: $_POST[message]</div>";
      
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
<script src="contactus.js"></script>
<body>

<div class="message"></div>
  <header>
    <div class="header"><h2>Contact US</h2></div>
    <form class="form" id="form" name='contactForm' action="" method="POST">
      <div class="form-control">
        <label> Username</label>
        <input type="text" placeholder="UserName" name="username" id="username" maxlength="30">
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>
      <label> Message</label>
  
    
      <div class="form-control">
        
        <textarea id="message" name="message" placeholder="Write something.."></textarea>
        <small>Error message</small>
      </div>
    
      <button id="submitBtn" type="submit">Submit</button>
     
    </form>
  </header>
</body>
</html>