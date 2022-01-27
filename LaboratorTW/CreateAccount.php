<?php

$errorMSG = "";

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['password2'])){
    $errorMSG = "Completeaza campurile!";
  }else {
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errorMSG = "Emailul nu este valid!";
    }
    elseif($_POST['password'] != $_POST['password2']) {
      $errorMSG = "Parolele nu coincid!";
    }
    elseif (strlen($_POST["password"]) <= '8') {
      $errorMSG = "Parola nu are 8 elemente!";
  }

  if(empty($errorMSG)){

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $conn = new mysqli('localhost','root','','lemonwares');

    $sql = "INSERT INTO users(username, email, password)
    VALUES ('$username', '$email', '$hash')";
    if($conn->query($sql) === TRUE) {
      $msg= "Logarea a avut loc cu succes!";
      echo json_encode(['code'=>200, 'msg'=>$msg]);
    }
    else{
        echo "Error: ".$sql. "<br>".$conn->error;
      }
  }else {
    echo json_encode(['code'=>404, 'msg'=>$errorMSG]);
  }
  }

  

}


?>