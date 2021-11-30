<?php

$msg = "";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($_POST['username']) || empty($_POST['password'])){
    $msg = "<div class='alert-nosucces'>Completeaza campurile!</div>";
    
  } elseif (strlen($_POST["password"]) <= '8') {
    $msg = "<div class='alert-nosucces'>Parola nu are 8 elemente!</div>";}
  else {
    
      $msg = "<div class='alert-succes'>Logarea a avut loc cu succes!</div>";
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
<script src="login.js"></script>
<body>
<?php echo $msg; ?>
  <header>
    <div class="header"><h2>Create Account</h2></div>
    <form class="form" id="form" action="Login.php" method="POST">
      <div class="form-control">
        <label> Username</label>
        <input type="text" placeholder="UserName" name="username" id="username" maxlength="30">
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>

      <div class="form-control">
        <label> Password</label>
        <input type="password" placeholder="Password" name="password" id="password" maxlength="30">
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>
    
      <button id="submitBtn" type="submit">Submit</button>
     
    </form>
  </header>
</body>
</html>