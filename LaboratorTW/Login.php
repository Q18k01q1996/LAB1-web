<?php

$errorMSG = "";
//$msg= "Logarea a avut loc cu succes!";
    $username = $_POST["username"];  
    $password = $_POST["password"];
    $hash = password_hash($password, PASSWORD_DEFAULT);
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($_POST['username']) || empty($_POST['password'])){
    $errorMSG = "Completeaza campurile";
    
  } elseif (strlen($_POST["password"]) <= '8') {
    $errorMSG = "Parola nu are 8 elemente!";
  }
  else {   
    
    $conn = new mysqli('localhost','root','','lemonwares');

    if (mysqli_connect_errno()) {
      echo "\nBaza de date Close\n";
      } else {
        echo "\nBaza de date Open\n";
      }
    
      
  
    $sql = "SELECT username, password FROM users WHERE username = '$username'";
   
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
      if(password_verify($password, $row['password'])) {
        $msg= "Logarea a avut loc cu succes!";
        echo json_encode(['code'=>200, 'msg'=>$msg]);
      }else{
        $errorMSG = "Parola nu este corecta!";
        echo json_encode(['code'=>404, 'msg'=>$errorMSG]);
      }
    } else {
      $errorMSG = "Contul nu exista!";
        echo json_encode(['code'=>404, 'msg'=>$errorMSG]);
    }
    
  }

  }

 
  
 



?>