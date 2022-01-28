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
  
    
      
  
    
  
 



?>