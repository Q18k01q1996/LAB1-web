<?php

$msg = "";


if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($_POST['username']) || empty($_POST['message'])){
    $msg = "<div class='alert-nosucces'>Completeaza campurile!</div>";
  }else {
    if (strlen($_POST["message"]) <= '30') {
      $msg = "<div class='alert-nosucces'>Campul nu are 30 elemente!</div>";
  }
  else {
   
      $msg = "<div class='alert-succes'>Mesajul a fost trimis cu succes!</div>";
      
  }
  
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
<?php echo $msg; ?>
  <header>
    <div class="header"><h2>Contact US</h2></div>
    <form class="form" id="form" action="" method="POST">
      <div class="form-control">
        <label> Username</label>
        <input type="text" placeholder="UserName" name="username" id="username" maxlength="30">
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>

      <div class="form-control">
        <label> Country</label>
        <select id="country" name="country">
          <option value="australia">Moldova</option>
          <option value="canada">Romania</option>
          <option value="usa">USA</option>
        </select>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>

  
    <form class="form" id="form" action="" method="POST">
      <div class="form-control">
        <label> Message</label>
        <input type="text" placeholder="Your question" name="message" id="message" maxlength="300">
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>
    
      <button id="submitBtn" type="submit">Submit</button>
     
    </form>
  </header>
</body>
</html>